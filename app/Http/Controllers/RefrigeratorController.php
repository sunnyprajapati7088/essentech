<?php

namespace App\Http\Controllers;

use App\Services\ApplianceCatalogService;
use Illuminate\Http\Request;

class RefrigeratorController extends Controller
{
    /**
     * Display the main Refrigerator & Fridge Repair category page.
     */
    public function index()
    {
        $services = ApplianceCatalogService::getRefrigeratorServices();
        $problems = ApplianceCatalogService::getRefrigeratorProblems();
        $brands = ApplianceCatalogService::getRefrigeratorBrands();

        $metaTitle = 'Refrigerator Repair & Service in Kochi | Essentechs';
        $metaDescription = 'Professional refrigerator and fridge repair service in Kochi, Kakkanad and Ernakulam for cooling problems, water leakage, freezer issues, unusual noise and other common refrigerator faults.';
        $canonical = url('/refrigerator-repair-service-kochi');

        $faqs = [
            [
                'q' => 'Why is my refrigerator running but not cooling properly?',
                'a' => 'Common causes include frost-choked evaporator coils due to a defective defrost timer or bimetal thermostat, low R600a/R134a refrigerant charge from a pinhole leak, or a faulty inverter compressor relay.'
            ],
            [
                'q' => 'Why is water leaking from my refrigerator?',
                'a' => 'Internal water pooling under the crisper drawer or leaking onto the floor occurs when the defrost drain weep hole is choked with food residue or ice. Our technicians clear the drain line with high-pressure flushing to eliminate leaks.'
            ],
            [
                'q' => 'Why is my refrigerator making loud clicking or buzzing noises?',
                'a' => 'Clicking noises every few minutes are usually caused by an overload protector tripping on the compressor start relay. Buzzing or vibrating sounds often indicate a worn evaporator fan motor or loose compressor mounting pads.'
            ],
            [
                'q' => 'How often should a refrigerator be serviced in Kochi?',
                'a' => 'We recommend professional maintenance once every 12 months. This includes vacuuming dust from the condenser coils, clearing the defrost drain weep tube, checking door seal airtightness, and inspecting refrigerant operating pressures.'
            ],
            [
                'q' => 'Does Essentechs service all major refrigerator brands?',
                'a' => 'Yes. Essentechs services all major refrigerator brands including Samsung, LG, Whirlpool, Godrej, Haier, Panasonic, IFB, Bosch, Electrolux, Hitachi, Voltas Beko, Videocon, Kelvinator, Siemens, and Onida.'
            ],
            [
                'q' => 'Do you service double door, side-by-side, and inverter refrigerators?',
                'a' => 'Yes. EssenTechs technicians specialize in all refrigerator configurations including direct cool single door, frost-free double door, French door, and side-by-side smart inverter refrigerators.'
            ],
            [
                'q' => 'How can I book refrigerator service in Kochi?',
                'a' => 'You can call our direct customer helpline at +91 97467 00889, message our WhatsApp support desk at 919746700889, or fill out the booking form on this page for doorstep assistance across Kochi, Kakkanad, and Ernakulam.'
            ],
        ];

        return view('services.refrigerator.index', compact('services', 'problems', 'brands', 'metaTitle', 'metaDescription', 'canonical', 'faqs'));
    }

    /**
     * Display a specific brand page under Refrigerator.
     */
    public function showBrand(string $brand)
    {
        $brands = ApplianceCatalogService::getRefrigeratorBrands();
        $brandKey = strtolower(trim($brand));

        if (!array_key_exists($brandKey, $brands)) {
            abort(404);
        }

        $brandData = $brands[$brandKey];

        // Other brands for internal linking
        $otherBrands = array_filter($brands, fn($k) => $k !== $brandKey, ARRAY_FILTER_USE_KEY);

        return view('services.refrigerator.brand', compact('brandData', 'otherBrands'));
    }
}
