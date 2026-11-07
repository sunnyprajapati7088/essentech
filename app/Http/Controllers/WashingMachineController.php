<?php

namespace App\Http\Controllers;

use App\Services\ApplianceCatalogService;
use Illuminate\Http\Request;

class WashingMachineController extends Controller
{
    /**
     * Display the main Washing Machine Repair category page.
     */
    public function index()
    {
        $services = ApplianceCatalogService::getWashingMachineServices();
        $problems = ApplianceCatalogService::getWashingMachineProblems();
        $brands = ApplianceCatalogService::getWashingMachineBrands();

        $metaTitle = 'Washing Machine Repair & Service in Kochi | Essentechs';
        $metaDescription = 'Professional washing machine repair and service in Kochi, Kakkanad and Ernakulam for drainage, spinning, water leakage, vibration, door and other common washing machine problems.';
        $canonical = url('/washing-machine-repair-service-kochi');

        $faqs = [
            [
                'q' => 'Why is my washing machine not spinning or extracting water?',
                'a' => 'Common causes include a worn drive belt, motor capacitor breakdown, worn direct-drive motor hall sensors, or an unlevel load triggering a safety unbalance (UE) switch error.'
            ],
            [
                'q' => 'Why is my washing machine not draining water?',
                'a' => 'Drainage failure (error codes OE, 5E, E20) is usually caused by coins, safety pins, or lint clogging the bottom drain pump filter, or a burnt magnetic drain pump motor.'
            ],
            [
                'q' => 'What causes my washing machine to vibrate and make banging noises during spin cycles?',
                'a' => 'Excessive vibration is typically caused by worn hydraulic tub shock absorbers, detached stabilizer springs, or degraded stainless-steel drum bearings and spider arm assemblies.'
            ],
            [
                'q' => 'Why is water leaking from my front-load washing machine?',
                'a' => 'Water leakage from the front is commonly due to a torn or mouldy silicone door rubber gasket (boot bellow), an unseated dispenser drawer, or loose internal hose clamps.'
            ],
            [
                'q' => 'Do you service both front-load and top-load washing machines?',
                'a' => 'Yes. EssenTechs provides component-level repair for front-load, top-load, and semi-automatic washing machines across all leading brands including IFB, LG, Samsung, Bosch, and Whirlpool.'
            ],
            [
                'q' => 'Does Essentechs service all major washing machine brands in Kochi?',
                'a' => 'Yes. We service Samsung, LG, IFB, Whirlpool, Bosch, Godrej, Haier, Panasonic, Electrolux, Siemens, Onida, Videocon, Lloyd, Voltas Beko, Toshiba, and Midea washing machines.'
            ],
            [
                'q' => 'How can I book washing machine repair in Kochi?',
                'a' => 'Booking service with Essentechs is simple. Call our helpline at +91 97467 00889, chat with us on WhatsApp at 919746700889, or fill out the booking form on this page for prompt doorstep assistance across Kochi, Kakkanad, and Ernakulam.'
            ],
        ];

        return view('services.washing-machine.index', compact('services', 'problems', 'brands', 'metaTitle', 'metaDescription', 'canonical', 'faqs'));
    }

    /**
     * Display a specific brand page under Washing Machine.
     */
    public function showBrand(string $brand)
    {
        $brands = ApplianceCatalogService::getWashingMachineBrands();
        $brandKey = strtolower(trim($brand));

        if (!array_key_exists($brandKey, $brands)) {
            abort(404);
        }

        $brandData = $brands[$brandKey];

        // Other brands for internal linking
        $otherBrands = array_filter($brands, fn($k) => $k !== $brandKey, ARRAY_FILTER_USE_KEY);

        return view('services.washing-machine.brand', compact('brandData', 'otherBrands'));
    }
}
