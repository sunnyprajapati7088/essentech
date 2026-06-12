<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'menu_id',
        'title',
        'short_descrption',
        'slug',
        'content',
        'banner_image',
        'meta_title',
        'meta_description',
        'schema',
        'status',
    ];


    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }


    public function pageSections()
{
    return $this->hasMany(PageSection::class);
}

// Direct many-to-many through PageSection
public function sections()
{
    return $this->belongsToMany(
        Section::class,
        'page_sections', // table name of PageSection
        'page_id',       // foreign key on page_sections table
        'section_id'     // foreign key on page_sections table
    )->withPivot('order', 'is_active')->withTimestamps();
}

}
