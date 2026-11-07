<?php

namespace App\Services\Catalog;

class WashingMachineCatalog
{
    /**
     * Get all 13 Washing Machine Service Categories
     */
    public static function getServices(): array
    {
        return [
            [
                'title' => 'Washing Machine Repair',
                'description' => 'Fast, certified doorstep repair for front-load, top-load, and semi-automatic washing machines across Kochi, Kakkanad, and Ernakulam.',
                'icon' => 'fas fa-tools',
                'cta_text' => 'Book Washing Machine Repair',
                'badge' => 'Certified Tech'
            ],
            [
                'title' => 'Washing Machine Service',
                'description' => 'Comprehensive multi-point maintenance including tub descaling, water inlet filter clearing, drain pump cleaning, and belt tension check.',
                'icon' => 'fas fa-cogs',
                'cta_text' => 'Book Machine Service',
                'badge' => 'Annual Care'
            ],
            [
                'title' => 'Washing Machine Maintenance',
                'description' => 'Preventive deep cleaning, scale removal from heating elements, suspension lubrication, and drum balance calibration to extend machine lifespan.',
                'icon' => 'fas fa-shield-alt',
                'cta_text' => 'Schedule Maintenance',
                'badge' => 'Preventive'
            ],
            [
                'title' => 'Not Spinning',
                'description' => 'Pinpoint diagnostic for washing machines that wash but fail to spin clothes dry. Troubleshooting drive belts, motor capacitors, and hall sensors.',
                'icon' => 'fas fa-sync-alt',
                'cta_text' => 'Fix Spinning Issue',
                'badge' => 'Most Common'
            ],
            [
                'title' => 'Not Draining',
                'description' => 'Clearing clogged drain filters, foreign object removal (coins, pins), and replacing burnt drain pump motors to resolve OE and 5E drainage errors.',
                'icon' => 'fas fa-water',
                'cta_text' => 'Fix Drain Failure',
                'badge' => 'Fast Fix'
            ],
            [
                'title' => 'Water Leakage',
                'description' => 'Repairing torn door rubber boot gaskets (bellows), cracked internal drain hoses, leaking detergent dispensers, and inlet water valves.',
                'icon' => 'fas fa-tint',
                'cta_text' => 'Stop Water Leak',
                'badge' => 'Leak Proof'
            ],
            [
                'title' => 'Door Problem',
                'description' => 'Repairing stuck door locks, broken plastic door handles, electronic PTC door interlock switches, and misaligned door hinges on front-load washers.',
                'icon' => 'fas fa-door-closed',
                'cta_text' => 'Fix Door Latch',
                'badge' => 'Genuine Spares'
            ],
            [
                'title' => 'Drum Problem',
                'description' => 'Stainless-steel drum alignment, replacement of snapped spider arm brackets, and heavy-duty tub bearing overhauls to eliminate grinding noise.',
                'icon' => 'fas fa-circle-notch',
                'cta_text' => 'Restore Drum',
                'badge' => 'Heavy Duty'
            ],
            [
                'title' => 'Motor Problem',
                'description' => 'Specialized troubleshooting for Brushless Direct Drive (BLDC) motors, motor carbon brushes, drive pulleys, and stator/rotor assemblies.',
                'icon' => 'fas fa-bolt',
                'cta_text' => 'Diagnose Motor',
                'badge' => 'Direct Drive'
            ],
            [
                'title' => 'Water Filling Problem',
                'description' => 'Diagnosing slow water filling, continuous uncontrolled filling, and replacing dual/triple electrical solenoid water inlet valves and mesh filters.',
                'icon' => 'fas fa-faucet',
                'cta_text' => 'Fix Water Intake',
                'badge' => 'Doorstep'
            ],
            [
                'title' => 'Excessive Vibration',
                'description' => 'Replacing worn hydraulic tub shock absorbers, damaged stabilization springs, and re-calibrating concrete counterweights to stop heavy walking.',
                'icon' => 'fas fa-wave-square',
                'cta_text' => 'Dampen Vibration',
                'badge' => 'Silent Spin'
            ],
            [
                'title' => 'Noise Problem',
                'description' => 'Eliminating roaring jet-engine sounds during high-speed extraction caused by rusted drum bearings and water entering the bearing shaft housing.',
                'icon' => 'fas fa-volume-up',
                'cta_text' => 'Silence Noise',
                'badge' => 'Quiet Wash'
            ],
            [
                'title' => 'Error Code Diagnosis',
                'description' => 'Accurate decryption and electronic repair of digital error codes (dE, OE, IE, UE, E20, 4E, 5E, PE, tE) across all front and top load smart washers.',
                'icon' => 'fas fa-microchip',
                'cta_text' => 'Diagnose Error Code',
                'badge' => 'Microchip Tech'
            ],
        ];
    }

