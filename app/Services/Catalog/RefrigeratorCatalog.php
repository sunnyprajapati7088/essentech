<?php

namespace App\Services\Catalog;

class RefrigeratorCatalog
{
    /**
     * Get all 12 Refrigerator Service Categories
     */
    public static function getServices(): array
    {
        return [
            [
                'title' => 'Refrigerator Repair',
                'description' => 'Fast, comprehensive on-site repair for single door, double door, triple door, French door, and side-by-side refrigerators across Kochi and Ernakulam.',
                'icon' => 'fas fa-tools',
                'cta_text' => 'Book Refrigerator Repair',
                'badge' => 'Certified Tech'
            ],
            [
                'title' => 'Refrigerator Service',
                'description' => 'Multi-point preventive maintenance, condenser coil cleaning, operating temperature verification, and compressor amp-draw checks to maintain peak energy efficiency.',
                'icon' => 'fas fa-cogs',
                'cta_text' => 'Book Fridge Service',
                'badge' => 'Annual Care'
            ],
            [
                'title' => 'Fridge Repair',
                'description' => 'Doorstep troubleshooting for cooling drop-offs, cycling issues, strange humming sounds, and electrical short-circuits with certified OEM-grade spares.',
                'icon' => 'fas fa-wrench',
                'cta_text' => 'Get Fridge Repair',
                'badge' => 'Doorstep'
            ],
            [
                'title' => 'Fridge Service',
                'description' => 'Scheduled inspection and maintenance to eliminate warm spots, internal moisture accumulation, and excessive frost buildup in domestic refrigerators.',
                'icon' => 'fas fa-shield-alt',
                'cta_text' => 'Schedule Service',
                'badge' => 'High Quality'
            ],
            [
                'title' => 'Refrigerator Cooling Problem',
                'description' => 'Pinpoint diagnostics for refrigerators running continuously without cooling, evaporator coil icing, failed circulation fan motors, and blocked air dampers.',
                'icon' => 'fas fa-snowflake',
                'cta_text' => 'Fix Cooling Issue',
                'badge' => 'Most Common'
            ],
            [
                'title' => 'Freezer Problem',
                'description' => 'Specialized repair for freezers not freezing, soft ice cream, frozen drain troughs, and defective defrost bimetal thermostats or timers.',
                'icon' => 'fas fa-icicles',
                'cta_text' => 'Restore Freezer',
                'badge' => 'Fast Fix'
            ],
            [
                'title' => 'Refrigerator Water Leakage',
                'description' => 'Clearing blocked defrost weep tubes, cracked drain pans, and clearing ice buildup under vegetable crisper drawers to end floor puddles.',
                'icon' => 'fas fa-tint',
                'cta_text' => 'Stop Water Leak',
                'badge' => 'Leak Proof'
            ],
            [
                'title' => 'Compressor Problem',
                'description' => 'Specialized testing for BLDC variable-frequency inverter compressors, starting PTC relays, overload protectors (OLP), and capacitor replacements.',
                'icon' => 'fas fa-compress-arrows-alt',
                'cta_text' => 'Diagnose Compressor',
                'badge' => 'Expert Tech'
            ],
            [
                'title' => 'Refrigerator Door Problem',
                'description' => 'Airtight magnetic door gasket replacement, hinge re-alignment, and self-closing cam repair to prevent warm air ingress and heavy frost.',
                'icon' => 'fas fa-door-closed',
                'cta_text' => 'Fix Door Gasket',
                'badge' => 'Genuine Spares'
            ],
            [
                'title' => 'Temperature Problem',
                'description' => 'Calibration and replacement of digital thermistors, analog temperature thermostats, and electronic control damper flaps for accurate compartment cooling.',
                'icon' => 'fas fa-thermometer-half',
                'cta_text' => 'Calibrate Temp',
                'badge' => 'Precision'
            ],
            [
                'title' => 'Refrigerator Noise Problem',
                'description' => 'Eliminating rattling, clicking, and vibration caused by worn evaporator fan bushings, condenser fan motor blades, or compressor mount grommets.',
                'icon' => 'fas fa-volume-up',
                'cta_text' => 'Silence Noise',
                'badge' => 'Quiet Comfort'
            ],
            [
                'title' => 'General Refrigerator Maintenance',
                'description' => 'Complete sanitization, drain line flushing, condenser vacuuming, voltage stability testing, and door seal leak detection for long refrigerator life.',
                'icon' => 'fas fa-clipboard-check',
                'cta_text' => 'Book Maintenance',
                'badge' => 'Total Care'
            ],
        ];
    }

