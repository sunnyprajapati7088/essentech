<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name', 'type', 'slug'];

    public function pageSections()
    {
        return $this->hasMany(PageSection::class);
    }
}
