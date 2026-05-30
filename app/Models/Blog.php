<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    // Table
    public const TABLE = 'blogs';

    // Column constants
    public const ID = 'id';
    public const TITLE = 'title';
    public const SLUG = 'slug';
    public const SHORT_DESCRIPTION = 'short_description';
    public const CONTENT = 'content';
    public const FEATURED_IMAGE = 'featured_image';
    public const AUTHOR_ID = 'author_id';
    public const STATUS = 'status';
    public const PUBLISHED_AT = 'published_at';

    public const META_TITLE = 'meta_title';
    public const META_DESCRIPTION = 'meta_description';


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
        self::AUTHOR_ID,
        self::STATUS,
        self::PUBLISHED_AT,
        self::META_TITLE,
        self::META_DESCRIPTION,

        self::CREATED_BY,
        self::UPDATED_BY,
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Example relationships (optional)
    public function author()
    {
        return $this->belongsTo(User::class, self::AUTHOR_ID);
    }
}