    /**
     * Get all 13 Common Refrigerator Problems & Solutions
     */
    public static function getProblems(): array
    {
        return [
            [
                'title' => 'Refrigerator Not Cooling',
                'keyword' => 'refrigerator not cooling',
                'symptom' => 'The refrigerator motor runs, but both the fresh food and freezer sections remain at room temperature.',
                'cause' => 'Choked condenser coils, failed evaporator fan motor, low refrigerant gas from a pinhole leak, or locked compressor rotor.',
                'solution' => 'Coil cleaning, fan motor replacement, nitrogen leak testing, vacuuming, and precision digital gas charging.'
            ],
            [
                'title' => 'Fridge Not Cooling',
                'keyword' => 'fridge not cooling',
                'symptom' => 'Freezer feels somewhat cold, but the lower fridge section is warm and milk or vegetables spoil rapidly.',
                'cause' => 'Defective defrost timer, burnt defrost heater, or open thermal fuse leading to thick frost blocking the air passage duct.',
                'solution' => 'Testing defrost heating element and bimetal thermostat, manual defrosting of air ducts, and sensor replacement.'
            ],
            [
                'title' => 'Refrigerator Not Working',
                'keyword' => 'refrigerator not working',
                'symptom' => 'The appliance is completely dead with no interior light, no digital display, and no sound from the compressor.',
                'cause' => 'Blown power supply fuse on the main inverter PCB, defective power cord, or household voltage surge damage.',
                'solution' => 'Inverter control board repair, micro-soldering blown capacitors, and power circuit stabilization.'
            ],
            [
                'title' => 'Refrigerator Making Noise',
                'keyword' => 'refrigerator making noise',
                'symptom' => 'Loud clicking, buzzing, humming, or screeching sounds coming from the rear or freezer compartment.',
                'cause' => 'Worn evaporator fan motor bearings rubbing against ice, defective compressor start relay clicking, or worn vibration pads.',
                'solution' => 'Replacing worn fan motors, installing new PTC start relays, and damping compressor mounting feet.'
            ],
            [
                'title' => 'Refrigerator Water Leakage',
                'keyword' => 'refrigerator water leakage',
                'symptom' => 'Water pools under the crisper drawers or drips onto the kitchen floor from beneath the refrigerator.',
                'cause' => 'Defrost drain hole or weep pipe blocked with food debris, dust, or ice, causing melted defrost water to overflow.',
                'solution' => 'High-pressure hot water drain line flush, clearing trap pipes, and inspecting drain pan integrity.'
            ],
            [
                'title' => 'Freezer Not Cooling',
                'keyword' => 'freezer not cooling',
                'symptom' => 'Freezer fails to reach sub-zero temperatures; ice cubes melt and frozen food thaws.',
                'cause' => 'Low refrigerant charge, restricted capillary tube or filter drier, or faulty inverter drive control board.',
                'solution' => 'System evacuation, filter drier replacement, capillary flushing, and precise R600a/R134a refrigerant refilling.'
            ],
            [
                'title' => 'Refrigerator Ice Buildup',
                'keyword' => 'refrigerator ice buildup',
                'symptom' => 'Excessive snowy frost or solid sheets of ice coating the freezer back wall and cooling vents.',
                'cause' => 'Defective door gasket allowing humid Kerala air to leak inside, or failure in the automated defrost heater cycle.',
                'solution' => 'Airtight magnetic door gasket replacement, testing defrost thermostat, and recalibrating automatic defrost control.'
            ],
            [
                'title' => 'Compressor Problem',
                'keyword' => 'compressor problem',
                'symptom' => 'Compressor gets extremely hot, attempts to start with a click every two minutes, or fails to engage at all.',
                'cause' => 'Failed PTC starting relay, weak start capacitor, defective inverter IPM module, or compressor internal winding short.',
                'solution' => 'Compressor winding resistance test, relay/capacitor replacement, or inverter board repair.'
            ],
            [
                'title' => 'Refrigerator Gas Leakage',
                'keyword' => 'refrigerator gas leakage',
                'symptom' => 'Gradual loss of cooling over days, continuous compressor operation, and hissing or bubbling noises near coils.',
                'cause' => 'Corrosion on copper/aluminum joints, pinhole punctures in the evaporator plate, or vibration fractures in lines.',
                'solution' => 'Electronic halogen refrigerant sniffer testing, brazing punctured lines, nitrogen pressure hold test, and vacuum charging.'
            ],
            [
                'title' => 'Refrigerator Door Not Closing',
                'keyword' => 'refrigerator door not closing',
                'symptom' => 'Door pops back open, sags downward, or leaves a visible gap along the magnetic rubber seal.',
                'cause' => 'Worn or hardened rubber gasket, broken door hinge spacer, loose hinge screws, or unlevel appliance feet.',
                'solution' => 'Leveling the refrigerator cabinet, realigning hinges, and replacing tired magnetic gaskets with OEM parts.'
            ],
            [
                'title' => 'Refrigerator Temperature Problem',
                'keyword' => 'refrigerator temperature problem',
                'symptom' => 'Food in the fresh food section freezes solid (eggs cracking, vegetables turning to ice) or remains lukewarm.',
                'cause' => 'Stuck motorized air damper flap, failed temperature sensor thermistor, or stuck mechanical thermostat.',
                'solution' => 'Thermistor resistance curve calibration, electronic damper motor replacement, and thermostat recalibration.'
            ],
            [
                'title' => 'Refrigerator Light Not Working',
                'keyword' => 'refrigerator light not working',
                'symptom' => 'Interior LED light stays off when opening the door, or blinks erratically.',
                'cause' => 'Burnt LED module, broken door reed switch or mechanical push switch, or low voltage supply from the main board.',
                'solution' => 'Testing door switch continuity, installing genuine LED replacement boards, and checking low-voltage supply rails.'
            ],
            [
                'title' => 'Refrigerator Cooling Issue',
                'keyword' => 'refrigerator cooling issue',
                'symptom' => 'Inconsistent cooling throughout the day, cooling only works occasionally, or compressor short-cycles.',
                'cause' => 'Dust-clogged condenser coils, unstable home supply voltage, or drifting temperature control microprocessor.',
                'solution' => 'Comprehensive electrical diagnostic, condenser vacuuming, voltage stabilizer check, and control board recalibration.'
            ]
        ];
    }

