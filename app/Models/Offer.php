<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Offer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'image_alt',
        'cta_text',
        'cta_url',
        'start_date',
        'end_date',
        'discount',
        'applicable_service',
        'applicable_brand',
        'location',
        'status',
        'priority',
        'seo_title',
        'meta_description',
        'canonical_url',
        'focus_keyword',
        'created_by',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'priority' => 'integer',
    ];

    /**
     * Scope only active and unexpired offers.
     */
    public function scopeActive($query)
    {
        $today = Carbon::today();

        return $query->where('status', 'active')
            ->where(function ($q) use ($today) {
                $q->whereNull('start_date')->orWhere('start_date', '<=', $today);
            })
            ->where(function ($q) use ($today) {
                $q->whereNull('end_date')->orWhere('end_date', '>=', $today);
            });
    }

    /**
     * Check and sync status based on expiry dates.
     */
    public function checkAndSyncStatus(): void
    {
        if ($this->status === 'active' && $this->end_date && $this->end_date->isPast()) {
            $this->status = 'expired';
            $this->save();
        }
    }

    public function getEffectiveSeoTitleAttribute(): string
    {
        return !empty($this->seo_title)
            ? $this->seo_title
            : "{$this->title} in Kochi | EssenTechs Offers";
    }

    public function getEffectiveMetaDescriptionAttribute(): string
    {
        return !empty($this->meta_description)
            ? $this->meta_description
            : "Avail {$this->title} from EssenTechs. Verified appliance repair discounts in Kochi, Kakkanad, and Ernakulam. Fast doorstep technician.";
    }

    public function getEffectiveCanonicalUrlAttribute(): string
    {
        return !empty($this->canonical_url)
            ? $this->canonical_url
            : url('/offers/' . $this->slug);
    }
}
