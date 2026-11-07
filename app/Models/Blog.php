<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    use SoftDeletes;

    public const TABLE = 'blogs';

    public const ID = 'id';
    public const TITLE = 'title';
    public const SLUG = 'slug';
    public const SHORT_DESCRIPTION = 'short_description';
    public const CONTENT = 'content';
    public const FEATURED_IMAGE = 'featured_image';
    public const IMAGE_ALT = 'image_alt';
    public const CATEGORY = 'category';
    public const TAGS = 'tags';
    public const AUTHOR_NAME = 'author_name';
    public const AUTHOR_ID = 'author_id';
    public const STATUS = 'status';
    public const PUBLISHED_AT = 'published_at';

    public const META_TITLE = 'meta_title';
    public const META_DESCRIPTION = 'meta_description';
    public const FOCUS_KEYWORD = 'focus_keyword';
    public const SECONDARY_KEYWORDS = 'secondary_keywords';
    public const CANONICAL_URL = 'canonical_url';
    public const OG_TITLE = 'og_title';
    public const OG_DESCRIPTION = 'og_description';
    public const OG_IMAGE = 'og_image';
    public const SCHEMA_TYPE = 'schema_type';
    public const IS_FEATURED = 'is_featured';

    public const VIEWS_COUNT = 'views_count';
    public const CREATED_BY = 'created_by';
    public const UPDATED_BY = 'updated_by';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    public const DELETED_AT = 'deleted_at';

    protected $table = self::TABLE;

    protected $fillable = [
        self::TITLE,
        self::SLUG,
        self::SHORT_DESCRIPTION,
        self::CONTENT,
        self::FEATURED_IMAGE,
        self::IMAGE_ALT,
        self::CATEGORY,
        self::TAGS,
        self::AUTHOR_NAME,
        self::AUTHOR_ID,
        self::STATUS,
        self::PUBLISHED_AT,
        self::META_TITLE,
        self::META_DESCRIPTION,
        self::FOCUS_KEYWORD,
        self::SECONDARY_KEYWORDS,
        self::CANONICAL_URL,
        self::OG_TITLE,
        self::OG_DESCRIPTION,
        self::OG_IMAGE,
        self::SCHEMA_TYPE,
        self::IS_FEATURED,
        self::CREATED_BY,
        self::UPDATED_BY,
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public function getEffectiveMetaTitleAttribute(): string
    {
        return !empty($this->meta_title) ? $this->meta_title : "{$this->title} | EssenTechs Kochi";
    }

    public function getEffectiveMetaDescriptionAttribute(): string
    {
        if (!empty($this->meta_description)) {
            return $this->meta_description;
        }
        if (!empty($this->short_description)) {
            return Str::limit(strip_tags($this->short_description), 155);
        }
        return Str::limit(strip_tags($this->content), 155);
    }

    public function getEffectiveCanonicalUrlAttribute(): string
    {
        return !empty($this->canonical_url) ? $this->canonical_url : url('/blog/' . $this->slug);
    }

    public function getEffectiveImageAltAttribute(): string
    {
        return !empty($this->image_alt) ? $this->image_alt : $this->title . ' - EssenTechs Kochi';
    }
}
