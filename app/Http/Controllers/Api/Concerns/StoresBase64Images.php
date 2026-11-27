<?php

namespace App\Http\Controllers\Api\Concerns;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Decodes a base64 image sent by the MCP server, validates it, and stores it on the public disk.
 */
trait StoresBase64Images
{
    protected function storeBase64Image(string $base64, string $name, string $dir): string
    {
        $maxBytes = 5 * 1024 * 1024;
        $mimes = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/gif' => 'gif', 'image/webp' => 'webp'];

        if (str_starts_with($base64, 'data:') && str_contains($base64, ',')) {
            $base64 = substr($base64, strpos($base64, ',') + 1);
        }

        $binary = base64_decode($base64, true);
        abort_if($binary === false, 422, 'Image is not valid base64.');
        abort_if(strlen($binary) > $maxBytes, 422, 'Image is larger than 5MB.');

        $mime = (new \finfo(FILEINFO_MIME_TYPE))->buffer($binary);
        abort_unless(isset($mimes[$mime]), 422, 'Image must be JPEG, PNG, GIF or WebP.');

        $filename = Str::slug(pathinfo($name, PATHINFO_FILENAME)) ?: 'image';
        $path = trim($dir, '/') . '/' . $filename . '_' . (int) (microtime(true) * 10000) . '.' . $mimes[$mime];

        Storage::disk('public')->put($path, $binary);

        return $path;
    }

    protected function deletePublicFile(?string $path): void
    {
        if ($path && ! str_starts_with($path, 'http') && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
