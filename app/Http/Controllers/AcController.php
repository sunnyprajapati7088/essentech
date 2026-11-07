<?php

namespace App\Http\Controllers;

use App\Services\ApplianceCatalogService;
use Illuminate\Http\Request;

class AcController extends Controller
{
    /**
     * Display the main AC Service & Repair category page.
     */
    public function index()
    {
        $brands = ApplianceCatalogService::getAcBrands();
        $services = ApplianceCatalogService::getAcServices();
        $problems = ApplianceCatalogService::getAcProblems();

        $faqs = [
            [
                'q' => 'How often should an AC be serviced?',
                'a' => 'In Kochi and coastal Kerala, where high ambient humidity and airborne salinity accelerate dust accumulation and coil corrosion, your air conditioner should receive a professional service every 3 to 4 months. The primary nylon dust filters should also be washed every 2 to 3 weeks during peak summer usage.'
            ],
            [
                'q' => 'Why is my AC not cooling properly?',
                'a' => 'An AC that blows room temperature air or cools very slowly is most frequently suffering from choked air filters, dust-packed outdoor condenser coils, low refrigerant gas caused by a micro-leak, or a malfunctioning inverter PCB that fails to ramp up the compressor frequency. Our technicians perform complete diagnostic checks on-site.'
            ],
            [
                'q' => 'Why is water leaking from my AC?',
                'a' => 'Indoor water leakage occurs when the condensate drain pipe is blocked by accumulated dust and algae slime, the drain tray has developed a crack or slope sagging, or when partial ice buildup on the cooling coil melts rapidly and overflows the reservoir. Essentechs technicians clear the drain line with high-pressure suction to eliminate leaks.'
            ],
            [
                'q' => 'Why is my AC making noise?',
                'a' => 'Unusual noises typically stem from three areas: a loose or unlubricated indoor blower fan bearing (squeaking), an unbalanced blower drum with dust accumulation (cyclical vibration), or worn outdoor compressor rubber grommets transmitting low-frequency humming through the masonry wall.'
            ],
            [
                'q' => 'When should an AC be cleaned?',
                'a' => 'You should schedule a professional AC jet clean whenever you notice a decline in air throw, musty mold odors upon turning the AC on, ice accumulating on the copper pipes, or if the unit has operated continuously for more than 4 months without a deep wash.'
            ],
            [
                'q' => 'Does Essentechs service different AC brands?',
                'a' => 'Yes. Essentechs services all major AC brands available in India, including Hitachi, Carrier, Panasonic, Godrej, Haier, Whirlpool, Lloyd, IFB, Mitsubishi Electric, Mitsubishi Heavy Industries, Toshiba, O General, Hisense, Cruise, Onida, Croma, Midea, Haikawa, Sansui, Akai, and Sharp. We service inverter split, non-inverter split, and window ACs.'
            ],
            [
                'q' => 'How can I book AC service in Kochi?',
                'a' => 'Booking your AC service with Essentechs is simple. You can call our team directly at +91 97467 00889, message our WhatsApp support desk at 919746700889, or fill out the service request form on this page. We provide prompt doorstep service across Kochi, Kakkanad, and Ernakulam.'
            ],
        ];

        return view('services.ac.index', compact('brands', 'services', 'problems', 'faqs'));
    }

    /**
     * Display a specific brand page under AC.
     */
    public function showBrand(string $brand)
    {
        $brands = ApplianceCatalogService::getAcBrands();
        $brandKey = strtolower(trim($brand));

        if (!array_key_exists($brandKey, $brands)) {
            abort(404);
        }

        $brandData = $brands[$brandKey];

        // Other brands for internal linking
        $otherBrands = array_filter($brands, fn($k) => $k !== $brandKey, ARRAY_FILTER_USE_KEY);

        return view('services.ac.brand', compact('brandData', 'otherBrands'));
    }
}
