<?php

namespace App\Http\Controllers;

use App\Services\ApplianceCatalogService;
use Illuminate\Http\Request;

class MicrowaveOvenController extends Controller
{
    /**
     * Display the main Microwave Oven Service & Repair category page.
     */
    public function index()
    {
        $brands = ApplianceCatalogService::getMicrowaveBrands();

        $services = [
            [
                'title' => 'Microwave Oven Repair',
                'description' => 'Comprehensive troubleshooting for magnetrons, high-voltage diodes, transformers, and electronic inverter boards to restore safe and uniform heating.',
                'icon' => 'fas fa-tools',
                'cta_text' => 'Book Repair',
            ],
            [
                'title' => 'Microwave Oven Maintenance',
                'description' => 'Preventive inspection, radiation leakage measurement, waveguide cavity de-carbonization, and thermal protection checks to extend appliance lifespan.',
                'icon' => 'fas fa-shield-alt',
                'cta_text' => 'Schedule Service',
            ],
            [
                'title' => 'Microwave Oven Installation',
                'description' => 'Safe countertop setup, built-in cabinetry integration with recommended ventilation clearances, and dedicated electrical circuit testing.',
                'icon' => 'fas fa-plug',
                'cta_text' => 'Request Install',
            ],
            [
                'title' => 'Microwave Heating Problem',
                'description' => 'Specialized diagnostics for microwaves that turn on and count down but leave food cold. We test high-voltage loops and magnetron emissions.',
                'icon' => 'fas fa-fire',
                'cta_text' => 'Fix Heating',
            ],
            [
                'title' => 'Microwave Not Turning On',
                'description' => 'Rapid diagnosis of dead units, blown main ceramic fuses, burned thermal switches, and motherboard low-voltage power supply faults.',
                'icon' => 'fas fa-power-off',
                'cta_text' => 'Resolve Power',
            ],
            [
                'title' => 'Microwave Door Problem',
                'description' => 'Repair of stuck door hooks, worn latch micro-switches, and misaligned hinges to ensure tight cavity sealing and prevent radiation leakage.',
                'icon' => 'fas fa-door-open',
                'cta_text' => 'Fix Door Latch',
            ],
            [
                'title' => 'Microwave Power Problem',
                'description' => 'Resolution of tripped home MCB breakers, electrical buzzing, burning smells, and voltage surge damage with certified protection parts.',
                'icon' => 'fas fa-bolt',
                'cta_text' => 'Diagnose Circuit',
            ],
            [
                'title' => 'Microwave Control Panel Problem',
                'description' => 'Repair of unresponsive touch membranes, skipping rotary jog dials, frozen displays, and erratic beeping on front control interfaces.',
                'icon' => 'fas fa-sliders-h',
                'cta_text' => 'Repair Keypad',
            ],
        ];

        $faqs = [
            [
                'q' => 'How often should a microwave oven be serviced?',
                'a' => 'A microwave oven should undergo a safety and performance check every 12 to 18 months. Regular servicing verifies that the door safety interlock switches form a tight seal to prevent microwave leakage, the cooling blower is free of grease, and the mica waveguide cover is clean of food splatters.'
            ],
            [
                'q' => 'Why is my microwave oven not heating?',
                'a' => 'When a microwave runs but fails to heat, the most common causes are a blown high-voltage diode, a shorted high-voltage capacitor, an open thermal safety switch, or a deteriorated magnetron tube. Because high-voltage circuits retain electrical charge even when unplugged, diagnosis should always be performed by a certified technician.'
            ],
            [
                'q' => 'Why is my microwave not turning on?',
                'a' => 'If your microwave is completely unresponsive with no interior light or digital display, common causes include a tripped household MCB, a blown internal ceramic line fuse caused by a misaligned door micro-switch, or a failed power supply rail on the main PCB.'
            ],
            [
                'q' => 'Why is my microwave making unusual noises?',
                'a' => 'Loud buzzing or grinding noises usually indicate high-voltage transformer vibration, cooling fan motor bearing wear, or a struggling turntable drive motor. Crackling or popping noises signify electrical arcing near the mica waveguide plate, which requires immediate attention.'
            ],
            [
                'q' => 'Why is my microwave door not working properly?',
                'a' => 'Microwave doors rely on primary, secondary, and monitor micro-switches connected to physical spring-loaded latch hooks. If a hook chips, a spring fatigues, or the micro-switch sticks, the door may not latch or the microwave may refuse to initiate cooking for safety reasons.'
            ],
            [
                'q' => 'Does Essentechs service different microwave oven brands?',
                'a' => 'Yes. Essentechs services all major microwave oven brands including Samsung, LG, IFB, Electrolux, Bosch, Godrej, Onida, Whirlpool, Panasonic, Videocon, Sanyo, Siemens, Prestige, Haier, and Morphy Richards. We carry genuine-grade replacement components for solo, grill, and convection models.'
            ],
            [
                'q' => 'How can I book microwave oven service?',
                'a' => 'Booking service with Essentechs is quick and convenient. You can call our direct customer helpline at +91 97467 00889, message our WhatsApp support desk at 919746700889, or fill out the booking form on this page for doorstep assistance across Kochi and Ernakulam.'
            ],
        ];

        return view('services.microwave.index', compact('brands', 'services', 'faqs'));
    }

    /**
     * Display a specific brand page under Microwave Oven.
     */
    public function showBrand(string $brand)
    {
        $brands = ApplianceCatalogService::getMicrowaveBrands();
        $brandKey = strtolower(trim($brand));

        if (!array_key_exists($brandKey, $brands)) {
            abort(404);
        }

        $brandData = $brands[$brandKey];

        // Other brands for internal linking
        $otherBrands = array_filter($brands, fn($k) => $k !== $brandKey, ARRAY_FILTER_USE_KEY);

        return view('services.microwave.brand', compact('brandData', 'otherBrands'));
    }
}