    /**
     * Get all 16 Common Washing Machine Problems & Solutions
     */
    public static function getProblems(): array
    {
        return [
            [
                'title' => 'Washing Machine Not Working',
                'keyword' => 'washing machine not working',
                'symptom' => 'Machine does not turn on at all; no LED lights, no buzzer sound, completely unresponsive when pressing Power.',
                'cause' => 'Burnt noise filter capacitor, blown main PCB line fuse, household voltage surge, or loose main power harness.',
                'solution' => 'PCB power supply rail testing, noise suppressor replacement, and motherboard track micro-soldering.'
            ],
            [
                'title' => 'Washing Machine Not Spinning',
                'keyword' => 'washing machine not spinning',
                'symptom' => 'The machine washes, agitates, and drains water, but when it enters the spin cycle, the drum refuses to rotate.',
                'cause' => 'Snapped drive belt, worn motor carbon brushes, defective motor capacitor, or broken hall sensor on Direct Drive models.',
                'solution' => 'Replacing drive belt, motor carbon brush renewal, or direct-drive hall sensor board replacement.'
            ],
            [
                'title' => 'Washing Machine Not Draining',
                'keyword' => 'washing machine not draining',
                'symptom' => 'Water stays trapped inside the drum; cycle pauses and machine flashes error code (OE, 5E, or E20).',
                'cause' => 'Clogged coin filter trap, stuck impeller from safety pins or coins, or burnt magnetic drain pump motor.',
                'solution' => 'Clearing debris from the pump chamber, cleaning the drain hose, and installing a new OEM drain pump.'
            ],
            [
                'title' => 'Washing Machine Making Noise',
                'keyword' => 'washing machine making noise',
                'symptom' => 'Loud squealing, grinding, or banging sounds during wash agitation or high-speed spinning.',
                'cause' => 'Foreign objects trapped between drum and tub, worn tub drive belt, or damaged motor shaft bearings.',
                'solution' => 'Removing trapped foreign items, belt tension adjustment, or front/rear motor bearing replacement.'
            ],
            [
                'title' => 'Washing Machine Water Leakage',
                'keyword' => 'washing machine water leakage',
                'symptom' => 'Water pools under the machine or drips from the front door glass during the wash cycle.',
                'cause' => 'Torn or mouldy silicone door rubber gasket (boot seal), cracked drain bellows, or loose water inlet connection.',
                'solution' => 'Door boot gasket replacement with retaining spring tensioning, and hose clamp replacement.'
            ],
            [
                'title' => 'Washing Machine Not Taking Water',
                'keyword' => 'washing machine not taking water',
                'symptom' => 'Cycle starts with a soft click, but no water flows into the detergent drawer; displays error IE or 4E.',
                'cause' => 'Choked water inlet filter mesh with pipe silt, low water pressure, or burnt solenoid valve coil.',
                'solution' => 'Filter cleaning, solenoid valve resistance testing, and dual/triple water inlet valve replacement.'
            ],
            [
                'title' => 'Washing Machine Not Filling Water',
                'keyword' => 'washing machine not filling water',
                'symptom' => 'Water trickles very slowly or stops midway through the fill cycle, delaying wash times by hours.',
                'cause' => 'Partially blocked solenoid valve armature or lime-scale encrusted inlet valve diaphragm.',
                'solution' => 'High-flow inlet valve replacement and testing home water supply pressure.'
            ],
            [
                'title' => 'Washing Machine Not Drying',
                'keyword' => 'washing machine not drying',
                'symptom' => 'Clothes come out dripping wet at the end of the full cycle despite completed timer.',
                'cause' => 'Weak spin extraction speed caused by an unbalanced load (UE error), worn motor brushes, or defective pressure switch.',
                'solution' => 'Pressure switch tube clearing, motor brush replacement, and spin cycle speed recalibration.'
            ],
            [
                'title' => 'Washing Machine Door Not Opening',
                'keyword' => 'washing machine door not opening',
                'symptom' => 'Door remains locked after cycle completion and water is fully drained; emergency pull cord does not release door.',
                'cause' => 'Burnt bi-metal PTC thermal door interlock, stuck solenoid latch, or broken plastic door handle mechanism.',
                'solution' => 'Safe manual door unlatching without glass damage, and replacing the digital door lock assembly.'
            ],
            [
                'title' => 'Washing Machine Drum Not Rotating',
                'keyword' => 'washing machine drum not rotating',
                'symptom' => 'Motor can be heard humming, but the inner stainless steel drum does not turn at all.',
                'cause' => 'Broken cast-aluminum spider arm bracket, snapped belt, or detached drum drive pulley.',
                'solution' => 'Complete drum dismantling, replacement of spider bracket with stainless bolts, and pulley securing.'
            ],
            [
                'title' => 'Washing Machine Vibration',
                'keyword' => 'washing machine vibration',
                'symptom' => 'Excessive vibration during extraction cycles, causing countertop items to shake and rattle.',
                'cause' => 'Worn hydraulic tub damper shock absorbers, detached tub springs, or uneven flooring.',
                'solution' => 'Replacing worn shock absorbers (pair/trio), spring re-anchoring, and machine anti-vibration foot leveling.'
            ],
            [
                'title' => 'Washing Machine Shaking',
                'keyword' => 'washing machine shaking',
                'symptom' => 'The entire washing machine violently shakes, walks across the floor, or bangs against surrounding walls.',
                'cause' => 'Loose concrete counterweights, failed tub suspension struts, or severely unlevel feet.',
                'solution' => 'Torqueing counterweight bolts, replacing hydraulic dampers, and locking adjustable foot nuts.'
            ],
            [
                'title' => 'Washing Machine Error Code',
                'keyword' => 'washing machine error code',
                'symptom' => 'Digital display flashes cryptic error codes such as dE, OE, IE, UE, 4E, 5E, E20, tE, PE and beeps repeatedly.',
                'cause' => 'Sensor malfunction (temperature thermistor, water level pressure switch, door lock, or motor tachometer).',
                'solution' => 'Code-specific diagnostic routine, sensor resistance testing, and harness terminal cleaning.'
            ],
            [
                'title' => 'Washing Machine Motor Problem',
                'keyword' => 'washing machine motor problem',
                'symptom' => 'Burning smell from the rear, motor hums and gets hot without spinning, or sparks visibly.',
                'cause' => 'Worn motor carbon brushes arcing against commutator, open stator coil winding, or burnt run capacitor.',
                'solution' => 'Replacing carbon brush pairs, testing stator resistance, or installing replacement motor.'
            ],
            [
                'title' => 'Washing Machine PCB Problem',
                'keyword' => 'washing machine pcb problem',
                'symptom' => 'Program skips cycles randomly, displays flicker, motor erratically spins up to top speed immediately, or board does not respond.',
                'cause' => 'Damaged motor driver triac, blown SMPS regulator, corroded PCB tracks from high humidity, or relay failure.',
                'solution' => 'Bench electronics testing, replacing motor triacs and relays, silicone moisture-conformal recoating.'
            ],
            [
                'title' => 'Washing Machine Drainage Problem',
                'keyword' => 'washing machine drainage problem',
                'symptom' => 'Water drains extremely slowly, leaving dirty grey wash water inside the drum during rinse cycles.',
                'cause' => 'Drain hose kinked, drain filter encrusted with lint and detergent scum, or semi-choked discharge pipe.',
                'solution' => 'Complete drain system deep clean, hose de-kinking, and drain pump flow-rate verification.'
            ]
        ];
    }

