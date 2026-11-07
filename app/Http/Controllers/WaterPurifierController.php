<?php

namespace App\Http\Controllers;

use App\Services\ApplianceCatalogService;
use Illuminate\Http\Request;

class WaterPurifierController extends Controller
{
    public function index()
    {
        $services = ApplianceCatalogService::getWaterPurifierServices();
        $brands = ApplianceCatalogService::getWaterPurifierBrands();

        $metaTitle = 'RO & Water Purifier Service in Kochi | Water Filter Repair Kakkanad | Essentechs';
        $metaDescription = 'Trusted RO service and water purifier repair in Kochi, Kakkanad, and Ernakulam by EssenTechs. Membrane replacement, booster pump repair, UV lamp fix, and TDS balancing.';
        $canonical = url('/water-purifier');

        $faqs = [
            [
                'q' => 'How often should RO water purifier filters be replaced in Kochi?',
                'a' => 'In Kochi and Ernakulam, sediment and activated carbon pre-filters should generally be serviced every 6 to 9 months, while the RO membrane typically requires replacement every 18 to 24 months depending on incoming borewell or municipal TDS levels.'
            ],
            [
                'q' => 'Why is my RO water purifier producing very little water or taking too long to fill?',
                'a' => 'Low pure water output is usually caused by choked pre-filters, a depleted RO membrane, or a weak 24V booster pump unable to generate the 60-80 PSI pressure required for reverse osmosis.'
            ],
            [
                'q' => 'Do you service Kent, Aquaguard, Pureit, and Livpure water purifiers?',
                'a' => 'Yes. EssenTechs services all major RO, UV, and UF water purifier brands including Kent, Eureka Forbes Aquaguard, Hindustan Unilever Pureit, Livpure, Blue Star, and AO Smith.'
            ],
            [
                'q' => 'Do your technicians check the TDS and mineral balance during service?',
                'a' => 'Yes. Every service includes calibrated digital TDS (Total Dissolved Solids) testing of both raw input water and purified output water to ensure healthy drinking water compliance.'
            ]
        ];

        return view('services.water-purifier.index', compact('services', 'brands', 'metaTitle', 'metaDescription', 'canonical', 'faqs'));
    }
}
