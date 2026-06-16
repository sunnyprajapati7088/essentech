<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    // All brands data in one place
    public static function getBrands(): array
    {
        return [
            ['name'=>'Samsung',   'slug'=>'samsung',   'color'=>'#1428A0', 'text'=>'#fff', 'desc'=>'Expert Samsung appliance repair in Kochi, Kerala.'],
            ['name'=>'LG',        'slug'=>'lg',        'color'=>'#A50034', 'text'=>'#fff', 'desc'=>'Certified LG appliance repair at your doorstep.'],
            ['name'=>'Whirlpool', 'slug'=>'whirlpool', 'color'=>'#003DA5', 'text'=>'#fff', 'desc'=>'Trusted Whirlpool repair service in Kerala.'],
            ['name'=>'IFB',       'slug'=>'ifb',       'color'=>'#E31837', 'text'=>'#fff', 'desc'=>'Fast and reliable IFB appliance repair.'],
            ['name'=>'Bosch',     'slug'=>'bosch',     'color'=>'#EA0016', 'text'=>'#fff', 'desc'=>'Professional Bosch appliance repair service.'],
            ['name'=>'Haier',     'slug'=>'haier',     'color'=>'#0073CF', 'text'=>'#fff', 'desc'=>'Affordable Haier appliance repair in Kochi.'],
            ['name'=>'Godrej',    'slug'=>'godrej',    'color'=>'#003087', 'text'=>'#fff', 'desc'=>'Godrej appliance repair by certified technicians.'],
            ['name'=>'Panasonic', 'slug'=>'panasonic', 'color'=>'#003087', 'text'=>'#fff', 'desc'=>'Panasonic appliance repair at your home.'],
            ['name'=>'Voltas',    'slug'=>'voltas',    'color'=>'#E2231A', 'text'=>'#fff', 'desc'=>'Voltas AC and appliance repair in Kerala.'],
            ['name'=>'Daikin',    'slug'=>'daikin',    'color'=>'#0067B1', 'text'=>'#fff', 'desc'=>'Daikin AC service and repair in Kochi.'],
            ['name'=>'Hitachi',   'slug'=>'hitachi',   'color'=>'#E4032E', 'text'=>'#fff', 'desc'=>'Hitachi appliance repair by expert technicians.'],
            ['name'=>'Blue Star', 'slug'=>'blue-star', 'color'=>'#0055A5', 'text'=>'#fff', 'desc'=>'Blue Star AC repair and service in Kerala.'],
            ['name'=>'Carrier',   'slug'=>'carrier',   'color'=>'#004C97', 'text'=>'#fff', 'desc'=>'Carrier AC repair and maintenance service.'],
            ['name'=>'Lloyd',     'slug'=>'lloyd',     'color'=>'#E31837', 'text'=>'#fff', 'desc'=>'Lloyd AC and appliance repair in Kerala.'],
            ['name'=>'Bajaj',     'slug'=>'bajaj',     'color'=>'#003087', 'text'=>'#fff', 'desc'=>'Bajaj appliance repair by trained technicians.'],
            ['name'=>'Videocon',  'slug'=>'videocon',  'color'=>'#E31837', 'text'=>'#fff', 'desc'=>'Videocon appliance repair service in Kochi.'],
            ['name'=>'Onida',     'slug'=>'onida',     'color'=>'#C8102E', 'text'=>'#fff', 'desc'=>'Onida appliance repair at your doorstep.'],
            ['name'=>'Toshiba',   'slug'=>'toshiba',   'color'=>'#E4002B', 'text'=>'#fff', 'desc'=>'Toshiba appliance repair in Kerala.'],
            ['name'=>'Sharp',     'slug'=>'sharp',     'color'=>'#003087', 'text'=>'#fff', 'desc'=>'Sharp appliance repair by expert technicians.'],
            ['name'=>'Siemens',   'slug'=>'siemens',   'color'=>'#009999', 'text'=>'#fff', 'desc'=>'Siemens appliance repair service in Kochi.'],
        ];
    }

    // All appliances data
    public static function getAppliances(): array
    {
        return [
            ['name'=>'AC Repair',               'slug'=>'ac-repair',            'image'=>'appliances/ac.jpg',           'icon'=>'fa-wind',        'desc'=>'Split AC, window AC and cassette AC repair.'],
            ['name'=>'Washing Machine Repair',  'slug'=>'washing-machine-repair','image'=>'appliances/washing.jpg',     'icon'=>'fa-tshirt',      'desc'=>'Front load, top load and semi automatic repair.'],
            ['name'=>'Refrigerator Repair',     'slug'=>'refrigerator-repair',   'image'=>'appliances/refrigerator.jpg','icon'=>'fa-snowflake',   'desc'=>'Single door, double door fridge repair.'],
            ['name'=>'Microwave Oven Repair',   'slug'=>'microwave-repair',      'image'=>'appliances/microwave.jpg',   'icon'=>'fa-fire',        'desc'=>'Solo, grill and convection microwave repair.'],
            ['name'=>'Deep Freezer Repair',     'slug'=>'deep-freezer-repair',   'image'=>'appliances/freezer.jpg',    'icon'=>'fa-cube',        'desc'=>'Chest freezer and deep freezer repair.'],
            ['name'=>'Dishwasher Repair',       'slug'=>'dishwasher-repair',     'image'=>'appliances/dishwasher.jpg', 'icon'=>'fa-soap',        'desc'=>'Dishwasher repair and maintenance.'],
            ['name'=>'Water Purifier Repair',   'slug'=>'water-purifier-repair', 'image'=>'appliances/waterpurifier.jpg','icon'=>'fa-tint',      'desc'=>'RO and water purifier repair service.'],
            ['name'=>'Geyser Repair',           'slug'=>'geyser-repair',         'image'=>'appliances/geyser.jpg',     'icon'=>'fa-hot-tub',     'desc'=>'Water heater and geyser repair service.'],
        ];
    }

    // Level 1: All brands page
    public function index()
    {
        $brands = self::getBrands();
        return view('brands.index', [
            'brands' => $brands,
            'title' => 'Home Appliance Repair by Brand | EssenTechs Kochi Kerala',
            'meta_description' => 'EssenTechs provides expert home appliance repair for all brands — Samsung, LG, Whirlpool, IFB, Bosch, Haier, Godrej, Panasonic and more in Kochi, Kerala. Same-day service.',
            'meta_keywords' => 'Samsung repair Kochi, LG repair Kerala, Whirlpool repair Kochi, appliance repair by brand Kerala, EssenTechs',
        ]);
    }

    // Level 2: Brand detail — show all appliances for that brand
    public function brand(string $brandSlug)
    {
        $brands = self::getBrands();
        $brand = collect($brands)->firstWhere('slug', $brandSlug);

        if (!$brand) {
            abort(404);
        }

        $appliances = self::getAppliances();

        // Get blogs for this brand
        $blogs = Blog::where('slug', 'like', $brandSlug . '%')
            ->orWhere('title', 'like', '%' . $brand['name'] . '%')
            ->where('status', 'published')
            ->latest()
            ->take(6)
            ->get();

        return view('brands.brand', [
            'brand'           => $brand,
            'appliances'      => $appliances,
            'blogs'           => $blogs,
            'title'           => $brand['name'] . ' Appliance Repair in Kochi Kerala | EssenTechs',
            'meta_description' => 'EssenTechs provides expert ' . $brand['name'] . ' appliance repair in Kochi, Kerala. AC, washing machine, refrigerator, microwave repair. Same-day service. Call now!',
            'meta_keywords'   => $brand['name'] . ' repair Kochi, ' . $brand['name'] . ' service Kerala, ' . $brand['name'] . ' AC repair, ' . $brand['name'] . ' washing machine repair Kerala',
        ]);
    }

    // Level 3: Brand + Appliance — show blog content
    public function brandAppliance(string $brandSlug, string $applianceSlug)
    {
        $brands = self::getBrands();
        $brand = collect($brands)->firstWhere('slug', $brandSlug);

        $appliances = self::getAppliances();
        $appliance = collect($appliances)->firstWhere('slug', $applianceSlug);

        if (!$brand || !$appliance) {
            abort(404);
        }

        // Find matching blog
        $blog = Blog::where('slug', $brandSlug . '-' . $applianceSlug)
            ->orWhere('slug', 'like', $brandSlug . '%' . str_replace('-repair', '', $applianceSlug) . '%')
            ->orWhere('title', 'like', '%' . $brand['name'] . '%' . explode(' ', $appliance['name'])[0] . '%')
            ->where('status', 'published')
            ->first();

        // Related blogs
        $related = Blog::where('status', 'published')
            ->when($blog, fn($q) => $q->where('id', '!=', $blog->id))
            ->where(function($q) use ($brand, $appliance) {
                $q->where('title', 'like', '%' . $brand['name'] . '%')
                  ->orWhere('title', 'like', '%' . explode(' ', $appliance['name'])[0] . '%');
            })
            ->latest()->take(4)->get();

        return view('brands.appliance', [
            'brand'           => $brand,
            'appliance'       => $appliance,
            'blog'            => $blog,
            'related'         => $related,
            'allAppliances'   => $appliances,
            'title'           => $brand['name'] . ' ' . $appliance['name'] . ' in Kochi Kerala | EssenTechs',
            'meta_description' => 'Expert ' . $brand['name'] . ' ' . $appliance['name'] . ' in Kochi, Kerala by EssenTechs. Certified technicians, genuine parts, same-day service, warranty. Call +919746700889.',
            'meta_keywords'   => $brand['name'] . ' ' . strtolower($appliance['name']) . ' Kochi, ' . $brand['name'] . ' ' . strtolower($appliance['name']) . ' Kerala, EssenTechs',
        ]);
    }
}