    /**
     * Get all 15 Refrigerator Brands with complete details
     */
    public static function getBrands(): array
    {
        return [
            'samsung' => [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'meta_title' => 'Samsung Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Professional Samsung refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Digital Inverter compressors, Twin Cooling Plus, and frost-free PCB circuits.',
                'h1' => 'Samsung Refrigerator Repair & Service in Kochi',
                'badge' => 'Samsung Inverter Specialist',
                'hero_subtitle' => 'Doorstep repair and preventive servicing for Samsung single door, frost-free double door, French door, and side-by-side refrigerators across Kochi and Ernakulam.',
                'intro_heading' => 'Expert Samsung Refrigerator Servicing Across Kochi',
                'intro_paragraphs' => [
                    'Samsung refrigerators are renowned for their Digital Inverter Compressors, Twin Cooling Plus™ independent evaporators, and SpaceMax™ insulated thin walls. When cooling fails or error codes appear, component-level diagnosis is essential to preserve your food and appliance investment.',
                    'Essentechs provides certified on-site diagnostics and genuine-grade component repairs for Samsung refrigerators across Kochi, Kakkanad, Palarivattom, and Ernakulam. Our experienced refrigeration technicians resolve inverter board faults, R600a micro-leaks, and defrost sensor failures promptly.'
                ],
                'technologies' => [
                    'Digital Inverter 8-Speed Compressor Technology',
                    'Twin Cooling Plus™ Dual Evaporator Cooling',
                    'Curd Maestro™ Automated Fermentation Chambers',
                    'SpaceMax™ High-Efficiency Urethane Insulation',
                    'Smart Connect Inverter Power Compatibility'
                ],
                'common_problems' => [
                    [
                        'title' => 'Top Freezer Cold But Bottom Fridge Warm',
                        'symptom' => 'Freezer freezes water into ice, but lower refrigerator compartment stays warm and milk spoils.',
                        'cause' => 'Defrost cycle failure: blown thermal fuse, defective defrost bimetal sensor, or burned defrost glass heater.',
                        'solution' => 'Defrost sensor continuity testing, heater replacement, and clearing choked air return ducts.'
                    ],
                    [
                        'title' => 'Clicking Sound & Compressor Refusing to Run',
                        'symptom' => 'A distinct metallic click every two minutes from the rear bottom, followed by no motor humming.',
                        'cause' => 'Burnt PTC starting relay, defective inverter IPM power module on the main board, or locked compressor.',
                        'solution' => 'Inverter board voltage testing, relay module replacement, and compressor winding ohm verification.'
                    ],
                    [
                        'title' => 'Water Leaking Under Vegetable Crisper Box',
                        'symptom' => 'Water collects beneath the bottom fruit and vegetable drawer and spills when opened.',
                        'cause' => 'Defrost drain funnel choked with dust and food slime, causing melted frost water to overflow into the cabin.',
                        'solution' => 'High-pressure hot flush of the defrost drain weep hole and cleaning the rear compressor condensation tray.'
                    ],
                    [
                        'title' => 'Error Codes 5E, 22E, 25E on Display',
                        'symptom' => 'Digital temperature display flashes error code and interior fan stops rotating.',
                        'cause' => 'Evaporator fan motor feedback fault (22E), defrost sensor error (25E), or ambient sensor failure (5E).',
                        'solution' => 'Sensor resistance calibration, BLDC evaporator fan replacement, and harness connection clean.'
                    ]
                ],
                'services_offered' => [
                    'Samsung Digital Inverter PCB Diagnostics & Repair',
                    'Twin Cooling Plus Evaporator Defrost Restoration',
                    'Pure R600a Eco-Refrigerant Nitrogen Leak Testing & Refilling',
                    'Airtight Magnetic Door Gasket Replacement',
                    'BLDC Evaporator & Condenser Fan Motor Replacement',
                    'Side-by-Side Automatic Ice Maker Diagnostics'
                ],
                'supported_models' => [
                    'Samsung Single Door Direct Cool Refrigerators (192L - 230L)',
                    'Samsung Double Door Frost Free Convertible 5-in-1 (253L - 415L)',
                    'Samsung French Door Multi-Zone Refrigerators',
                    'Samsung Side-by-Side Inverter Smart Refrigerators (650L - 700L)',
                    'Samsung Curd Maestro Series'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is my Samsung frost-free refrigerator not cooling the bottom compartment?',
                        'a' => 'This is the most common symptom of a failed defrost cycle. When the defrost heater or thermal bimetal sensor fails, ice chokes the evaporator fins and blocks the cold air blower duct leading to the fresh food zone. Our technicians troubleshoot and replace the defective defrost sensor on-site.'
                    ],
                    [
                        'q' => 'Do you use genuine refrigerant for Samsung inverter refrigerators?',
                        'a' => 'Yes. Samsung inverter refrigerators require pure R600a (isobutane) refrigerant charged with precision digital scales to the exact gram rating indicated on the cabinet sticker. We vacuum the system to eliminate moisture and guarantee optimal cooling.'
                    ],
                    [
                        'q' => 'How quickly can an EssenTechs technician visit my home in Kochi?',
                        'a' => 'We offer convenient same-day doorstep service across Kochi, Kakkanad, Palarivattom, Edappally, Aluva, and Ernakulam when booked before 3:00 PM.'
                    ]
                ]
            ],
            'lg' => [
                'name' => 'LG',
                'slug' => 'lg',
                'meta_title' => 'LG Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Reliable LG refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Smart Inverter & Linear compressors, DoorCooling+, and PCB repair.',
                'h1' => 'LG Refrigerator Repair & Service in Kochi',
                'badge' => 'LG Smart Inverter Specialist',
                'hero_subtitle' => 'Fast, certified doorstep service for LG single door, double door frost-free, InstaView, and side-by-side refrigerators in Kochi and Ernakulam.',
                'intro_heading' => 'Comprehensive Repair for LG Smart Inverter Refrigerators',
                'intro_paragraphs' => [
                    'LG refrigerators feature cutting-edge Smart Inverter and Linear Compressors, DoorCooling+™ multi-directional airflow vents, and Hygiene Fresh+™ deodorizing filters. When cooling drops or unusual noises develop, our certified technicians provide accurate diagnostics and swift doorstep repairs.',
                    'Essentechs brings years of experience servicing LG refrigerators across Kochi and Ernakulam. We carry diagnostic equipment to read LG error codes, inspect inverter frequency outputs, and restore optimal temperatures with original-specification components.'
                ],
                'technologies' => [
                    'Smart Inverter & Inverter Linear Compressor Technology',
                    'DoorCooling+™ Front Edge Air Delivery',
                    'Hygiene Fresh+™ 5-Step Air Purifying Filter',
                    'Multi Air Flow Duct Design for Even Temperature',
                    'Smart Diagnosis™ Self-Testing Capabilities'
                ],
                'common_problems' => [
                    [
                        'title' => 'Compressor Running But No Cooling',
                        'symptom' => 'LG inverter compressor hums softly, but neither compartment achieves refrigeration temperatures.',
                        'cause' => 'Micro-leak in copper evaporator tubing or discharge line, or choked capillary filter drier.',
                        'solution' => 'Nitrogen leak sniff testing, brazing leak points, filter drier replacement, and pure R600a recharging.'
                    ],
                    [
                        'title' => 'Error Code Er FF or Er dH on Display',
                        'symptom' => 'The control panel flashes Er FF (Freezer Fan) or Er dH (Defrost Heater) and beeps.',
                        'cause' => 'Ice blocking the freezer fan blade, defective fan motor hall sensor, or burnt defrost heating sheath.',
                        'solution' => 'Manual de-icing of coil box, motor replacement, and testing defrost controller relay.'
                    ],
                    [
                        'title' => 'Loud Humming or Buzzing Noise from Rear Bottom',
                        'symptom' => 'Excessive vibration noise that stops briefly when the refrigerator door is opened.',
                        'cause' => 'Dust-packed condenser fan motor blade rubbing or worn compressor mounting grommets.',
                        'solution' => 'Condenser deep clean, fan motor shaft alignment, and rubber isolator pad replacement.'
                    ]
                ],
                'services_offered' => [
                    'LG Smart Inverter Compressor Diagnostics & Relay Replacement',
                    'DoorCooling+ Vent Airflow & Damper Motor Servicing',
                    'Defrost Heater, Thermal Sensor & Bimetal Replacement',
                    'Main PCB Circuit & Inverter Driver Board Troubleshooting',
                    'Eco-Friendly R600a Gas Leak Detection & Precision Refilling',
                    'Airtight Door Rubber Gasket Replacement'
                ],
                'supported_models' => [
                    'LG Single Door Direct Cool with Smart Inverter (190L - 235L)',
                    'LG Double Door Frost Free DoorCooling+ (242L - 437L)',
                    'LG Side-by-Side with Inverter Linear Compressor',
                    'LG InstaView Door-in-Door Series',
                    'LG Bottom Freezer Refrigerators'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code Er dH mean on an LG refrigerator?',
                        'a' => 'Error code Er dH indicates a defrost heater malfunction. The unit failed to reach the required defrost termination temperature within 4 hours. Our technicians replace the heater or defrost controller to resolve this promptly.'
                    ],
                    [
                        'q' => 'Can LG inverter compressor control boards be repaired?',
                        'a' => 'Yes. Many PCB issues are caused by blown IPM modules, swollen capacitors, or relay contact wear. Our electronic technicians repair LG control boards on-site or in our specialized workshop, saving you the high cost of total board replacement.'
                    ]
                ]
            ],
            'whirlpool' => [
                'name' => 'Whirlpool',
                'slug' => 'whirlpool',
                'meta_title' => 'Whirlpool Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Doorstep Whirlpool refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in IntelliFresh, 6th Sense, and Protton triple-door models.',
                'h1' => 'Whirlpool Refrigerator Repair & Service in Kochi',
                'badge' => 'Whirlpool 6th Sense Specialist',
                'hero_subtitle' => 'Fast, certified repair for Whirlpool direct cool, IntelliFresh frost-free, and Protton triple door refrigerators in Kochi.',
                'intro_heading' => 'Reliable Service for Whirlpool Refrigerators in Kochi',
                'intro_paragraphs' => [
                    'Whirlpool refrigerators are celebrated for their 6th Sense IntelliSensor technology, Microblock anti-microbial crispers, and innovative Protton three-door layouts. When sensor drift or cooling loss affects performance, expert diagnosis is required.',
                    'Essentechs provides comprehensive Whirlpool refrigerator repair across Kochi and Ernakulam. From thermostat replacements to capillary tube unblocking, our technicians restore factory-level refrigeration quickly.'
                ],
                'technologies' => [
                    '6th Sense IntelliSensor Adaptive Cooling',
                    'Microblock™ Anti-Microbial Technology',
                    'Zeolite Technology for Fresh Produce',
                    'Deep Freeze Cold Air Tower Design',
                    'Insulated Capillary & Laminar Airflow'
                ],
                'common_problems' => [
                    [
                        'title' => 'Whirlpool Refrigerator Not Cooling Lower Compartment',
                        'symptom' => 'Freezer works normally, but vegetable crisper and lower shelves remain warm.',
                        'cause' => 'Choked air tower vent, defective bi-metal defrost thermostat, or broken air damper baffle.',
                        'solution' => 'Defrost cycle inspection, damper flap repair, and evaporator coil de-icing.'
                    ],
                    [
                        'title' => 'Water Leaking on Kitchen Floor',
                        'symptom' => 'Puddle of clean water accumulates behind or under the refrigerator every morning.',
                        'cause' => 'Cracked rear condensate evaporator tray or detached defrost drain hose.',
                        'solution' => 'Condensation tray replacement and drain tube re-seating.'
                    ]
                ],
                'services_offered' => [
                    'Whirlpool 6th Sense Sensor Diagnostics & Calibration',
                    'Inverter Compressor & OLP Relay Troubleshooting',
                    'Defrost Timer & Heating Element Replacement',
                    'Gas Charging & Vacuum Leak Detection (R600a/R134a)',
                    'Door Magnetic Gasket Fitting'
                ],
                'supported_models' => [
                    'Whirlpool Icemagic Single Door Refrigerators',
                    'Whirlpool IntelliFresh Double Door Frost Free (265L - 340L)',
                    'Whirlpool Protton Three Door Refrigerators',
                    'Whirlpool Bottom Mount Multi-Airflow Series'
                ],
                'faqs' => [
                    [
                        'q' => 'Why does my Whirlpool refrigerator make a clicking sound and not start?',
                        'a' => 'A repeated clicking sound every 1 to 2 minutes indicates that the compressor is trying to start, but the PTC starting relay or overload protector (OLP) is tripping. Replacing the relay typically solves this immediately.'
                    ]
                ]
            ],
            'godrej' => [
                'name' => 'Godrej',
                'slug' => 'godrej',
                'meta_title' => 'Godrej Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Certified Godrej refrigerator repair and fridge service in Kochi, Kakkanad, and Ernakulam by Essentechs. Fast fix for Edge Pro, Eon, and inverter models.',
                'h1' => 'Godrej Refrigerator Repair & Service in Kochi',
                'badge' => 'Godrej Appliance Specialist',
                'hero_subtitle' => 'Reliable doorstep repair for Godrej single door, Edge Pro, and Eon frost-free inverter refrigerators across Kochi.',
                'intro_heading' => 'Dependable Godrej Refrigerator Service Across Kochi',
                'intro_paragraphs' => [
                    'Godrej is an iconic Indian home appliance brand featuring energy-efficient Edge Pro direct cool units, Eon frost-free double door models, and green inverter compressors using eco-friendly hydrocarbon refrigerants.',
                    'Essentechs provides prompt doorstep service for Godrej refrigerators across Kochi and Ernakulam. We carry certified spares for Godrej thermostats, defrost timers, PTC relays, and door gaskets.'
                ],
                'technologies' => [
                    'Advanced Inverter Technology with Variable Speed',
                    'Multi Inverter Technology with Cool Shower Air Vents',
                    'StayCool Technology for Power Cut Backup',
                    'Aroma Lock & Anti-Bacterial Nano Shield'
                ],
                'common_problems' => [
                    [
                        'title' => 'Excessive Ice Accumulation in Direct Cool Freezer',
                        'symptom' => 'Freezer box fills with thick solid ice within a few days of manual defrosting.',
                        'cause' => 'Worn rubber gasket letting humid air leak in, or stuck mechanical thermostat that never cuts off.',
                        'solution' => 'Thermostat replacement and airtight magnetic gasket realignment.'
                    ]
                ],
                'services_offered' => [
                    'Godrej Thermostat & Defrost Timer Replacement',
                    'Compressor Starting Relay & Capacitor Servicing',
                    'Nitrogen Pressure Testing & R600a Gas Charging',
                    'Door Seal Replacement & Cabinet Leveling'
                ],
                'supported_models' => [
                    'Godrej Edge Pro & Edge Digi Single Door (190L - 210L)',
                    'Godrej Eon Frost Free Double Door (240L - 350L)',
                    'Godrej Qube Mini Refrigerators'
                ],
                'faqs' => [
                    [
                        'q' => 'Why does my Godrej refrigerator run continuously without switching off?',
                        'a' => 'If the compressor runs non-stop without cycling off, either the thermostat contacts have welded shut, the door gasket is leaking warm air, or low refrigerant is preventing the sensor from detecting the set temperature. Our technicians diagnose the root cause on-site.'
                    ]
                ]
            ],
            'haier' => [
                'name' => 'Haier',
                'slug' => 'haier',
                'meta_title' => 'Haier Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Expert Haier refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Bottom Mount refrigerators, Triple Inverter, and Side-by-Side models.',
                'h1' => 'Haier Refrigerator Repair & Service in Kochi',
                'badge' => 'Haier Bottom Mount Specialist',
                'hero_subtitle' => 'Doorstep repair for Haier bottom mounted, French door, and Triple Inverter refrigerators in Kochi and Ernakulam.',
                'intro_heading' => 'Modern Repair Solutions for Haier Refrigerators in Kochi',
                'intro_paragraphs' => [
                    'Haier has revolutionized domestic kitchens with its Bottom Mounted Refrigerators (BMR) reducing bending by 90%, Triple Inverter smart compressors, and 1-Hour Icing Technology.',
                    'Essentechs provides specialized on-site repair for Haier refrigerators across Kochi. We resolve fan errors, PCB communication faults, and gas charging with factory-grade standards.'
                ],
                'technologies' => [
                    'Triple Inverter Technology with Dual Fan Motor',
                    'Bottom Mounted Refrigerator (BMR) Architecture',
                    '1-Hour Icing Technology Rapid Freeze',
                    'Magic Convertible Temperature Zones'
                ],
                'common_problems' => [
                    [
                        'title' => 'Haier Bottom Mount Fridge Freezer Warm',
                        'symptom' => 'Bottom freezer drawers fail to freeze food while upper cabinet stays cold.',
                        'cause' => 'Choked lower evaporator fan or broken electronic damper actuator.',
                        'solution' => 'Damper flap actuator replacement and lower coil testing.'
                    ]
                ],
                'services_offered' => [
                    'Haier Triple Inverter PCB & Fan Motor Repair',
                    'Convertible Zone Sensor Calibration',
                    'R600a Gas Charging & Leak Detection',
                    'Drain Weep Tube Cleaning & Gasket Fitting'
                ],
                'supported_models' => [
                    'Haier Bottom Mounted Frost Free Series (256L - 345L)',
                    'Haier Top Mount Inverter Double Door',
                    'Haier Side-by-Side & 4-Door French Refrigerators'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you fix Haier inverter refrigerator PCB boards in Kochi?',
                        'a' => 'Yes. We specialize in component-level repair for Haier inverter control boards, replacing power supplies, relays, and capacitors with high reliability.'
                    ]
                ]
            ],
            'panasonic' => [
                'name' => 'Panasonic',
                'slug' => 'panasonic',
                'meta_title' => 'Panasonic Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Certified Panasonic refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Econavi sensors, Prime Fresh, and Inverter models.',
                'h1' => 'Panasonic Refrigerator Repair & Service in Kochi',
                'badge' => 'Panasonic Econavi Specialist',
                'hero_subtitle' => 'Professional doorstep repair and servicing for Panasonic Econavi and Prime Fresh refrigerators across Kochi.',
                'intro_heading' => 'Precision Panasonic Refrigerator Servicing in Kochi',
                'intro_paragraphs' => [
                    'Panasonic refrigerators feature Japanese Econavi intelligent sensors that monitor ambient light, door openings, and internal load, paired with Prime Fresh -3°C soft-freezing technology.',
                    'Essentechs provides specialized diagnostics and repair for Panasonic refrigerators across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Econavi Intelligent Energy-Saving Sensors',
                    'Prime Fresh -3°C Soft-Freezing Compartment',
                    'AG Clean Anti-Bacterial Silver Filter',
                    'Surround Airflow Multi-Directional Cooling'
                ],
                'common_problems' => [
                    [
                        'title' => 'Prime Fresh Compartment Temperature Drift',
                        'symptom' => 'Prime Fresh zone freezes solid or fails to maintain the -3°C soft freeze temperature.',
                        'cause' => 'Dedicated thermistor sensor drift or motorized damper flap sticking.',
                        'solution' => 'Sensor recalibration and damper mechanism servicing.'
                    ]
                ],
                'services_offered' => [
                    'Panasonic Econavi Sensor Diagnostics',
                    'Inverter Compressor Relay & PCB Servicing',
                    'Defrost Heater & Thermal Cutoff Restoration',
                    'Eco Refrigerant Recharging'
                ],
                'supported_models' => [
                    'Panasonic Econavi Inverter Double Door (260L - 400L)',
                    'Panasonic Prime Fresh Multi-Door Refrigerators'
                ],
                'faqs' => [
                    [
                        'q' => 'Why are the Econavi indicator lights blinking on my Panasonic fridge?',
                        'a' => 'Flashing Econavi LEDs indicate an internal diagnostic code, usually related to an ambient room light sensor or defrost termination sensor error. Our technicians diagnose the error code on-site.'
                    ]
                ]
            ],
            'ifb' => [
                'name' => 'IFB',
                'slug' => 'ifb',
                'meta_title' => 'IFB Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Fast, certified IFB refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Component-level repair for IFB frost-free and inverter models.',
                'h1' => 'IFB Refrigerator Repair & Service in Kochi',
                'badge' => 'IFB Appliance Specialist',
                'hero_subtitle' => 'Doorstep repair and maintenance for IFB frost-free double door and inverter refrigerators across Kochi.',
                'intro_heading' => 'Reliable IFB Refrigerator Repair in Kochi',
                'intro_paragraphs' => [
                    'IFB refrigerators combine European design aesthetics with heavy-duty cooling mechanisms, 360-degree surround airflow, and metal cooling accents.',
                    'Essentechs technicians deliver expert on-site repair for IFB refrigerators across Kochi, Kakkanad, and Ernakulam with genuine replacement parts.'
                ],
                'technologies' => [
                    'Surround 360° Airflow Cooling',
                    'Metal Cooling Backplate Heat Retention',
                    'Intelligent Inverter Compressor Driver'
                ],
                'common_problems' => [
                    [
                        'title' => 'Inconsistent Cooling and High Energy Consumption',
                        'symptom' => 'Refrigerator struggles to keep milk fresh and compressor stays warm continuously.',
                        'cause' => 'Clogged rear condenser coils or drifted thermistor reading.',
                        'solution' => 'Condenser vacuum wash and temperature sensor replacement.'
                    ]
                ],
                'services_offered' => [
                    'IFB Inverter PCB Board Troubleshooting',
                    'Defrost Heater & Bimetal Repair',
                    'R600a Gas Leak Detection & Charging',
                    'Door Seal Replacement'
                ],
                'supported_models' => [
                    'IFB Frost Free Double Door Series (260L - 350L)',
                    'IFB Direct Cool Single Door Series'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you service IFB refrigerators across Ernakulam and Kakkanad?',
                        'a' => 'Yes. We provide complete doorstep coverage throughout Kochi, Kakkanad, Edappally, Palarivattom, and greater Ernakulam.'
                    ]
                ]
            ],
            'bosch' => [
                'name' => 'Bosch',
                'slug' => 'bosch',
                'meta_title' => 'Bosch Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Specialized Bosch refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Expert care for VitaFresh, VarioInverter, and Side-by-Side models.',
                'h1' => 'Bosch Refrigerator Repair & Service in Kochi',
                'badge' => 'Bosch German Engineering Specialist',
                'hero_subtitle' => 'High-precision repair for Bosch VitaFresh double door, French door, and side-by-side inverter refrigerators in Kochi.',
                'intro_heading' => 'Precision Care for Bosch Refrigerators in Kochi',
                'intro_paragraphs' => [
                    'Bosch refrigerators are engineered with German precision, featuring VarioInverter compressors, VitaFresh humidity-controlled crispers, and MultiAirflow cooling towers.',
                    'Essentechs provides specialized component diagnostics for Bosch refrigerators across Kochi, protecting your premium kitchen appliance.'
                ],
                'technologies' => [
                    'VarioInverter Speed Modulating Compressor',
                    'VitaFresh Plus Humidity Preservation System',
                    'MultiAirflow German Cooling Tower',
                    'SuperCooling & SuperFreezing Rapid Modes'
                ],
                'common_problems' => [
                    [
                        'title' => 'VitaFresh Zone Freezing Leafy Greens',
                        'symptom' => 'Vegetables placed in the crisper drawer develop frost and turn soggy.',
                        'cause' => 'Faulty motorized air damper or drifted temperature sensor.',
                        'solution' => 'Electronic damper replacement and calibration.'
                    ]
                ],
                'services_offered' => [
                    'Bosch VarioInverter PCB Diagnostics',
                    'MultiAirflow Evaporator & Damper Servicing',
                    'Defrost Circuit Repair & Precision Gas Charging',
                    'Side-by-Side Dual Cooling Diagnostics'
                ],
                'supported_models' => [
                    'Bosch Series 4 & Series 6 Double Door (269L - 559L)',
                    'Bosch Side-by-Side VitaFresh Refrigerators',
                    'Bosch Built-In Custom Cabinet Refrigerators'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair Bosch side-by-side refrigerators in Kochi?',
                        'a' => 'Yes. Our senior refrigeration technicians are trained to handle European built-in and freestanding Bosch multi-door refrigerators.'
                    ]
                ]
            ],
            'electrolux' => [
                'name' => 'Electrolux',
                'slug' => 'electrolux',
                'meta_title' => 'Electrolux Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Dependable Electrolux refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in NutriFresh Inverter and TasteSeal models.',
                'h1' => 'Electrolux Refrigerator Repair & Service in Kochi',
                'badge' => 'Electrolux Inverter Specialist',
                'hero_subtitle' => 'Certified repair for Electrolux NutriFresh inverter and French door refrigerators across Kochi.',
                'intro_heading' => 'Expert Electrolux Refrigerator Service in Kochi',
                'intro_paragraphs' => [
                    'Electrolux refrigerators feature NutriFresh Inverter compressors, TasteSeal -2°C premium food preservation drawers, and 360 Cooling systems.',
                    'Essentechs delivers dependable on-site repair for Electrolux refrigerators across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'NutriFresh Inverter Technology',
                    'TasteSeal -2°C Storage Drawer',
                    'TasteGuard Carbon Deodorizer Filter',
                    'Eventemp 360° Air Circulation'
                ],
                'common_problems' => [
                    [
                        'title' => 'TasteSeal Drawer Not Maintaining Temperature',
                        'symptom' => 'Meat and fish stored in the TasteSeal drawer do not maintain soft freeze.',
                        'cause' => 'Defective secondary cooling air damper or thermistor failure.',
                        'solution' => 'Damper actuator replacement and sensor testing.'
                    ]
                ],
                'services_offered' => [
                    'Electrolux Inverter PCB Diagnostics',
                    'Defrost Heater & Thermal Fuse Repair',
                    'Precision Refrigerant Leak Testing & Gas Charging',
                    'Door Magnetic Seal Replacement'
                ],
                'supported_models' => [
                    'Electrolux Frost Free Double Door (250L - 400L)',
                    'Electrolux Multi-Door French Door Refrigerators'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you service Electrolux frost-free refrigerators in Kakkanad?',
                        'a' => 'Yes. We offer prompt doorstep visits across Kakkanad, InfoPark area, and all neighborhoods in Kochi.'
                    ]
                ]
            ],
            'hitachi' => [
                'name' => 'Hitachi',
                'slug' => 'hitachi',
                'meta_title' => 'Hitachi Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Premium Hitachi refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in Dual Fan Cooling and French Door models.',
                'h1' => 'Hitachi Refrigerator Repair & Service in Kochi',
                'badge' => 'Hitachi Dual Fan Cooling Specialist',
                'hero_subtitle' => 'Expert repair for Hitachi Dual Fan Cooling, French Door, and high-capacity inverter refrigerators in Kochi.',
                'intro_heading' => 'Specialized Hitachi Refrigerator Repair Across Kochi',
                'intro_paragraphs' => [
                    'Hitachi refrigerators are known for Dual Fan Cooling with two dedicated fans for freezer and refrigerator compartments, high-power Inverter compressors, and VIP vacuum insulation panels.',
                    'Essentechs provides high-level troubleshooting for Hitachi refrigerators in Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Dual Fan Cooling Dedicated Air Delivery',
                    'High-Power Inverter Compressor with Eco Thermo Sensor',
                    'VIP (Vacuum Insulation Panel) Technology',
                    'Selectable Zone Convertible Compartments'
                ],
                'common_problems' => [
                    [
                        'title' => 'One Compartment Cooling While the Other is Warm',
                        'symptom' => 'Freezer works but fridge is warm, or vice-versa.',
                        'cause' => 'Dual fan motor failure on one of the dedicated circulation loops.',
                        'solution' => 'Independent fan motor testing and OEM fan motor replacement.'
                    ]
                ],
                'services_offered' => [
                    'Hitachi Dual Fan Motor Testing & Replacement',
                    'Inverter PCB Board Diagnostics',
                    'Eco Thermo Sensor Calibration',
                    'R600a Gas Charging'
                ],
                'supported_models' => [
                    'Hitachi French Door 4-Door Series (500L - 700L)',
                    'Hitachi Inverter Dual Fan Double Door Series'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair Hitachi multi-door refrigerators in Kochi?',
                        'a' => 'Yes. We have specialized technicians trained in Hitachi high-capacity dual-fan multi-door systems.'
                    ]
                ]
            ],
            'voltas' => [
                'name' => 'Voltas',
                'slug' => 'voltas',
                'meta_title' => 'Voltas Beko Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Fast Voltas Beko refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in HarvestFresh, ProSmart Inverter, and NeoFrost models.',
                'h1' => 'Voltas Beko Refrigerator Repair & Service in Kochi',
                'badge' => 'Voltas Beko Specialist',
                'hero_subtitle' => 'Certified repair for Voltas Beko HarvestFresh and ProSmart inverter refrigerators across Kochi.',
                'intro_heading' => 'Reliable Voltas Beko Refrigerator Service in Kochi',
                'intro_paragraphs' => [
                    'Voltas Beko brings together Indian climate adaptability and European technology, featuring NeoFrost Dual Cooling and HarvestFresh 3-color light preservation.',
                    'Essentechs delivers dependable on-site repair for Voltas Beko refrigerators across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'NeoFrost Dual Cooling No-Odor Transfer',
                    'ProSmart Inverter Compressor Energy Efficiency',
                    'HarvestFresh 3-Color Light Vitamin Preservation'
                ],
                'common_problems' => [
                    [
                        'title' => 'NeoFrost Dual Cooling Odor Mixing & Warm Fresh Food',
                        'symptom' => 'Food odor transfers between freezer and fresh food, accompanied by declining lower cabinet cooling.',
                        'cause' => 'Fresh food evaporator fan motor failure or defective air flap.',
                        'solution' => 'Motorized damper repair and fan replacement.'
                    ]
                ],
                'services_offered' => [
                    'Voltas Beko ProSmart Inverter PCB Diagnostics',
                    'Dual Evaporator Defrost Restoration',
                    'Gas Leak Testing & Vacuum Recharging',
                    'Door Gasket Replacement'
                ],
                'supported_models' => [
                    'Voltas Beko Double Door Frost Free (250L - 430L)',
                    'Voltas Beko Single Door Direct Cool'
                ],
                'faqs' => [
                    [
                        'q' => 'How soon can you repair a Voltas Beko refrigerator in Kochi?',
                        'a' => 'We provide same-day doorstep service across Kochi and Ernakulam when booked before 3:00 PM.'
                    ]
                ]
            ],
            'videocon' => [
                'name' => 'Videocon',
                'slug' => 'videocon',
                'meta_title' => 'Videocon Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Affordable Videocon refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Component replacement for single and double door models.',
                'h1' => 'Videocon Refrigerator Repair & Service in Kochi',
                'badge' => 'Videocon Service Support',
                'hero_subtitle' => 'Reliable doorstep repair for Videocon direct cool and frost-free refrigerators across Kochi.',
                'intro_heading' => 'Experienced Repair for Videocon Refrigerators in Kochi',
                'intro_paragraphs' => [
                    'Thousands of households in Kerala continue to rely on robust Videocon refrigerators. When cooling drops or components age, finding reliable spares is vital.',
                    'Essentechs provides dedicated service and compatible spares for Videocon refrigerators across Kochi.'
                ],
                'technologies' => [
                    'Heavy-Duty Reciprocating Compressor Design',
                    'Direct Cool Thick Insulation Cabinets',
                    'Analog Mechanical Thermostat Control'
                ],
                'common_problems' => [
                    [
                        'title' => 'Compressor Overheating and Tripping MCB',
                        'symptom' => 'Household MCB trips immediately when refrigerator starts or compressor gets boiling hot.',
                        'cause' => 'Burnt starting relay, grounded compressor terminal, or deteriorated wiring.',
                        'solution' => 'Relay replacement, insulation resistance megger testing, and terminal repair.'
                    ]
                ],
                'services_offered' => [
                    'Videocon Relay & Thermostat Replacement',
                    'Gas Charging & Pinhole Leak Brazing',
                    'Door Gasket Replacement',
                    'Capillary Tube Descaling'
                ],
                'supported_models' => [
                    'Videocon Direct Cool Single Door (170L - 215L)',
                    'Videocon Frost Free Double Door'
                ],
                'faqs' => [
                    [
                        'q' => 'Can older Videocon refrigerators still be repaired in Kochi?',
                        'a' => 'Yes. We carry compatible thermostats, starting relays, overload protectors, and refrigerants to restore older Videocon units efficiently.'
                    ]
                ]
            ],
            'kelvinator' => [
                'name' => 'Kelvinator',
                'slug' => 'kelvinator',
                'meta_title' => 'Kelvinator Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Dependable Kelvinator refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Fast service for Direct Cool and Frost Free models.',
                'h1' => 'Kelvinator Refrigerator Repair & Service in Kochi',
                'badge' => 'Kelvinator Refrigerator Specialist',
                'hero_subtitle' => 'Professional repair for Kelvinator single door and frost-free refrigerators across Kochi.',
                'intro_heading' => 'Reliable Kelvinator Refrigerator Service in Kochi',
                'intro_paragraphs' => [
                    'Kelvinator is an appliance heritage brand known for durability and fast ice making. When cooling drops or defrost issues occur, our technicians deliver prompt solutions.',
                    'Essentechs offers doorstep repair for Kelvinator refrigerators across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Dual Flow Air Circulation',
                    'Super Fast Ice Making Freeze Trays',
                    'Energy-Efficient Copper Condenser Tubing'
                ],
                'common_problems' => [
                    [
                        'title' => 'Slow Cooling and Frost Build-Up',
                        'symptom' => 'Freezer takes all day to make ice and compressor hums without stopping.',
                        'cause' => 'Slow refrigerant leak or worn door magnetic gasket.',
                        'solution' => 'Leak detection, gas refilling, and gasket replacement.'
                    ]
                ],
                'services_offered' => [
                    'Kelvinator Thermostat & Timer Replacement',
                    'Compressor Starting Kit Replacement',
                    'Refrigerant Charging & Nitrogen Leak Test',
                    'Door Rubber Seal Fitting'
                ],
                'supported_models' => [
                    'Kelvinator Direct Cool Single Door (190L - 220L)',
                    'Kelvinator Frost Free Double Door'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is my Kelvinator fridge forming ice outside the freezer box?',
                        'a' => 'Ice forming around the frame usually indicates an air leak through a warped door gasket, allowing room humidity to condense and freeze. We replace the gasket to restore an airtight seal.'
                    ]
                ]
            ],
            'siemens' => [
                'name' => 'Siemens',
                'slug' => 'siemens',
                'meta_title' => 'Siemens Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'High-end Siemens refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Specialists in hyperFresh, iSensoric, and built-in models.',
                'h1' => 'Siemens Refrigerator Repair & Service in Kochi',
                'badge' => 'Siemens Premium Care',
                'hero_subtitle' => 'Specialized repair for Siemens hyperFresh, iSensoric, and built-in premium refrigerators across Kochi.',
                'intro_heading' => 'Premium Siemens Refrigerator Service in Kochi',
                'intro_paragraphs' => [
                    'Siemens refrigerators represent premium German engineering featuring iSensoric climate sensors, hyperFresh drawer humidity regulation, and multiAirflow towers.',
                    'Essentechs provides specialized technician support for Siemens luxury and built-in refrigerators across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'iSensoric Intelligent Microprocessor Climate Control',
                    'hyperFresh Premium Humidity Preservation',
                    'multiAirflow Consistent German Tower Airflow',
                    'NoFrost Complete Anti-Icing Technology'
                ],
                'common_problems' => [
                    [
                        'title' => 'hyperFresh Humidity Sensor Malfunction',
                        'symptom' => 'Control screen displays sensor fault icon and compartment temperature deviates.',
                        'cause' => 'Electronic sensor drift or harness oxidation.',
                        'solution' => 'Sensor replacement and board recalibration.'
                    ]
                ],
                'services_offered' => [
                    'Siemens Inverter Control Board Diagnostics',
                    'Electronic Damper & Sensor Replacement',
                    'Quiet Fan Motor Replacement',
                    'High-Precision Gas Charging'
                ],
                'supported_models' => [
                    'Siemens iQ300 & iQ500 Double Door Series',
                    'Siemens Side-by-Side Multi-Door Refrigerators',
                    'Siemens Built-In Integrated Refrigerators'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you service built-in Siemens refrigerators in Kochi without damaging cabinetry?',
                        'a' => 'Yes. Our senior technicians have extensive experience servicing integrated German appliances with specialized tools, protecting custom millwork and cabinetry.'
                    ]
                ]
            ],
            'onida' => [
                'name' => 'Onida',
                'slug' => 'onida',
                'meta_title' => 'Onida Refrigerator Repair in Kochi | Fridge Service | Essentechs',
                'meta_description' => 'Affordable Onida refrigerator repair in Kochi, Kakkanad, and Ernakulam by Essentechs. Reliable doorstep service for direct cool and frost free models.',
                'h1' => 'Onida Refrigerator Repair & Service in Kochi',
                'badge' => 'Onida Service Support',
                'hero_subtitle' => 'Doorstep repair and maintenance for Onida direct cool and frost-free refrigerators across Kochi.',
                'intro_heading' => 'Dependable Onida Refrigerator Repair Across Kochi',
                'intro_paragraphs' => [
                    'Onida refrigerators offer practical domestic cooling with heavy-duty compressors and toughened glass shelves.',
                    'Essentechs provides fast doorstep troubleshooting for Onida refrigerators across Kochi, Kakkanad, and Ernakulam.'
                ],
                'technologies' => [
                    'Rapid Ice Making Direct Cool Technology',
                    'Toughened Glass Spill-Proof Shelving',
                    'Anti-Bacterial Door Gasket Protection'
                ],
                'common_problems' => [
                    [
                        'title' => 'Low Cooling in Refrigerator Cabin',
                        'symptom' => 'Freezer is cool but fresh food compartment is not cold enough.',
                        'cause' => 'Thermostat failure or low refrigerant gas.',
                        'solution' => 'Thermostat replacement and nitrogen gas pressure check.'
                    ]
                ],
                'services_offered' => [
                    'Onida Thermostat & Relay Replacement',
                    'Gas Refilling & Leak Repair',
                    'Door Gasket Replacement',
                    'Wiring & Earthing Inspection'
                ],
                'supported_models' => [
                    'Onida Single Door Direct Cool (180L - 210L)',
                    'Onida Frost Free Double Door'
                ],
                'faqs' => [
                    [
                        'q' => 'How much does Onida refrigerator repair cost in Kochi?',
                        'a' => 'We offer transparent upfront pricing based on the specific spare part needed (thermostat, relay, gas charge) with zero hidden fees.'
                    ]
                ]
            ]
        ];
    }
}
