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
            ['name'=>'Samsung',   'slug'=>'samsung',   'color'=>'#1428A0', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/Samsung_Logo.svg',              'desc'=>'Expert Samsung appliance repair in Kochi, Kerala.'],
            ['name'=>'LG',        'slug'=>'lg',        'color'=>'#A50034', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/LG_logo_(2015).svg',            'desc'=>'Certified LG appliance repair at your doorstep.'],
            ['name'=>'Whirlpool', 'slug'=>'whirlpool', 'color'=>'#003DA5', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/Whirlpool_Corporation_logo.svg','desc'=>'Trusted Whirlpool repair service in Kerala.'],
            ['name'=>'IFB',       'slug'=>'ifb',       'color'=>'#E31837', 'text'=>'#fff', 'logo'=>'https://www.google.com/s2/favicons?domain=ifbappliances.com&sz=256',           'desc'=>'Fast and reliable IFB appliance repair.'],
            ['name'=>'Bosch',     'slug'=>'bosch',     'color'=>'#EA0016', 'text'=>'#fff', 'logo'=>'https://th.bing.com/th/id/OIP.Vfu1qcbvjpFAEe7WDjLc2QHaEK?w=292&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',                'desc'=>'Professional Bosch appliance repair service.'],
            ['name'=>'Haier',     'slug'=>'haier',     'color'=>'#0073CF', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/Haier_logo.svg',                'desc'=>'Affordable Haier appliance repair in Kochi.'],
            ['name'=>'Godrej',    'slug'=>'godrej',    'color'=>'#003087', 'text'=>'#fff', 'logo'=>'https://th.bing.com/th/id/OIP.40T6aeK82-mkFx5qI31AYwHaDG?w=300&h=146&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',                  'desc'=>'Godrej appliance repair by certified technicians.'],
            ['name'=>'Panasonic', 'slug'=>'panasonic', 'color'=>'#003087', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/Panasonic_logo_(Blue).svg',    'desc'=>'Panasonic appliance repair at your home.'],
            ['name'=>'Voltas',    'slug'=>'voltas',    'color'=>'#E2231A', 'text'=>'#fff', 'logo'=>'https://tse4.mm.bing.net/th/id/OIP.HQRn_WRNBWntGtqOF60OKwHaEK?rs=1&pid=ImgDetMain&o=7&rm=3',                  'desc'=>'Voltas AC and appliance repair in Kerala.'],
            ['name'=>'Daikin',    'slug'=>'daikin',    'color'=>'#0067B1', 'text'=>'#fff', 'logo'=>'https://th.bing.com/th/id/OIP.toPLj4FnyN0YKFBfXnqTtAHaHa?w=166&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',               'desc'=>'Daikin AC service and repair in Kochi.'],
            ['name'=>'Hitachi',   'slug'=>'hitachi',   'color'=>'#E4032E', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/Hitachi_logo.svg',              'desc'=>'Hitachi appliance repair by expert technicians.'],
            ['name'=>'Blue Star', 'slug'=>'blue-star', 'color'=>'#0055A5', 'text'=>'#fff', 'logo'=>'https://th.bing.com/th/id/OIP.VTTRsOsQ4Zgij40R-KI2pgHaCE?w=300&h=97&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',           'desc'=>'Blue Star AC repair and service in Kerala.'],
            ['name'=>'Carrier',   'slug'=>'carrier',   'color'=>'#004C97', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/Carrier_Corporation_logo.svg', 'desc'=>'Carrier AC repair and maintenance service.'],
            ['name'=>'Lloyd',     'slug'=>'lloyd',     'color'=>'#E31837', 'text'=>'#fff', 'logo'=>'https://www.google.com/s2/favicons?domain=mylloyd.com&sz=256',                 'desc'=>'Lloyd AC and appliance repair in Kerala.'],
            ['name'=>'Bajaj',     'slug'=>'bajaj',     'color'=>'#003087', 'text'=>'#fff', 'logo'=>'https://www.google.com/s2/favicons?domain=bajajelectricals.com&sz=256',        'desc'=>'Bajaj appliance repair by trained technicians.'],
            ['name'=>'Videocon',  'slug'=>'videocon',  'color'=>'#E31837', 'text'=>'#fff', 'logo'=>'https://i.pinimg.com/originals/98/1b/62/981b62c7ced54b292c46a0933426a8a0.jpg',                'desc'=>'Videocon appliance repair service in Kochi.'],
            ['name'=>'Onida',     'slug'=>'onida',     'color'=>'#C8102E', 'text'=>'#fff', 'logo'=>'https://www.google.com/s2/favicons?domain=onida.com&sz=256',                   'desc'=>'Onida appliance repair at your doorstep.'],
            ['name'=>'Toshiba',   'slug'=>'toshiba',   'color'=>'#E4002B', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/Toshiba_logo.svg',              'desc'=>'Toshiba appliance repair in Kerala.'],
            ['name'=>'Sharp',     'slug'=>'sharp',     'color'=>'#003087', 'text'=>'#fff', 'logo'=>'https://en.wikipedia.org/wiki/Special:FilePath/Sharp_logo.svg',                'desc'=>'Sharp appliance repair by expert technicians.'],
            ['name'=>'Siemens',   'slug'=>'siemens',   'color'=>'#009999', 'text'=>'#fff', 'logo'=>'https://tse4.mm.bing.net/th/id/OIP.YWh46qv71vc864X1PCtJ-wHaBL?rs=1&pid=ImgDetMain&o=7&rm=3',              'desc'=>'Siemens appliance repair service in Kochi.'],
        ];
    }

    // All appliances data
    public static function getAppliances(): array
    {
        return [
            ['name'=>'AC Repair',               'slug'=>'ac-repair',            'image'=>'appliances/ac.jpg',            'icon'=>'fa-wind',        'img_url'=>'https://img.icons8.com/color/512/air-conditioner.png',   'desc'=>'Split AC, window AC and cassette AC repair.'],
            ['name'=>'Washing Machine Repair',  'slug'=>'washing-machine-repair','image'=>'appliances/washing.jpg',      'icon'=>'fa-tshirt',      'img_url'=>'https://img.icons8.com/color/512/washing-machine.png',   'desc'=>'Front load, top load and semi automatic repair.'],
            ['name'=>'Refrigerator Repair',     'slug'=>'refrigerator-repair',   'image'=>'appliances/refrigerator.jpg', 'icon'=>'fa-snowflake',   'img_url'=>"data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='512' height='512'><rect x='5' y='2' width='14' height='20' rx='2' fill='%2364748B'/><line x1='5' y1='10' x2='19' y2='10' stroke='%23334155' stroke-width='1.5'/><rect x='15' y='5' width='2' height='3' rx='0.5' fill='%23CBD5E1'/><rect x='15' y='13' width='2' height='4' rx='0.5' fill='%23CBD5E1'/></svg>",      'desc'=>'Single door, double door fridge repair.'],
            ['name'=>'Microwave Oven Repair',   'slug'=>'microwave-repair',      'image'=>'appliances/microwave.jpg',    'icon'=>'fa-fire',        'img_url'=>'https://img.icons8.com/color/512/microwave.png',         'desc'=>'Solo, grill and convection microwave repair.'],
            ['name'=>'Deep Freezer Repair',     'slug'=>'deep-freezer-repair',   'image'=>'appliances/freezer.jpg',     'icon'=>'fa-cube',        'img_url'=>"data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='512' height='512'><rect x='3' y='5' width='18' height='14' rx='2' fill='%2394A3B8'/><rect x='4' y='6' width='16' height='2' fill='%23475569'/><rect x='11' y='10' width='2' height='1' fill='%23334155'/></svg>",           'desc'=>'Chest freezer and deep freezer repair.'],
            ['name'=>'Dishwasher Repair',       'slug'=>'dishwasher-repair',     'image'=>'appliances/dishwasher.jpg',  'icon'=>'fa-soap',        'img_url'=>'https://img.icons8.com/color/512/dishwasher.png',        'desc'=>'Dishwasher repair and maintenance.'],
            ['name'=>'Water Purifier Repair',   'slug'=>'water-purifier-repair', 'image'=>'appliances/waterpurifier.jpg','icon'=>'fa-tint',       'img_url'=>"data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='512' height='512'><rect x='6' y='2' width='12' height='18' rx='2' fill='%2338BDF8'/><rect x='8' y='4' width='8' height='4' rx='1' fill='%230284C7'/><circle cx='12' cy='14' r='2' fill='%23E2E8F0'/><path d='M12 18 v2' stroke='%23475569' stroke-width='2'/></svg>",   'desc'=>'RO and water purifier repair service.'],
            ['name'=>'Geyser Repair',           'slug'=>'geyser-repair',         'image'=>'appliances/geyser.jpg',      'icon'=>'fa-hot-tub',     'img_url'=>'https://img.icons8.com/color/512/water-heater.png',      'desc'=>'Water heater and geyser repair service.'],
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
