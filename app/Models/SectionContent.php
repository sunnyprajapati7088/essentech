<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionContent extends Model
{
    protected $fillable = ['page_section_id', 'field_key', 'field_value', 'order'];

    public function pageSection()
    {
        return $this->belongsTo(PageSection::class);
    }
}
