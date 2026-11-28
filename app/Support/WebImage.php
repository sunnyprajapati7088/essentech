<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Saves uploaded images on the public disk at web size.
 *
 * AI image tools and phones produce 3–15 MB PNG/JPEG files, which make pages slow.
 * Every upload is scaled down to at most MAX_WIDTH pixels wide and re-encoded
 * (WebP for page images, JPEG for social-share images, which some apps don't
 * show as WebP). If GD can't read the file (e.g. an animated GIF) or the result
 * would be bigger, the original file is kept unchanged.
 */
final class WebImage
{
    public const MAX_WIDTH = 1600;

    /** Largest image (in pixels) we try to decode; bigger ones are stored as-is. */
    private const MAX_PIXELS = 50_000_000;

    private const EXTENSIONS = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/gif' => 'gif', 'image/webp' => 'webp'];

    public static function storeUpload(UploadedFile $file, string $dir, ?string $name = null, string $format = 'webp'): string
    {
        $name ??= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        return self::storeBinary((string) file_get_contents($file->getRealPath()), $dir, $name, $format);
    }

    /** @return string the stored path on the public disk, e.g. "admin/blog/image/ac-service_17958.webp" */
    public static function storeBinary(string $binary, string $dir, string $name, string $format = 'webp'): string
    {
        $base = (Str::slug(pathinfo($name, PATHINFO_FILENAME)) ?: 'image') . '_' . (int) (microtime(true) * 10000);
        $mime = (new \finfo(FILEINFO_MIME_TYPE))->buffer($binary) ?: '';

        $converted = $mime === 'image/gif' ? null : self::convert($binary, $mime, $format);
        if ($converted !== null && strlen($converted) < strlen($binary)) {
            $path = trim($dir, '/') . '/' . $base . '.' . $format;
            Storage::disk('public')->put($path, $converted);

            return $path;
        }

        $path = trim($dir, '/') . '/' . $base . '.' . (self::EXTENSIONS[$mime] ?? 'jpg');
        Storage::disk('public')->put($path, $binary);

        return $path;
    }

    private static function convert(string $binary, string $mime, string $format): ?string
    {
        if (! extension_loaded('gd') || ($format === 'webp' && ! function_exists('imagewebp'))) {
            return null;
        }
        $size = @getimagesizefromstring($binary);
        if (! $size || $size[0] * $size[1] > self::MAX_PIXELS) {
            return null;
        }

        // Decoding a large image needs about width x height x 5 bytes of memory.
        $oldLimit = ini_get('memory_limit');
        @ini_set('memory_limit', '512M');

        try {
            $image = @imagecreatefromstring($binary);
            if ($image === false) {
                return null;
            }
            $image = self::applyExifRotation($image, $binary, $mime);

            if (imagesx($image) > self::MAX_WIDTH) {
                $scaled = imagescale($image, self::MAX_WIDTH, -1, IMG_BICUBIC);
                imagedestroy($image);
                if ($scaled === false) {
                    return null;
                }
                $image = $scaled;
            }

            ob_start();
            if ($format === 'jpg') {
                // JPEG has no transparency: paint it on white.
                $canvas = imagecreatetruecolor(imagesx($image), imagesy($image));
                imagefill($canvas, 0, 0, imagecolorallocate($canvas, 255, 255, 255));
                imagecopy($canvas, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
                imageinterlace($canvas, true);
                imagejpeg($canvas, null, 82);
                imagedestroy($canvas);
            } else {
                imagepalettetotruecolor($image);
                imagealphablending($image, false);
                imagesavealpha($image, true);
                imagewebp($image, null, 80);
            }
            imagedestroy($image);

            return ob_get_clean() ?: null;
        } catch (\Throwable) {
            if (ob_get_level() > 0) {
                ob_end_clean();
            }

            return null;
        } finally {
            @ini_set('memory_limit', $oldLimit);
        }
    }

    /** Phone photos store their rotation in EXIF; GD ignores it, so apply it here. */
    private static function applyExifRotation(\GdImage $image, string $binary, string $mime): \GdImage
    {
        if ($mime !== 'image/jpeg' || ! function_exists('exif_read_data')) {
            return $image;
        }
        $exif = @exif_read_data('data://image/jpeg;base64,' . base64_encode($binary));
        $angle = match ((int) ($exif['Orientation'] ?? 1)) {
            3 => 180,
            6 => -90,
            8 => 90,
            default => 0,
        };
        if ($angle === 0) {
            return $image;
        }
        $rotated = imagerotate($image, $angle, 0);
        if ($rotated === false) {
            return $image;
        }
        imagedestroy($image);

        return $rotated;
    }
}