    /**
     * Get all 16 Washing Machine Brands with complete details
     */
    public static function getBrands(): array
    {
        return [
            'samsung' => [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'meta_title' => 'Samsung Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Fast Samsung washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in EcoBubble, QuickDrive, Digital Inverter, and Wobble top loaders.',
                'h1' => 'Samsung Washing Machine Repair & Service in Kochi',
                'badge' => 'Samsung EcoBubble Specialist',
                'hero_subtitle' => 'Professional doorstep repair for Samsung front load, top load Wobble, and smart inverter washing machines across Kochi and Ernakulam.',
                'intro_heading' => 'Certified Samsung Washing Machine Repair in Kochi',
                'intro_paragraphs' => [
                    'Samsung washing machines incorporate groundbreaking laundry innovations including EcoBubble™ low-temperature foam generation, QuickDrive™ dual-rotating drums, and Digital Inverter brushless motors. When electronic errors or mechanical faults occur, specialized servicing is essential.',
                    'Essentechs provides certified on-site diagnostic and component-level repair for Samsung washing machines across Kochi, Kakkanad, and Ernakulam. Our technicians carry genuine-grade spares to resolve spinning, drainage, and PCB faults quickly.'
                ],
                'technologies' => [
                    'EcoBubble™ Gentle Bubble Wash Generation',
                    'Digital Inverter Motor with Low Vibration',
                    'Hygiene Steam Allergen Removal Cycle',
                    'Wobble Technology Tangle-Free Top Loaders',
                    'Smart Check Automated Smartphone Diagnostics'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code 5E / 5C Drainage Failure',
                        'symptom' => 'Water stays inside drum; cycle pauses and screen displays 5E or 5C.',
                        'cause' => 'Blocked drain pump filter, jammed impeller, or burnt drain motor.',
                        'solution' => 'Clearing coin filter, pump chamber flush, or drain pump replacement.'
                    ],
                    [
                        'title' => 'Error Code 4E / 4C Water Supply Error',
                        'symptom' => 'Machine beeps and will not fill with water at the start of wash.',
                        'cause' => 'Clogged inlet filter mesh or burnt dual water inlet valve coil.',
                        'solution' => 'Inlet mesh clean, solenoid valve replacement, and water pressure check.'
                    ],
                    [
                        'title' => 'Error Code dE / dC Door Lock Error',
                        'symptom' => 'Door is closed but machine flashes dE and refuses to start.',
                        'cause' => 'Defective door interlock micro-switch or broken latch hook.',
                        'solution' => 'Door lock assembly replacement and hinge alignment.'
                    ]
                ],
                'services_offered' => [
                    'Samsung Digital Inverter PCB Diagnostics & Repair',
                    'Drain Pump & Water Inlet Valve Replacement',
                    'Door Rubber Boot Gasket & Lock Replacement',
                    'Spider Arm & Tub Bearing Overhaul',
                    'Shock Absorber Damper Replacement'
                ],
                'supported_models' => [
                    'Samsung AI EcoBubble Front Loaders (6kg - 12kg)',
                    'Samsung Wobble Technology Top Loaders (6.5kg - 10kg)',
                    'Samsung QuickDrive & AddWash Series',
                    'Samsung Semi-Automatic Twin Tub Washers'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code 5E mean on my Samsung washing machine?',
                        'a' => 'Error 5E (or 5C on newer models) indicates a water drainage failure. The machine detected that water level did not drop within 10 minutes. Our technician clears the drain trap and replaces the pump if burnt.'
                    ],
                    [
                        'q' => 'Can you replace the door rubber seal on a Samsung front load washing machine?',
                        'a' => 'Yes. If your door boot gasket is torn, leaking, or covered with black mould, we replace it with a genuine OEM silicone gasket at your doorstep.'
                    ]
                ]
            ],
            'lg' => [
                'name' => 'LG',
                'slug' => 'lg',
                'meta_title' => 'LG Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Expert LG washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in AI Direct Drive, 6 Motion DD, TurboWash, and Smart Inverter models.',
                'h1' => 'LG Washing Machine Repair & Service in Kochi',
                'badge' => 'LG Direct Drive Specialist',
                'hero_subtitle' => 'Doorstep repair for LG front load AI Direct Drive, TurboWash 360, and smart inverter top load washing machines in Kochi.',
                'intro_heading' => 'Comprehensive Service for LG Washing Machines in Kochi',
                'intro_paragraphs' => [
                    'LG washing machines are industry leaders with AI Direct Drive™ motors connected directly to the drum without belts, 6 Motion™ fabric-specific tumbling, and TurboWash™ 360 multi-nozzle sprays.',
                    'Essentechs provides factory-grade repair for LG washing machines across Kochi and Ernakulam. We carry hall sensors, electronic control boards, shock absorbers, and genuine door seals.'
                ],
                'technologies' => [
                    'AI Direct Drive™ Motor with Beltless Architecture',
                    '6 Motion DD Multi-Directional Drum Movements',
                    'TurboWash™ 360 High-Pressure Spray Nozzles',
                    'Steam+ Wrinkle & Allergy Care Cycles',
                    'SmartThinQ Wi-Fi Remote Diagnostics'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code OE Drainage Malfunction',
                        'symptom' => 'Machine beeps, stops mid-cycle, and displays OE with drum filled with water.',
                        'cause' => 'Blocked lint filter or burnt drain pump motor.',
                        'solution' => 'Drain filter clearing, foreign body removal, and pump replacement.'
                    ],
                    [
                        'title' => 'Error Code LE Motor Overload / Hall Sensor Fault',
                        'symptom' => 'Drum stutters, jerks, and stops; screen flashes LE.',
                        'cause' => 'Defective motor rotor position hall sensor or overloaded drum.',
                        'solution' => 'Hall sensor board replacement and direct drive stator test.'
                    ],
                    [
                        'title' => 'Error Code UE Unbalanced Load / High Shaking',
                        'symptom' => 'Machine repeatedly attempts to spin, stops, fills with water, and displays UE.',
                        'cause' => 'Worn tub suspension dampers or tangling heavy items.',
                        'solution' => 'Hydraulic damper replacement and tub leveling.'
                    ]
                ],
                'services_offered' => [
                    'LG AI Direct Drive Motor & Hall Sensor Repair',
                    'TurboWash Spray Pump & Solenoid Valve Repair',
                    'Drain Pump & Lint Filter Restoration',
                    'Shock Absorber Damper & Suspension Spring Fitting',
                    'Main PCB Driver Board Micro-Soldering'
                ],
                'supported_models' => [
                    'LG AI Direct Drive Front Loaders (6.5kg - 11kg)',
                    'LG Smart Inverter Top Load Washers (6.5kg - 9kg)',
                    'LG TurboWash & Steam Wash Series',
                    'LG TwinWash Dual Drum Washers'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code LE mean on an LG washing machine?',
                        'a' => 'Error code LE indicates a motor lock error. In LG Direct Drive washers, this is most commonly caused by a defective hall sensor (rotor position sensor) or a wiring harness fault. We replace the hall sensor on-site.'
                    ]
                ]
            ],
            'ifb' => [
                'name' => 'IFB',
                'slug' => 'ifb',
                'meta_title' => 'IFB Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Certified IFB washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Senator, Elena, Serena, Aqua Energie, and CradleWash front loaders.',
                'h1' => 'IFB Washing Machine Repair & Service in Kochi',
                'badge' => 'IFB Front Load Specialist',
                'hero_subtitle' => 'Professional doorstep repair for IFB Senator, Elena, Serena, and top load washing machines across Kochi and Ernakulam.',
                'intro_heading' => 'Expert IFB Washing Machine Servicing Across Kochi',
                'intro_paragraphs' => [
                    'IFB has been India’s front-load pioneer for decades, featuring Aqua Energie hard-water softeners, CradleWash™ delicate fabric care, and triadic pulsators.',
                    'Essentechs provides specialized on-site repair for IFB washing machines in Kochi. Our technicians carry original IFB door bellows, shock dampers, drain pumps, and heating elements.'
                ],
                'technologies' => [
                    'Aqua Energie Built-in Hard Water Treatment',
                    'CradleWash™ Gentle Silk and Wool Tumble',
                    'Ball Valve Technology Detergent Saving',
                    'Triadic Pulsator Deep Clean Scrubbing',
                    'Auto Imbalance Vibration Control'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code err03 / Drainage Failure',
                        'symptom' => 'IFB display shows err03 and washing stops with water inside.',
                        'cause' => 'Foreign coins or debris blocking pump chamber or burnt drain motor.',
                        'solution' => 'Pump chamber unblocking and OEM drain motor replacement.'
                    ],
                    [
                        'title' => 'Violent Banging and Walking During Spin Cycle',
                        'symptom' => 'Machine bangs loudly against floor tiles and moves across the room.',
                        'cause' => 'Worn hydraulic tub shock absorbers or detached tub stabilizer springs.',
                        'solution' => 'Replacement of heavy-duty friction dampers and tub realignment.'
                    ],
                    [
                        'title' => 'Door Handle Broken or Won’t Latch',
                        'symptom' => 'Plastic door latch lever snaps off; door cannot be opened or latched.',
                        'cause' => 'Physical fatigue of internal plastic hook mechanism.',
                        'solution' => 'Installation of heavy-duty IFB door handle latch kit.'
                    ]
                ],
                'services_offered' => [
                    'IFB Tub Bearing & Spider Arm Overhaul',
                    'Friction Shock Absorber & Spring Replacement',
                    'Aqua Energie Filter Cleaning & Descaling',
                    'Door Boot Bellows Gasket Replacement',
                    'Heater Element & Thermostat Testing'
                ],
                'supported_models' => [
                    'IFB Senator, Elena, Serena, Diva Front Loaders (6kg - 9kg)',
                    'IFB Deep Clean Top Loaders (6.5kg - 8.5kg)',
                    'IFB 3-in-1 Washer Dryer Combos'
                ],
                'faqs' => [
                    [
                        'q' => 'Why does my IFB front load washing machine shake violently during spin?',
                        'a' => 'Violent shaking is caused by worn hydraulic friction dampers underneath the tub. After 3 to 5 years, the damping grease dries out. Replacing the pair of dampers restores silent operation.'
                    ]
                ]
            ],
            'whirlpool' => [
                'name' => 'Whirlpool',
                'slug' => 'whirlpool',
                'meta_title' => 'Whirlpool Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Fast Whirlpool washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in 360 BloomWash, Stainwash Pro, and Supreme Care models.',
                'h1' => 'Whirlpool Washing Machine Repair & Service in Kochi',
                'badge' => 'Whirlpool 6th Sense Specialist',
                'hero_subtitle' => 'Reliable doorstep repair for Whirlpool 360 BloomWash top load and Supreme Care front load washing machines in Kochi.',
                'intro_heading' => 'Dependable Whirlpool Washing Machine Repair in Kochi',
                'intro_paragraphs' => [
                    'Whirlpool washing machines feature 6th Sense SoftMove technology, Stainwash Pro heated wash cycles, and 360 BloomWash circular tumbling.',
                    'Essentechs provides prompt on-site diagnostics and repair for Whirlpool washing machines across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    '6th Sense SoftMove Intelligent Drum Movements',
                    '360 BloomWash Circular Water Spray',
                    'Hot Wash In-Built Heater System',
                    'Zero Pressure Fill Technology'
                ],
                'common_problems' => [
                    [
                        'title' => 'Whirlpool Machine Not Agitating or Washing',
                        'symptom' => 'Motor hums but wash pulsator plate does not turn clothes.',
                        'cause' => 'Stripped center drive agitator teeth or broken drive belt.',
                        'solution' => 'Pulsator spline replacement and belt renewal.'
                    ]
                ],
                'services_offered' => [
                    'Whirlpool Pulsator & Drive Belt Replacement',
                    'Drain Pump & Pressure Sensor Servicing',
                    'Inlet Solenoid Valve Replacement',
                    'PCB Board Circuit Diagnostics'
                ],
                'supported_models' => [
                    'Whirlpool Stainwash Ultra & Pro Top Loaders',
                    'Whirlpool 360 BloomWash Inverter Series',
                    'Whirlpool FreshCare & Supreme Care Front Loaders'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair low water pressure filling on Whirlpool top loaders?',
                        'a' => 'Yes. Whirlpool models with Zero Pressure Fill valves can experience clogged solenoid mesh screens from Kerala pipe silt. We clean or replace the valve to restore fast filling.'
                    ]
                ]
            ],
            'bosch' => [
                'name' => 'Bosch',
                'slug' => 'bosch',
                'meta_title' => 'Bosch Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'High-precision Bosch washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Series 4, Series 6, Series 8, and EcoSilence Drive.',
                'h1' => 'Bosch Washing Machine Repair & Service in Kochi',
                'badge' => 'Bosch German Engineering Specialist',
                'hero_subtitle' => 'Precision doorstep repair for Bosch Series 4, Series 6, Series 8, and HomeProfessional front load washing machines in Kochi.',
                'intro_heading' => 'German Precision Care for Bosch Washers in Kochi',
                'intro_paragraphs' => [
                    'Bosch washing machines are renowned for German build quality, featuring brushless EcoSilence Drive™ motors, AntiVibration side wall designs, and ActiveWater Plus smart load sensors.',
                    'Essentechs provides specialized component-level repair for Bosch washing machines across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'EcoSilence Drive™ Brushless Inverter Motor',
                    'AntiVibration Spiral Side Wall Noise Reduction',
                    'VarioDrum Wave-Droplet Fabric Protection',
                    'SpeedPerfect 65% Wash Time Reduction',
                    'ActiveWater Plus Automatic Load Weight Sensing'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code E18 Drainage Blockage',
                        'symptom' => 'Cycle stops with water inside drum, displaying E18 accompanied by buzzer.',
                        'cause' => 'Lint trap clogged, foreign coins stuck in impeller, or burnt drain motor.',
                        'solution' => 'Coin trap clearing, pump inspection, and pump replacement.'
                    ],
                    [
                        'title' => 'Loud Jet-Engine Roar During High-Speed Spin',
                        'symptom' => 'Machine sounds like a roaring airplane taking off when spinning at 1200/1400 RPM.',
                        'cause' => 'Water leaked past the rear tub seal and rusted the dual stainless steel drum bearings.',
                        'solution' => 'Tub overhaul with precision bearing pressing and new double-lip oil seal.'
                    ]
                ],
                'services_offered' => [
                    'Bosch EcoSilence Drive PCB Diagnostics',
                    'Dual Stainless Steel Tub Bearing Overhaul',
                    'AntiVibration Shock Absorber Replacement',
                    'VarioDrum Gasket & Latch Replacement',
                    'Water Level Pressure Sensor Calibration'
                ],
                'supported_models' => [
                    'Bosch Series 4 (7kg - 8kg) Front Loaders',
                    'Bosch Series 6 with EcoSilence Drive',
                    'Bosch Series 8 & HomeProfessional Washers',
                    'Bosch Washer Dryer Combos'
                ],
                'faqs' => [
                    [
                        'q' => 'Can rusted drum bearings on a Bosch washing machine be repaired in Kochi?',
                        'a' => 'Yes. We specialize in Bosch drum bearing overhauls, extracting damaged bearings and installing high-grade German SKF bearings with dual-lip water seals.'
                    ]
                ]
            ],
            'godrej' => [
                'name' => 'Godrej',
                'slug' => 'godrej',
                'meta_title' => 'Godrej Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Fast Godrej washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Dependable service for Eon Allure, Smartwash, and top loaders.',
                'h1' => 'Godrej Washing Machine Repair & Service in Kochi',
                'badge' => 'Godrej Appliance Specialist',
                'hero_subtitle' => 'Reliable doorstep repair for Godrej Eon Allure and smart semi/automatic washing machines in Kochi.',
                'intro_heading' => 'Dependable Godrej Washing Machine Repair in Kochi',
                'intro_paragraphs' => [
                    'Godrej washing machines offer sturdy domestic washing solutions with Eco Inverter technology, Zero Pressure Fill, and Rollercoaster wash action.',
                    'Essentechs provides prompt doorstep repair for Godrej washing machines across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Eco Inverter Motor for Quiet Operation',
                    'Rollercoaster Wash 3-Step Turbulator Design',
                    'Zero Pressure Fill Technology'
                ],
                'common_problems' => [
                    [
                        'title' => 'Machine Stops at Rinse Cycle Without Draining',
                        'symptom' => 'Washing completes but machine does not proceed to rinse or spin.',
                        'cause' => 'Drain valve linkage detached or blocked drain bellows.',
                        'solution' => 'Drain valve solenoid replacement and hose flush.'
                    ]
                ],
                'services_offered' => [
                    'Godrej Drain Valve & Pump Replacement',
                    'Pulsator & Drive Belt Servicing',
                    'Electronic PCB Board Repair',
                    'Spin Motor Capacitor Replacement'
                ],
                'supported_models' => [
                    'Godrej Eon Allure Top Loaders (6.5kg - 8kg)',
                    'Godrej Edge Semi-Automatic Washers'
                ],
                'faqs' => [
                    [
                        'q' => 'How soon can an EssenTechs technician visit for Godrej washing machine service?',
                        'a' => 'We offer convenient same-day service visits across Kochi and Kakkanad.'
                    ]
                ]
            ],
            'haier' => [
                'name' => 'Haier',
                'slug' => 'haier',
                'meta_title' => 'Haier Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Certified Haier washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Direct Motion Motor, Super Drum, and front loaders.',
                'h1' => 'Haier Washing Machine Repair & Service in Kochi',
                'badge' => 'Haier Direct Motion Specialist',
                'hero_subtitle' => 'Doorstep repair for Haier Direct Motion front load and storm wash top load washing machines in Kochi.',
                'intro_heading' => 'Modern Repair for Haier Washing Machines in Kochi',
                'intro_paragraphs' => [
                    'Haier washing machines feature Direct Motion motors operating below 53dB, massive 525mm Super Drums, and Anti-Bacterial Treatment (ABT) door gaskets.',
                    'Essentechs provides factory-grade repair for Haier washing machines in Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Direct Motion Direct-Drive Inverter Motor',
                    '525mm Super Drum Fabric Fall Distance',
                    'Anti-Bacterial Treatment (ABT) Door Gaskets',
                    'Dual Spray Automatic Door Cleaner'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code E4 Water Intake Timeout',
                        'symptom' => 'Machine beeps and displays E4 after running fill cycle for several minutes.',
                        'cause' => 'Choked inlet screen or low water flow.',
                        'solution' => 'Inlet valve flush and solenoid testing.'
                    ]
                ],
                'services_offered' => [
                    'Haier Direct Motion Motor & PCB Repair',
                    'Drain Pump & Solenoid Valve Replacement',
                    'ABT Door Gasket Fitting',
                    'Shock Absorber Damper Replacement'
                ],
                'supported_models' => [
                    'Haier Super Drum 525 Front Loaders (7kg - 9kg)',
                    'Haier Storm Wash Top Load Series'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair Haier Direct Motion motor error codes in Kochi?',
                        'a' => 'Yes. We diagnose and service Haier beltless Direct Motion stator motors and control boards on-site.'
                    ]
                ]
            ],
            'panasonic' => [
                'name' => 'Panasonic',
                'slug' => 'panasonic',
                'meta_title' => 'Panasonic Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Reliable Panasonic washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in StainMaster+, ActiveFoam, and Econavi models.',
                'h1' => 'Panasonic Washing Machine Repair & Service in Kochi',
                'badge' => 'Panasonic StainMaster Specialist',
                'hero_subtitle' => 'Professional repair for Panasonic StainMaster+ top load and inverter front load washing machines in Kochi.',
                'intro_heading' => 'Precision Panasonic Washing Machine Service in Kochi',
                'intro_paragraphs' => [
                    'Panasonic washing machines incorporate Japanese StainMaster+ targeted stain scrubbing, ActiveFoam dense bubble saturation, and Econavi load sensors.',
                    'Essentechs provides specialized repair for Panasonic washing machines across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'StainMaster+ Heavy Scrubbing Cycles',
                    'ActiveFoam System Dense Bubble Generation',
                    'Econavi Water and Load Weight Sensors'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code U11 Water Drainage Failure',
                        'symptom' => 'Cycle halts with water in tub and flashes error U11.',
                        'cause' => 'Clogged lint filter trap or burnt drain pump.',
                        'solution' => 'Trap clearing and pump motor replacement.'
                    ]
                ],
                'services_offered' => [
                    'Panasonic Drain Pump & Solenoid Servicing',
                    'ActiveFoam Pulsator & Belt Repair',
                    'Econavi Inverter Control Board Repair',
                    'Suspension Spring Replacement'
                ],
                'supported_models' => [
                    'Panasonic StainMaster Top Loaders (6.5kg - 8kg)',
                    'Panasonic Inverter Front Load Washers'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code U11 mean on a Panasonic washer?',
                        'a' => 'U11 indicates that the washing machine was unable to drain water. We inspect the drain hose and clear the drain pump to resolve this quickly.'
                    ]
                ]
            ],
            'electrolux' => [
                'name' => 'Electrolux',
                'slug' => 'electrolux',
                'meta_title' => 'Electrolux Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Certified Electrolux washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in UltimateCare, EcoInverter, and front loaders.',
                'h1' => 'Electrolux Washing Machine Repair & Service in Kochi',
                'badge' => 'Electrolux European Specialist',
                'hero_subtitle' => 'Expert doorstep repair for Electrolux UltimateCare and EcoInverter front load washing machines across Kochi.',
                'intro_heading' => 'European Engineering Care for Electrolux Washers in Kochi',
                'intro_paragraphs' => [
                    'Electrolux washing machines feature UltimateCare fabric preservation, EcoInverter quiet motors, and VapourCare steam hygiene sanitization.',
                    'Essentechs provides premium doorstep repair for Electrolux washing machines across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'EcoInverter Motor with Quiet Operation',
                    'UltimateCare Fabric Delicate System',
                    'VapourCare 99.9% Allergy Steam Sanitization'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code E20 Drainage Fault',
                        'symptom' => 'Machine beeps and halts with water in the drum, displaying E20.',
                        'cause' => 'Debris trapped in the drain pump chamber or blocked hose.',
                        'solution' => 'Filter clean, pump unblocking, or drain motor replacement.'
                    ]
                ],
                'services_offered' => [
                    'Electrolux EcoInverter PCB Diagnostics',
                    'Door Boot Bellows Gasket Replacement',
                    'Drain Pump & Valve Replacement',
                    'Tub Bearings & Shock Absorbers'
                ],
                'supported_models' => [
                    'Electrolux UltimateCare 300, 500, 700 Series',
                    'Electrolux Washer Dryer Combinations'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you carry spare parts for Electrolux washing machines in Kochi?',
                        'a' => 'Yes. We stock genuine-compatible Electrolux door seals, drain pumps, shock absorbers, and heating elements.'
                    ]
                ]
            ],
            'siemens' => [
                'name' => 'Siemens',
                'slug' => 'siemens',
                'meta_title' => 'Siemens Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Precision Siemens washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in iSensoric, iQ300, iQ500, and iQ700 front loaders.',
                'h1' => 'Siemens Washing Machine Repair & Service in Kochi',
                'badge' => 'Siemens German Engineering Specialist',
                'hero_subtitle' => 'Specialized doorstep repair for Siemens iQ300, iQ500, iQ700, and iSensoric front load washing machines in Kochi.',
                'intro_heading' => 'Premium Siemens Washing Machine Repair in Kochi',
                'intro_paragraphs' => [
                    'Siemens washing machines represent peak German engineering featuring iSensoric automated dosing (i-Dos), speedPack acceleration, and brushless iQdrive motors.',
                    'Essentechs provides specialized technician support for Siemens luxury and built-in washers across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'iQdrive Brushless Inverter Motor',
                    'i-Dos Automatic Liquid Detergent Dosing',
                    'iSensoric Sensor-Controlled Washing Programs',
                    'speedPack Time-Saving Programs'
                ],
                'common_problems' => [
                    [
                        'title' => 'Loud Jet Roar During Spin Cycle (Bearing Failure)',
                        'symptom' => 'Drum develops play and roars loudly when spinning at 1200 or 1400 RPM.',
                        'cause' => 'Worn rear tub bearings and damaged shaft oil seal.',
                        'solution' => 'Tub overhaul with precision bearing pressing and oil seal replacement.'
                    ]
                ],
                'services_offered' => [
                    'Siemens iQdrive Motor & Inverter PCB Diagnostics',
                    'Tub Bearing & Drum Spider Overhaul',
                    'Door Bellows Gasket & Electronic Lock Replacement',
                    'Shock Absorber Damper Replacement'
                ],
                'supported_models' => [
                    'Siemens iQ300, iQ500, iQ700 Front Load Washers',
                    'Siemens iQ500 Washer Dryer Combos'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair Siemens error code E18 in Kochi?',
                        'a' => 'Yes. Error E18 signifies a drainage issue. We clean the drain chamber and replace the pump if defective.'
                    ]
                ]
            ],
            'onida' => [
                'name' => 'Onida',
                'slug' => 'onida',
                'meta_title' => 'Onida Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Affordable Onida washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Doorstep service for Crystal Drum and Hydrofalls models.',
                'h1' => 'Onida Washing Machine Repair & Service in Kochi',
                'badge' => 'Onida Service Support',
                'hero_subtitle' => 'Doorstep repair for Onida semi-automatic and top load fully automatic washing machines in Kochi.',
                'intro_heading' => 'Dependable Onida Washing Machine Service in Kochi',
                'intro_paragraphs' => [
                    'Onida washing machines provide practical domestic laundry care with Crystal Drum technology, HydroFalls dynamic wash, and powerful spin extractors.',
                    'Essentechs delivers fast doorstep troubleshooting for Onida washing machines across Kochi, Kakkanad, and Ernakulam.'
                ],
                'technologies' => [
                    'HydroFalls Deep Cleaning Water Shower',
                    'Crystal Drum Fabric Gentle Perforations',
                    'Heavy-Duty Copper Winding Motors'
                ],
                'common_problems' => [
                    [
                        'title' => 'Spin Tub Not Rotating on Semi-Automatic',
                        'symptom' => 'Wash tub agitates fine, but spin basket does not rotate or hums weakly.',
                        'cause' => 'Broken safety spin lid switch or weak spin motor capacitor.',
                        'solution' => 'Lid switch bypass/replacement and capacitor renewal.'
                    ]
                ],
                'services_offered' => [
                    'Onida Spin & Wash Motor Replacement',
                    'Drain Valve & Bellows Servicing',
                    'Drive Belt & Pulsator Replacement',
                    'Capacitor & Timer Replacement'
                ],
                'supported_models' => [
                    'Onida Top Load Automatic (6.5kg - 8kg)',
                    'Onida HydroFalls Semi-Automatic Twin Tubs'
                ],
                'faqs' => [
                    [
                        'q' => 'How much does Onida washing machine repair cost in Kochi?',
                        'a' => 'We offer transparent upfront pricing based on the exact component replaced with zero hidden charges.'
                    ]
                ]
            ],
            'videocon' => [
                'name' => 'Videocon',
                'slug' => 'videocon',
                'meta_title' => 'Videocon Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Fast Videocon washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Reliable doorstep service and spares for semi & automatic washers.',
                'h1' => 'Videocon Washing Machine Repair & Service in Kochi',
                'badge' => 'Videocon Service Support',
                'hero_subtitle' => 'Reliable doorstep repair for Videocon semi-automatic and top load washing machines in Kochi.',
                'intro_heading' => 'Dependable Videocon Washing Machine Repair Across Kochi',
                'intro_paragraphs' => [
                    'Many households across Kerala depend on heavy-duty Videocon washing machines. When spin motors fail or pulsators wear down, reliable spares are essential.',
                    'Essentechs carries compatible components to keep Videocon washing machines running smoothly across Kochi.'
                ],
                'technologies' => [
                    'Heavy Duty Copper Motor Windings',
                    'Multi-Pulse Dynamic Water Scrubbing',
                    'Tough Polypropylene Rust-Free Cabinets'
                ],
                'common_problems' => [
                    [
                        'title' => 'Water Leaking from Underneath During Wash',
                        'symptom' => 'Clean or soapy water continuously leaks from the bottom onto the bathroom floor.',
                        'cause' => 'Torn rubber drain bellows or defective drain seal valve.',
                        'solution' => 'Drain valve assembly replacement and clamp tightening.'
                    ]
                ],
                'services_offered' => [
                    'Videocon Drain Valve & Motor Replacement',
                    'Pulsator & Drive Belt Replacement',
                    'Spin Timer & Capacitor Replacement',
                    'Wiring & Earthing Inspection'
                ],
                'supported_models' => [
                    'Videocon Semi-Automatic Twin Tub Washers',
                    'Videocon Top Load Automatic Washers'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair older Videocon semi-automatic washing machines in Kochi?',
                        'a' => 'Yes. We carry compatible spin motors, wash motors, gearboxes, capacitors, and drain valves to restore older Videocon units.'
                    ]
                ]
            ],
            'lloyd' => [
                'name' => 'Lloyd',
                'slug' => 'lloyd',
                'meta_title' => 'Lloyd Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Certified Lloyd washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Doorstep service for Havells Lloyd top load and front load models.',
                'h1' => 'Lloyd Washing Machine Repair & Service in Kochi',
                'badge' => 'Lloyd Appliance Specialist',
                'hero_subtitle' => 'Doorstep repair for Lloyd front load inverter and top load washing machines across Kochi.',
                'intro_heading' => 'Reliable Lloyd Washing Machine Service Across Kochi',
                'intro_paragraphs' => [
                    'Lloyd (Havells) washing machines combine modern aesthetics with Intelli-Inverter motors, warm wash cycles, and stainless steel ultra-drums.',
                    'Essentechs provides prompt on-site repair for Lloyd washing machines across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Intelli-Inverter Motor Technology',
                    'Warm Water Deep Stain Removal',
                    'Ultra-Drum Dynamic Agitation Vanes'
                ],
                'common_problems' => [
                    [
                        'title' => 'Lloyd Machine Shaking and Stopping Before Spin',
                        'symptom' => 'Washer stops before final extraction and resets cycle timer.',
                        'cause' => 'Unbalanced load sensor error or worn suspension struts.',
                        'solution' => 'Tub suspension strut replacement and balance recalibration.'
                    ]
                ],
                'services_offered' => [
                    'Lloyd Inverter Motor & PCB Diagnostics',
                    'Drain Pump & Solenoid Valve Replacement',
                    'Door Lock & Gasket Servicing',
                    'Drum Suspension Replacement'
                ],
                'supported_models' => [
                    'Lloyd Front Load Inverter Washers (7kg - 9kg)',
                    'Lloyd Top Load Smart Washers'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you service Lloyd front load washing machines in Kakkanad?',
                        'a' => 'Yes. We provide complete doorstep repair coverage across Kakkanad and all of Kochi.'
                    ]
                ]
            ],
            'voltas' => [
                'name' => 'Voltas',
                'slug' => 'voltas',
                'meta_title' => 'Voltas Beko Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Fast Voltas Beko washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in ProSmart Inverter and StainExpert models.',
                'h1' => 'Voltas Beko Washing Machine Repair & Service in Kochi',
                'badge' => 'Voltas Beko Specialist',
                'hero_subtitle' => 'Professional repair for Voltas Beko ProSmart inverter front load and top load washing machines in Kochi.',
                'intro_heading' => 'Expert Voltas Beko Washing Machine Repair in Kochi',
                'intro_paragraphs' => [
                    'Voltas Beko washing machines feature ProSmart Inverter brushless motors, StainExpert automated temperature cycles, and AquaWave curved drum patterns.',
                    'Essentechs provides certified doorstep repair for Voltas Beko washing machines in Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'ProSmart Inverter Motor with Low Friction',
                    'AquaWave Drum Technology Gentle Wave Action',
                    'StainExpert 24-Stain Temperature Programming'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code E05 Drain Pump Failure',
                        'symptom' => 'Machine stops with water inside tub and flashes error E05.',
                        'cause' => 'Choked drain filter or burnt drain motor.',
                        'solution' => 'Drain filter cleaning and pump motor replacement.'
                    ]
                ],
                'services_offered' => [
                    'Voltas Beko ProSmart Motor & PCB Diagnostics',
                    'Drain Pump & Solenoid Valve Replacement',
                    'Door Bellows Gasket & Electronic Lock Repair',
                    'Suspension Strut Replacement'
                ],
                'supported_models' => [
                    'Voltas Beko Front Loaders with ProSmart Inverter',
                    'Voltas Beko Top Load Automatic Washers'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code E05 mean on a Voltas Beko washer?',
                        'a' => 'Error E05 indicates a drainage fault. Our technician clears the pump filter and replaces the drain motor if needed.'
                    ]
                ]
            ],
            'toshiba' => [
                'name' => 'Toshiba',
                'slug' => 'toshiba',
                'meta_title' => 'Toshiba Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Dependable Toshiba washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Ultra Fine Bubble and Origin Inverter models.',
                'h1' => 'Toshiba Washing Machine Repair & Service in Kochi',
                'badge' => 'Toshiba Inverter Specialist',
                'hero_subtitle' => 'Certified doorstep repair for Toshiba Ultra Fine Bubble and Origin Inverter washing machines in Kochi.',
                'intro_heading' => 'Japanese Engineering Care for Toshiba Washers in Kochi',
                'intro_paragraphs' => [
                    'Toshiba washing machines feature Japanese Ultra Fine Bubble (UFB) nano-bubble soil extraction, Origin Inverter motors, and CycloneMix detergent dissolving.',
                    'Essentechs delivers dependable on-site repair for Toshiba washing machines across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Ultra Fine Bubble (UFB) Nano Soil Penetration',
                    'Origin Inverter Motor for Silent Spinning',
                    'The GreatWaves Dynamic Flow Water Action'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Code E1 / E2 Water Inlet or Drainage',
                        'symptom' => 'Machine beeps and halts during filling or draining.',
                        'cause' => 'Choked inlet screen or drain filter blockage.',
                        'solution' => 'Valve testing and filter unblocking.'
                    ]
                ],
                'services_offered' => [
                    'Toshiba Origin Inverter PCB Diagnostics',
                    'Drain Pump & Water Inlet Valve Replacement',
                    'Door Rubber Seal Fitting',
                    'Suspension Damper Replacement'
                ],
                'supported_models' => [
                    'Toshiba Front Load Inverter Series (7kg - 9kg)',
                    'Toshiba The GreatWaves Top Load Series'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair Toshiba inverter washing machine PCB boards in Kochi?',
                        'a' => 'Yes. We specialize in component-level electronic repair for Toshiba smart inverter driver boards.'
                    ]
                ]
            ],
            'midea' => [
                'name' => 'Midea',
                'slug' => 'midea',
                'meta_title' => 'Midea Washing Machine Repair in Kochi | Service | Essentechs',
                'meta_description' => 'Fast Midea washing machine repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Doorstep service for Lunar Dial and Inverter front/top loaders.',
                'h1' => 'Midea Washing Machine Repair & Service in Kochi',
                'badge' => 'Midea Appliance Specialist',
                'hero_subtitle' => 'Doorstep repair for Midea Lunar Dial front load and top load washing machines across Kochi.',
                'intro_heading' => 'Reliable Midea Washing Machine Service in Kochi',
                'intro_paragraphs' => [
                    'Midea washing machines combine modern Lunar Dial digital interfaces, BLDC inverter motors, and 15-minute quick wash programs.',
                    'Essentechs provides prompt on-site diagnostics and repair for Midea washing machines in Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Lunar Dial Integrated Digital Knob Display',
                    'BLDC Inverter Motor Energy Efficiency',
                    'Water Cube Drum Gentle Fabric Tumbling'
                ],
                'common_problems' => [
                    [
                        'title' => 'Lunar Dial Knob Unresponsive or Error E21',
                        'symptom' => 'Center knob display freezes or machine displays E21 (drainage error).',
                        'cause' => 'Microcontroller knob encoder wear or drain pump failure.',
                        'solution' => 'Knob interface repair and drain pump replacement.'
                    ]
                ],
                'services_offered' => [
                    'Midea Lunar Dial & PCB Circuit Repair',
                    'Drain Pump & Solenoid Valve Replacement',
                    'Door Lock & Gasket Replacement',
                    'Drum Suspension Replacement'
                ],
                'supported_models' => [
                    'Midea Lunar Series Front Loaders (7kg - 9kg)',
                    'Midea Top Load Fully Automatic Series'
                ],
                'faqs' => [
                    [
                        'q' => 'How quickly can an EssenTechs technician service my Midea washing machine in Kochi?',
                        'a' => 'We offer same-day doorstep service across Kochi, Kakkanad, and Ernakulam.'
                    ]
                ]
            ]
        ];
    }
}
