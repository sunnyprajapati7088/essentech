<?php

namespace App\Services;

class ApplianceCatalogService
{
    /**
     * Get all Microwave Oven brands data
     */
    public static function getMicrowaveBrands(): array
    {
        return [
            'samsung' => [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'meta_title' => 'Samsung Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Expert Samsung microwave oven repair in Kochi by Essentechs. Fast resolution for heating failures, TDS magnetron issues, touch panel errors, and HotBlast convection faults.',
                'h1' => 'Samsung Microwave Oven Service & Repair',
                'badge' => 'Specialized Samsung Microwave Support',
                'hero_subtitle' => 'Professional diagnostic, component-level repair, and maintenance for Samsung solo, grill, and HotBlast™ convection microwaves.',
                'intro_heading' => 'Comprehensive Diagnostics & Repair for Samsung Microwave Ovens',
                'intro_paragraphs' => [
                    'Samsung microwave ovens are engineered with cutting-edge culinary technologies including the Triple Distribution System (TDS), ceramic enamel interior cavities, and HotBlast™ convection fans. When these intricate heating and moisture-sensing mechanisms experience electrical wear or component stress, accurate diagnosis is vital to prevent cavity damage.',
                    'Essentechs provides specialized on-site repair services for Samsung microwave owners across Kochi and Ernakulam. Our certified appliance technicians use calibrated multimeters, high-voltage discharge tools, and original OEM-compatible components to troubleshoot magnetron circuits, inverter PCB boards, and touch control keypads safely.'
                ],
                'technologies' => [
                    'Triple Distribution System (TDS) Multi-Angle Heat Distribution',
                    'HotBlast™ High-Velocity Convection Airflow',
                    'Ceramic Enamel Cavity Surface & Arc Shields',
                    'Smart Moisture Sensors & Auto-Reheat Microcontrollers',
                    'SlimFry™ Healthy Air-Circulation Systems'
                ],
                'common_problems' => [
                    [
                        'title' => 'Magnetron Failure / No Heat Generation',
                        'symptom' => 'The microwave runs and the timer counts down, but food remains completely cold.',
                        'cause' => 'High-voltage diode short-circuit, damaged TDS magnetron filament, or open thermal cutoff fuse.',
                        'solution' => 'Complete high-voltage loop testing, diode replacement, and high-efficiency magnetron restoration.'
                    ],
                    [
                        'title' => 'Error Code C-d0 / C-20 Sensor Faults',
                        'symptom' => 'Display shows error code C-d0 or C-20 accompanied by rapid beeping tones.',
                        'cause' => 'Faulty primary or secondary door interlock micro-switch or defective humidity sensor circuit.',
                        'solution' => 'Alignment and replacement of micro-switches, sensor PCB re-calibration, and terminal crimp cleaning.'
                    ],
                    [
                        'title' => 'Touch Membrane Keypad Unresponsive',
                        'symptom' => 'Certain numbers or the Start button refuse to register finger taps.',
                        'cause' => 'Conductive ribbon cable degradation or moisture ingress behind the capacitive touch glass.',
                        'solution' => 'Replacement of the flexible membrane switch assembly or repair of the front interface PCB traces.'
                    ],
                    [
                        'title' => 'Internal Sparking & Arcing Near Waveguide',
                        'symptom' => 'Loud crackling sounds and bright flashes occur inside the cavity during heating.',
                        'cause' => 'Burned or carbon-coated mica waveguide cover plate allowing RF energy to arc against metal.',
                        'solution' => 'Cavity burn de-carbonization, anti-arc cavity enamel recoating, and precision-cut mica sheet replacement.'
                    ],
                    [
                        'title' => 'Turntable Motor Jerking or Frozen',
                        'symptom' => 'Glass tray stutters or does not rotate, resulting in uneven cooking spots.',
                        'cause' => 'Stripped synchronous drive motor gears or broken coupler shaft underneath the plate.',
                        'solution' => 'Direct replacement of the 21V/240V synchronous turntable motor and inspection of roller ring tracks.'
                    ]
                ],
                'services_offered' => [
                    'Samsung Magnetron & Inverter PCB Testing',
                    'Door Interlock Switch Alignment & Replacement',
                    'Mica Waveguide Shield De-carbonization & Fitting',
                    'Touch Panel & Keypad Membrane Circuit Repair',
                    'High Voltage Capacitor & Diode Replacement',
                    'Convection Heating Element & Fan Motor Overhaul'
                ],
                'supported_models' => [
                    'Samsung Solo Microwave Ovens (20L - 28L)',
                    'Samsung Grill Microwave Ovens with Sheath Heaters',
                    'Samsung HotBlast™ & Baker Series Convection Ovens',
                    'Samsung SlimFry™ Smart Multi-Sensor Units',
                    'Samsung Built-in Over-the-Counter Microwaves'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is my Samsung microwave running but not heating food?',
                        'a' => 'In Samsung microwave ovens, a countdown with no heat is most frequently caused by a blown high-voltage diode, an open thermal protection switch, or a deteriorated magnetron tube. Our technicians carry specialized HV test gear to diagnose the exact failed component at your home.'
                    ],
                    [
                        'q' => 'What does error code C-d0 mean on a Samsung microwave?',
                        'a' => 'Error code C-d0 indicates a door sensing fault. The control board does not detect that the primary interlock micro-switch has made full contact. Essentechs technicians inspect the door hook latch and calibrate or replace the interlock switches to resolve this safely.'
                    ],
                    [
                        'q' => 'Can you repair unresponsive touch buttons on a Samsung microwave?',
                        'a' => 'Yes. Unresponsive touch membranes are common due to kitchen steam and long-term switch contact wear. We replace the front membrane interface and inspect the motherboard ribbon connector to restore 100% responsiveness.'
                    ],
                    [
                        'q' => 'How quickly can Essentechs service my Samsung microwave in Kochi?',
                        'a' => 'We offer convenient same-day service visits across Kochi, Kakkanad, Ernakulam, and surrounding neighborhoods. Contact our dispatch desk at +91 97467 00889 to schedule a convenient time slot.'
                    ]
                ]
            ],

            'lg' => [
                'name' => 'LG',
                'slug' => 'lg',
                'meta_title' => 'LG Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Reliable LG microwave oven service and repair in Kochi by Essentechs. Repairing Smart Inverter magnetrons, NeoChef touch controls, charcoal heaters, and turntable faults.',
                'h1' => 'LG Microwave Oven Service & Repair',
                'badge' => 'Specialized LG Microwave Care',
                'hero_subtitle' => 'Expert maintenance, diagnostics, and repairs for LG NeoChef, Smart Inverter, Charcoal Lighting, and conventional microwave ovens.',
                'intro_heading' => 'Precision Repairs for LG Smart Inverter & NeoChef Microwaves',
                'intro_paragraphs' => [
                    'LG microwave ovens, particularly the NeoChef series, feature sophisticated Smart Inverter technology that provides precise temperature graduation for melting, defrosting, and uniform baking. Unlike traditional on/off cycle transformers, LG inverter power modules require specialized electronic troubleshooting to protect delicate microprocessors.',
                    'At Essentechs, our engineers have deep expertise in handling LG proprietary heating assemblies, Charcoal Lighting Heaters™, and anti-bacterial EasyClean™ enamel cavities. We diagnose electrical faults accurately and restore your microwave with safety-certified components.'
                ],
                'technologies' => [
                    'Smart Inverter Variable Output Technology',
                    'NeoChef Hexagonal Turntable Stabilization Ring',
                    'Charcoal Lighting Heater™ Rapid Browning System',
                    'Anti-Bacterial EasyClean™ Interior Cavities',
                    'Smart Diagnosis™ Electronic Troubleshooting Support'
                ],
                'common_problems' => [
                    [
                        'title' => 'Smart Inverter Tripping Home Breaker',
                        'symptom' => 'Switching on heating trips the MCB or main household power breaker.',
                        'cause' => 'Short-circuited IGBT power transistors on the inverter power supply board or ground leakage in the magnetron.',
                        'solution' => 'Inverter board diagnostic bench-test, IGBT module replacement, and insulation breakdown resistance check.'
                    ],
                    [
                        'title' => 'LG NeoChef Touch Slide Control Unresponsive',
                        'symptom' => 'The capacitive touch slider does not respond to finger gestures or skips cooking times.',
                        'cause' => 'Static buildup, sensor foil oxidation, or front display controller sub-board malfunction.',
                        'solution' => 'Electrostatic discharge clearing, touch sensor ribbon reseating, or display PCB replacement.'
                    ],
                    [
                        'title' => 'Charcoal Lighting Heater Not Glowing / Baking',
                        'symptom' => 'Convection or grill mode fails to crisp food while microwave mode works.',
                        'cause' => 'Open-circuit quartz charcoal tube filament or burned heating element relay on main PCB.',
                        'solution' => 'Quartz element continuity testing, thermal cutout replacement, and heavy-duty relay soldering.'
                    ],
                    [
                        'title' => 'Hexagonal Turntable Wobble and Grind',
                        'symptom' => 'The rotating platter tilts, makes scraping noises, or spills liquid during rotation.',
                        'cause' => 'Worn hexagonal roller ring guide bearings or stripped turntable drive shaft coupler.',
                        'solution' => 'Hexagonal roller ring replacement and high-temperature shaft realignment.'
                    ],
                    [
                        'title' => 'Door Latch Sticks or Interior Lamp Fails',
                        'symptom' => 'Door requires heavy force to open, or LED lamp flickers/stays off during operation.',
                        'cause' => 'Fatigued latch torsion spring or failed LED driver circuit on low-voltage rail.',
                        'solution' => 'Spring latch mechanism overhaul and LED illuminator assembly replacement.'
                    ]
                ],
                'services_offered' => [
                    'LG Smart Inverter Power Board Diagnostic & Repair',
                    'Magnetron Replacement with Genuine Spec Matching',
                    'NeoChef Touch Slider & Display Controller Repair',
                    'Charcoal Lighting Heater & Grill Element Replacement',
                    'Hexagonal Roller Guide & Drive Motor Servicing',
                    'Door Hinge, Latch & Micro-Switch Calibration'
                ],
                'supported_models' => [
                    'LG NeoChef Smart Inverter Series (28L - 32L)',
                    'LG Charcoal Convection Microwave Ovens',
                    'LG Solo Microwaves with Auto-Cook Menus',
                    'LG Grill Microwaves with Quartz Heaters',
                    'LG All-in-One Indian Roti Basket™ Models'
                ],
                'faqs' => [
                    [
                        'q' => 'How does an LG Smart Inverter microwave differ in repairs from standard models?',
                        'a' => 'Traditional microwaves use heavy iron-core transformers and high-voltage capacitors, whereas LG Smart Inverters use a high-frequency solid-state inverter PCB. Repairing inverter models requires specialized electronic diagnostic tools to test IGBT switches and high-frequency pulse circuits.'
                    ],
                    [
                        'q' => 'Can you replace the Charcoal Lighting Heater in my LG convection microwave?',
                        'a' => 'Yes. If your convection oven is no longer browning or baking properly, we test the charcoal filament for open circuits and replace the genuine heating unit along with thermal safety fuses.'
                    ],
                    [
                        'q' => 'Why does my LG microwave turntable rattle with light bowls?',
                        'a' => 'LG NeoChef uses a 6-point hexagonal roller ring. If one of the six rollers is worn or knocked off its track, even light loads will cause rattling and uneven heating. We inspect and replace the roller ring assembly on the spot.'
                    ],
                    [
                        'q' => 'Is it safe to operate an LG microwave if the interior light bulb is blown?',
                        'a' => 'While the heating functions remain operable, a blown bulb makes it hard to detect liquid boil-overs and waveguide sparking. Essentechs can replace your high-efficiency internal LED lamp during a routine service visit.'
                    ]
                ]
            ],

            'ifb' => [
                'name' => 'IFB',
                'slug' => 'ifb',
                'meta_title' => 'IFB Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Professional IFB microwave oven service in Kochi. Prompt repair for convection heating elements, multi-stage cooking PCB faults, turntable motors, and door latches.',
                'h1' => 'IFB Microwave Oven Service & Repair',
                'badge' => 'Expert IFB Microwave Solutions',
                'hero_subtitle' => 'Complete repair and maintenance for IFB convection, grill, and solo microwave ovens across Kochi and Ernakulam.',
                'intro_heading' => 'Reliable Repairs for Heavy-Duty IFB Microwave Ovens',
                'intro_paragraphs' => [
                    'IFB microwave ovens are renowned for their heavy-duty stainless steel cavities, oil-free baking modes, and sophisticated multi-stage cooking programs. With extensive usage in Indian culinary preparation, high-heat convection cycles and continuous steam can place significant thermal strain on heating coils, thermal limiters, and cooling blowers.',
                    'Essentechs provides dependable, professional diagnostics and repair for IFB microwave models. Whether your unit suffers from heating drop-offs, turntable stalls, or PCB controller failure, our local technicians restore your oven to peak cooking efficiency.'
                ],
                'technologies' => [
                    'Multi-Stage Auto Cook Programs',
                    'Stainless Steel Reflective Cavity Design',
                    'Double-Grill & Convection Turbo Fan Technology',
                    'Disinfect & Steam Clean Hygienic Features',
                    'Overheat & Surge Protection Circuitry'
                ],
                'common_problems' => [
                    [
                        'title' => 'Convection Mode Not Reaching Temperature',
                        'symptom' => 'Cakes and pastries fail to rise or remain doughy after prolonged convection cooking.',
                        'cause' => 'Burned convection tubular heater or broken fan impeller failing to circulate superheated air.',
                        'solution' => 'Element resistance testing, convection element replacement, and fan motor servicing.'
                    ],
                    [
                        'title' => 'Unit Completely Dead / No Power LED',
                        'symptom' => 'Plugging into the wall socket produces zero response, no display, and no sound.',
                        'cause' => 'Blown ceramic main fuse, surge protector varistor burnout, or transformer primary winding failure.',
                        'solution' => 'Power supply trace inspection, line fuse replacement, and safety varistor renewal.'
                    ],
                    [
                        'title' => 'Loud Buzzing or Vibrating Sound',
                        'symptom' => 'Microwave emits a harsh buzzing noise during the first 10 seconds of starting.',
                        'cause' => 'High-voltage transformer lamination chatter or defective high-voltage capacitor.',
                        'solution' => 'Transformer mounting dampener inspection and high-voltage capacitor capacitance testing.'
                    ],
                    [
                        'title' => 'Door Handle / Hook Latch Stuck',
                        'symptom' => 'Push-to-open button fails to release the door or handle feels loose.',
                        'cause' => 'Snapped door spring lever or deformed plastic cam latch inside the door frame.',
                        'solution' => 'Door assembly disassembly, latch lever replacement, and safety interlock realignment.'
                    ]
                ],
                'services_offered' => [
                    'IFB Convection Heating Coil & Fan Overhaul',
                    'High Voltage Transformer & Capacitor Replacement',
                    'Main PCB Microcontroller Diagnostics & Relay Solder',
                    'Stainless Steel Cavity Inspection & De-arcing',
                    'Door Push Button & Spring Mechanism Repair',
                    'Complete Electrical Safety & Radiation Leakage Check'
                ],
                'supported_models' => [
                    'IFB Convection Microwave Series (20BC4, 25BCSDD, 30BRC2, etc.)',
                    'IFB Grill Microwave Ovens (20PG4S, 25PG3B, etc.)',
                    'IFB Solo Microwave Range (17PM-MEC1, 20PM2S)',
                    'IFB Metallic Finish Multi-Stage Cooking Ovens'
                ],
                'faqs' => [
                    [
                        'q' => 'Why does my IFB convection microwave take too long to preheat?',
                        'a' => 'Preheating delays usually indicate that one of the dual heating coils has developed high resistance or that the convection circulation fan is stalling. Our technicians test coil wattage and fan RPM to fix the issue.'
                    ],
                    [
                        'q' => 'Can you repair IFB microwave ovens with burnt smells?',
                        'a' => 'Yes. A burnt smell during microwave operation often stems from food splatters burning on the mica sheet, arcing near the waveguide, or an overheating cooling fan motor. We recommend disconnecting power and calling Essentechs immediately.'
                    ],
                    [
                        'q' => 'Do you service older IFB microwave models in Kochi?',
                        'a' => 'Yes, we service both current-generation digital models and legacy IFB mechanical dial microwaves with reliable parts and transparent service.'
                    ]
                ]
            ],

            'electrolux' => [
                'name' => 'Electrolux',
                'slug' => 'electrolux',
                'meta_title' => 'Electrolux Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Fast, expert Electrolux microwave oven service in Kochi by Essentechs. Repairing European-engineered built-in and countertop microwave ovens with precision.',
                'h1' => 'Electrolux Microwave Oven Service & Repair',
                'badge' => 'Premium Electrolux Microwave Service',
                'hero_subtitle' => 'Specialized technician support for Electrolux countertop and built-in premium microwave ovens across Kochi.',
                'intro_heading' => 'Expert Care for Electrolux Kitchen Appliances',
                'intro_paragraphs' => [
                    'Electrolux microwave ovens combine Scandinavian minimalist design with advanced culinary precision. Many homes across Kochi feature built-in Electrolux microwave-oven combos, which require careful cabinet handling, precise ventilation clearances, and specialized board diagnostics when repairs are needed.',
                    'Essentechs provides specialized maintenance for Electrolux appliances. Our technicians understand European electrical standards and calibrate electronic components with meticulous care.'
                ],
                'technologies' => [
                    'Built-in Flush Kitchen Cabinet Integration',
                    'SurroundCook Multi-Zone Air Circulation',
                    'Quick Defrost Inverter Algorithms',
                    'Child Safety Lock & Touch Interface',
                    'Precision Thermostat Heat Regulation'
                ],
                'common_problems' => [
                    [
                        'title' => 'Built-In Microwave Overheating and Shutting Down',
                        'symptom' => 'The oven runs for 4–5 minutes, shuts down completely, and will not restart until cooled.',
                        'cause' => 'Clogged ventilation ducts or failing exhaust cooling blower causing thermal cutoff trip.',
                        'solution' => 'Ventilation path de-dusting, blower motor lubrication, and high-temperature thermostat check.'
                    ],
                    [
                        'title' => 'Digital Clock & Display Fading or Glitching',
                        'symptom' => 'VFD or LED segments are dim, missing numbers, or flickering constantly.',
                        'cause' => 'Aging filter capacitors in the low-voltage section of the main power PCB.',
                        'solution' => 'PCB power rail refurbishing, capacitor replacement, and solder joint rejuvenation.'
                    ],
                    [
                        'title' => 'Intermittent Heating / Inconsistent Power Levels',
                        'symptom' => 'Low power heating works, but maximum heat setting fails to boil water.',
                        'cause' => 'Weakened magnetron cathode emission or drifting duty cycle relay.',
                        'solution' => 'Magnetron emission output test and power level relay replacement.'
                    ]
                ],
                'services_offered' => [
                    'Electrolux Built-In & Countertop Diagnostic Service',
                    'Exhaust Fan & Blower Motor Repair',
                    'Thermal Cutoff & Safety Limit Switch Replacement',
                    'Magnetron & High Voltage Circuit Servicing',
                    'Digital Clock Display & Relay PCB Repair'
                ],
                'supported_models' => [
                    'Electrolux Built-In Microwave Ovens',
                    'Electrolux Convection Microwave Range',
                    'Electrolux Grill & Solo Countertop Models'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair built-in Electrolux microwaves without damaging my cabinetry?',
                        'a' => 'Yes. Our technicians use protective trim removal tools and slides to extract built-in Electrolux appliances without scratching modular kitchen panels or surrounding woodwork.'
                    ],
                    [
                        'q' => 'Why does my Electrolux microwave shut off randomly after several minutes?',
                        'a' => 'This is typically the thermal safety protector triggering due to poor heat dissipation from a stalled cooling fan or restricted cabinet ventilation.'
                    ]
                ]
            ],

            'bosch' => [
                'name' => 'Bosch',
                'slug' => 'bosch',
                'meta_title' => 'Bosch Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'German-engineered Bosch microwave oven repair in Kochi by Essentechs. Specialized service for Series 2, 4, 6, and 8 built-in & freestanding microwaves.',
                'h1' => 'Bosch Microwave Oven Service & Repair',
                'badge' => 'Precision Bosch Appliance Service',
                'hero_subtitle' => 'Expert diagnostic and repair services for Bosch Series 2, Series 4, Series 6, and Series 8 microwave ovens in Kochi.',
                'intro_heading' => 'Engineered Precision for Bosch Microwave Ovens',
                'intro_paragraphs' => [
                    'Bosch appliances are world-renowned for German engineering rigor, sophisticated AutoPilot cooking programs, and seamless flush cabinetry design. Bosch Series 4, 6, and 8 microwaves feature delicate electronic sensors, rotary dial encoders, and inverter magnetrons that demand exact technical procedures.',
                    'Essentechs provides specialized troubleshooting for Bosch microwave ovens in Kochi. We treat your high-end appliance with the care it deserves, utilizing accurate diagnostic meters and OEM-grade replacement parts.'
                ],
                'technologies' => [
                    'AutoPilot Pre-set Cooking Automation',
                    'Rotary Control Ring & TFT Touch Display',
                    'Inverter Technology with 5 Power Levels',
                    'Stainless Steel Seamless Cavity with Ceramic Base',
                    'Left/Right Side Electronic Door Opening'
                ],
                'common_problems' => [
                    [
                        'title' => 'Electronic Push-to-Open Door Failure',
                        'symptom' => 'Touching the sensor button does not open the motorized door.',
                        'cause' => 'Faulty electronic door actuator motor, broken mechanical release link, or door sensor fault.',
                        'solution' => 'Actuator motor bench test, emergency release lever reset, and drive gear replacement.'
                    ],
                    [
                        'title' => 'Rotary Control Ring Slipping or Unresponsive',
                        'symptom' => 'Turning the center control ring does not change timer or temperature settings.',
                        'cause' => 'Magnetic sensor ring misalignment or debris accumulation under the rotating bezel.',
                        'solution' => 'Control fascia cleaning, magnetic sensor alignment, and encoder board servicing.'
                    ],
                    [
                        'title' => 'E011 or E-code Errors on TFT Screen',
                        'symptom' => 'Appliance beeps and locks with error code indicating a stuck key or sensor anomaly.',
                        'cause' => 'Capacitive touch panel moisture entrapment or control board communication fault.',
                        'solution' => 'Disassembly, drying, terminal pin inspection, and control firmware reset.'
                    ]
                ],
                'services_offered' => [
                    'Bosch Series 4, 6 & 8 Built-in Microwave Repair',
                    'Motorized Door Actuator & Latch Mechanism Repair',
                    'Rotary Control Dial & Touch Screen Service',
                    'High Frequency Inverter Board & Magnetron Replacement',
                    'AutoPilot Sensor & Thermal Overload Testing'
                ],
                'supported_models' => [
                    'Bosch Series 2 Freestanding Microwaves',
                    'Bosch Series 4 & 6 Built-In Microwaves (BFL / BEL Series)',
                    'Bosch Series 8 AccentLine Premium Microwave Ovens'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you service Bosch built-in microwave ovens at home?',
                        'a' => 'Yes. Our technicians visit your residence in Kochi, extract the oven safely from the cabinet, diagnose and perform repairs on-site whenever possible.'
                    ],
                    [
                        'q' => 'What causes the electronic door on a Bosch microwave to stop opening?',
                        'a' => 'Bosch Series 6 and 8 use a solenoid or micro-motor actuator instead of a physical push latch. If the motor fails or the control board micro-switch sticks, the door will not open electronically. We carry manual override tools and replacement actuators.'
                    ]
                ]
            ],

            'godrej' => [
                'name' => 'Godrej',
                'slug' => 'godrej',
                'meta_title' => 'Godrej Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Fast and affordable Godrej microwave oven service in Kochi by Essentechs. Repairing InstaCook convection ovens, magnetrons, heating elements, and turntables.',
                'h1' => 'Godrej Microwave Oven Service & Repair',
                'badge' => 'Affordable Godrej Microwave Care',
                'hero_subtitle' => 'Reliable doorstep repair for Godrej InstaCook, convection, grill, and solo microwave ovens in Kochi and Ernakulam.',
                'intro_heading' => 'Trusted Doorstep Service for Godrej Microwaves',
                'intro_paragraphs' => [
                    'Godrej microwave ovens are popular in Indian households for their InstaCook menus, energy efficiency, and value-packed performance. However, regular culinary use with oily residues and voltage fluctuations can cause magnetron wear, door switch failure, or turntable motor burnout.',
                    'Essentechs offers quick, budget-friendly repair solutions for all Godrej microwave models in Kochi. Our technicians arrive with the right tools to fix the problem promptly on the first visit.'
                ],
                'technologies' => [
                    'InstaCook Multi-Cuisine Auto Menus',
                    'Stainless Steel Multi-Reflection Cavities',
                    'Dual Quartz Heaters for High-Heat Grilling',
                    'Child Lock & Voltage Surge Protection',
                    'Fermentation & Oil-Free Healthy Cooking'
                ],
                'common_problems' => [
                    [
                        'title' => 'Microwave Heating Shuts Down in 10 Seconds',
                        'symptom' => 'Unit starts humming, heats for a few seconds, then shuts off automatically.',
                        'cause' => 'Defective cooling fan motor causing the thermal sensor to trigger an emergency shutdown.',
                        'solution' => 'Fan motor winding inspection, thermal sensor test, and cooling fan replacement.'
                    ],
                    [
                        'title' => 'Food Smells or Tastes Metallic / Sparks Inside',
                        'symptom' => 'Sparks jump from the cavity walls accompanied by a strong metallic odor.',
                        'cause' => 'Mica waveguide sheet saturated with food splatters and carbonizing under microwave exposure.',
                        'solution' => 'Waveguide channel cleaning, cavity touch-up, and fresh mica shield replacement.'
                    ],
                    [
                        'title' => 'Turntable Plate Does Not Rotate',
                        'symptom' => 'Food heats unevenly because the glass platter stays stationary.',
                        'cause' => 'Burnt-out synchronous motor coils or broken center plastic drive coupler.',
                        'solution' => 'Coupler replacement and synchronous drive motor installation.'
                    ]
                ],
                'services_offered' => [
                    'Godrej InstaCook Heating Element Replacement',
                    'Magnetron Diagnostic & High Voltage Testing',
                    'Keypad Membrane & Rotary Knob Repair',
                    'Waveguide Mica Sheet & Anti-Spark Restoration',
                    'Cooling Fan & Turntable Motor Replacement'
                ],
                'supported_models' => [
                    'Godrej InstaCook Convection Microwaves (23L - 34L)',
                    'Godrej Grill Microwaves (GMX Series)',
                    'Godrej Solo Energy-Saver Microwaves'
                ],
                'faqs' => [
                    [
                        'q' => 'Is it worth repairing a Godrej microwave oven?',
                        'a' => 'In most cases, yes! Common issues such as a blown diode, burnt mica sheet, or failed turntable motor cost only a fraction of buying a new microwave and can restore the oven to years of reliable service.'
                    ],
                    [
                        'q' => 'Why are sparks flying inside my Godrej microwave?',
                        'a' => 'Internal sparks are almost always caused by food grease accumulated on the mica waveguide cover on the right side of the cavity. We replace this inexpensive protective cover and clean the cavity to make it completely safe.'
                    ]
                ]
            ],

            'onida' => [
                'name' => 'Onida',
                'slug' => 'onida',
                'meta_title' => 'Onida Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Prompt Onida microwave oven service in Kochi by Essentechs. Repairing Power Grill, Black Beauty, and convection microwave ovens at affordable prices.',
                'h1' => 'Onida Microwave Oven Service & Repair',
                'badge' => 'Dependable Onida Microwave Repair',
                'hero_subtitle' => 'Cost-effective, reliable repairs for Onida convection, grill, and solo microwave ovens across Kochi.',
                'intro_heading' => 'Practical Solutions for Onida Microwave Ovens',
                'intro_paragraphs' => [
                    'Onida microwave ovens, including the Black Beauty and Power Grill series, are known for their sturdy construction and customized Indian cooking presets. As appliances age, mechanical door latch wear, thermal fuse failure, and magnetron emission drops are common symptoms.',
                    'Essentechs provides experienced doorstep technicians across Kochi to diagnose and repair Onida microwaves quickly with genuine, compatible replacement components.'
                ],
                'technologies' => [
                    'Calorie Meter & Auto-Cook Menus',
                    'Power Grill High-Efficiency Elements',
                    'Jog Dial & Tact Switch Control Interfaces',
                    'Quick Defrost & Multistage Memory'
                ],
                'common_problems' => [
                    [
                        'title' => 'No Heat but Light and Fan Running',
                        'symptom' => 'Interior light glows, fan spins, but coffee/milk stays cold.',
                        'cause' => 'High-voltage diode short or blown magnetron filament.',
                        'solution' => 'HV capacitor discharge, diode test, and magnetron replacement.'
                    ],
                    [
                        'title' => 'Jog Dial Skipping Timer Settings',
                        'symptom' => 'Turning the dial jumps the timer erratically instead of smooth increments.',
                        'cause' => 'Oxidized rotary encoder contacts on the front control panel.',
                        'solution' => 'Encoder cleaning with electronic contact cleaner or PCB encoder replacement.'
                    ]
                ],
                'services_offered' => [
                    'Onida Magnetron & HV Diode Replacement',
                    'Door Switch & Interlock Safety Mechanism Repair',
                    'Jog Dial & Push Button Panel Overhaul',
                    'Turntable Motor & Drive Gear Service'
                ],
                'supported_models' => [
                    'Onida Black Beauty Series',
                    'Onida Power Grill & Convection Models (20L - 28L)',
                    'Onida Classic Solo Microwaves'
                ],
                'faqs' => [
                    [
                        'q' => 'How can I tell if my Onida magnetron is dead?',
                        'a' => 'If the microwave runs normally with the light and turntable operating, but food placed inside for 2 minutes remains completely cold without any warmth, the magnetron or its high-voltage circuit has failed.'
                    ]
                ]
            ],

            'whirlpool' => [
                'name' => 'Whirlpool',
                'slug' => 'whirlpool',
                'meta_title' => 'Whirlpool Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Expert Whirlpool microwave oven repair in Kochi by Essentechs. Servicing Magicook, 6th Sense, convection, and grill microwave ovens with original parts.',
                'h1' => 'Whirlpool Microwave Oven Service & Repair',
                'badge' => 'Whirlpool Microwave Care Specialists',
                'hero_subtitle' => 'Professional repair and servicing for Whirlpool Magicook, 6th Sense, Jet Chef, and standard countertop microwaves in Kochi.',
                'intro_heading' => 'Advanced Care for Whirlpool 6th Sense Microwaves',
                'intro_paragraphs' => [
                    'Whirlpool microwave ovens, featuring Magicook technology and 6th Sense weight-and-steam sensors, are built for versatile kitchen tasks. The integration of quartz grill elements, inverter controls, and precision baking cycles requires systematic electrical diagnostics when faults appear.',
                    'Essentechs brings reliable diagnostic tools and skilled appliance technicians to your home in Kochi to repair Whirlpool microwaves swiftly and safely.'
                ],
                'technologies' => [
                    '6th Sense Intelligent Weight & Steam Sensing',
                    'Magicook Auto-Recipe Menus with Crisp Technology',
                    'Quartz Grill Rapid-Heat Elements',
                    'Feather Touch Membrane Control Panels',
                    'Zero-Oil Tandoor Cooking Cycles'
                ],
                'common_problems' => [
                    [
                        'title' => 'Display Showing Err2 or Err3 Code',
                        'symptom' => 'Microwave beeps and refuses to start with an Err code on the LCD.',
                        'cause' => 'Humidity or thermistor sensor open-circuit or control board sensor line error.',
                        'solution' => 'Thermistor sensor calibration, connector cleaning, and sensor replacement.'
                    ],
                    [
                        'title' => 'Feather Touch Buttons Not Working After Cleaning',
                        'symptom' => 'Wiping the front glass caused buttons to lock up or register ghost touches.',
                        'cause' => 'Moisture trapped behind capacitive touch foil or shorted membrane contacts.',
                        'solution' => 'Fascia drying, anti-static cleaning, and capacitive foil resealing.'
                    ],
                    [
                        'title' => 'Magicook Crisp Plate Not Heating Properly',
                        'symptom' => 'Crisping plate fails to brown the bottom of pizza or snacks.',
                        'cause' => 'Failing bottom grill quartz element or defective lower relay on power board.',
                        'solution' => 'Bottom heater continuity testing and power relay replacement.'
                    ]
                ],
                'services_offered' => [
                    'Whirlpool 6th Sense Sensor Diagnostics',
                    'Magicook Convection & Quartz Grill Repair',
                    'Touch Membrane & Display Panel Servicing',
                    'Magnetron & HV Power Supply Component Replacement',
                    'Door Safety Latch & Motor Mechanism Tuning'
                ],
                'supported_models' => [
                    'Whirlpool Magicook Convection Series (25L - 30L)',
                    'Whirlpool 6th Sense Crisp & Steam Models',
                    'Whirlpool Jet Chef Premium Multi-Ovens',
                    'Whirlpool Solo & Grill Entry-Level Units'
                ],
                'faqs' => [
                    [
                        'q' => 'Why did my Whirlpool touch panel stop working after wiping it?',
                        'a' => 'Moisture from wet cleaning cloths can seep into the micro-gaps around capacitive touch buttons, causing short circuits. Our technicians carefully disassemble the front panel to dry and clean the membrane tracks.'
                    ],
                    [
                        'q' => 'Can you replace the high-voltage diode in Whirlpool microwaves on-site?',
                        'a' => 'Yes. Our mobile repair kits contain safety-rated high-voltage diodes, capacitors, and fuses for immediate on-site replacement.'
                    ]
                ]
            ],

            'panasonic' => [
                'name' => 'Panasonic',
                'slug' => 'panasonic',
                'meta_title' => 'Panasonic Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Precision Panasonic microwave oven repair in Kochi by Essentechs. Experts in Inverter technology, Cyclonic Inverter, and convection microwave servicing.',
                'h1' => 'Panasonic Microwave Oven Service & Repair',
                'badge' => 'Panasonic Inverter Microwave Experts',
                'hero_subtitle' => 'High-precision troubleshooting and component repair for Panasonic Inverter, Cyclonic, and conventional microwave ovens in Kochi.',
                'intro_heading' => 'Pioneers of Inverter Microwave Technology',
                'intro_paragraphs' => [
                    'Panasonic is the global pioneer of Inverter microwave technology, replacing traditional transformers with lightweight solid-state inverter power boards that deliver constant linear power rather than pulse cycles. This provides superior defrosting and uniform reheating, but requires specialized expertise when inverter boards or 2M261 magnetrons fail.',
                    'Essentechs technicians are trained in the nuances of Panasonic inverter circuit boards, cyclonic wave delivery, and Genius Sensor diagnostics across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Patented Panasonic Inverter Power Module',
                    'Cyclonic Inverter 3D Energy Circulation',
                    'Genius Sensor One-Touch Cooking Microcontrollers',
                    'Flatbed (No Turntable) Cavity Architecture',
                    'Turbo Defrost Accelerated Thawing Cycles'
                ],
                'common_problems' => [
                    [
                        'title' => 'Microwave Runs for 3 Seconds and Shuts Off (H97 / H98 Error)',
                        'symptom' => 'Oven starts, hums for 3 to 23 seconds, stops, and displays H97 or H98 error.',
                        'cause' => 'Inverter board power transistor failure or magnetron cathode open circuit.',
                        'solution' => 'Inverter board component-level repair or replacement alongside magnetron load test.'
                    ],
                    [
                        'title' => 'Flatbed Cavity Base Heating Unevenly',
                        'symptom' => 'Food placed on the flat ceramic base heats only on one side.',
                        'cause' => 'Stirrer motor or antenna under the ceramic floor has stopped revolving.',
                        'solution' => 'Under-cavity inspection, RF rotating antenna realignment, and stirrer motor renewal.'
                    ],
                    [
                        'title' => 'Genius Sensor Overcooking / Burning Food',
                        'symptom' => 'Sensor reheat modes overheat food into boiling without shutting off automatically.',
                        'cause' => 'Steam sensor thermopile clogged with grease fumes or defective sensor PCB.',
                        'solution' => 'Sensor chamber cleaning, exhaust duct wash, and humidity sensor replacement.'
                    ]
                ],
                'services_offered' => [
                    'Panasonic Inverter PCB & Magnetron Overhaul',
                    'H97 / H98 Error Code Resolution',
                    'Flatbed Stirrer Motor & RF Antenna Servicing',
                    'Genius Sensor Steam Probe Replacement',
                    'Door Interlock Switch Micro-Assembly Tuning'
                ],
                'supported_models' => [
                    'Panasonic Inverter Convection Ovens (NN-CD674, NN-CT65, etc.)',
                    'Panasonic Cyclonic Inverter Microwave Series',
                    'Panasonic Flatbed (Turntable-Free) Microwaves',
                    'Panasonic Solo & Grill Compact Kitchen Units'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code H97 or H98 mean on a Panasonic microwave?',
                        'a' => 'H97/H98 is a classic Panasonic inverter error. It indicates the control board is not receiving the expected high-voltage feedback signal from the inverter power supply or the magnetron is drawing excessive current. Essentechs specializes in resolving this exact fault.'
                    ],
                    [
                        'q' => 'Can flatbed Panasonic microwaves with no turntable be repaired?',
                        'a' => 'Yes. Instead of a rotating tray, flatbed microwaves use a motorized rotating antenna hidden underneath the ceramic floor. If your flatbed heats unevenly, we service or replace that motorized stirrer mechanism.'
                    ]
                ]
            ],

            'videocon' => [
                'name' => 'Videocon',
                'slug' => 'videocon',
                'meta_title' => 'Videocon Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Fast, affordable Videocon microwave oven repair in Kochi by Essentechs. Servicing classic grill and convection models with dependable parts.',
                'h1' => 'Videocon Microwave Oven Service & Repair',
                'badge' => 'Reliable Videocon Microwave Support',
                'hero_subtitle' => 'Economical and prompt doorstep service for Videocon solo, grill, and convection microwave ovens in Kochi.',
                'intro_heading' => 'Dependable Service for Videocon Microwave Ovens',
                'intro_paragraphs' => [
                    'Videocon microwave ovens were built with robust mechanical components that remain in use in many households. When experiencing component aging, issues like worn door switches, diode burnout, or turntable coupler slippage are easily repairable.',
                    'Essentechs provides cost-effective repairs for Videocon microwave owners, extending the operating life of your trusty appliance without requiring premature replacement.'
                ],
                'technologies' => [
                    'Heavy-Duty Step-Down High Voltage Transformer',
                    'Mechanical & Electronic Dual Timer Interface',
                    'Direct-Drive Turntable System',
                    'Multi-Level Browning Quartz Heaters'
                ],
                'common_problems' => [
                    [
                        'title' => 'Blown Main Power Fuse When Door Shuts',
                        'symptom' => 'Closing the microwave door triggers a sudden pop and trips power.',
                        'cause' => 'Misaligned door monitor switch shorting to ground during closure.',
                        'solution' => 'Door switch bracket realignment and replacement of the blown safety fuse.'
                    ],
                    [
                        'title' => 'Turntable Roller Ring Flat Spots',
                        'symptom' => 'Clicking sound each rotation accompanied by uneven turntable travel.',
                        'cause' => 'Plastic wheels worn down due to heavy cookware weight.',
                        'solution' => 'Installation of high-durability universal roller ring assembly.'
                    ]
                ],
                'services_offered' => [
                    'Videocon Door Interlock Bracket Calibration',
                    'High Voltage Capacitor & Diode Testing',
                    'Turntable Motor & Roller Ring Replacement',
                    'Waveguide Cover & Cavity Cleaning'
                ],
                'supported_models' => [
                    'Videocon Convection Microwave Ovens',
                    'Videocon Grill & Solo Appliances'
                ],
                'faqs' => [
                    [
                        'q' => 'Are spare parts still available for Videocon microwave ovens?',
                        'a' => 'Yes! The high-voltage circuits, magnetrons, diodes, switches, and turntable motors in Videocon microwaves follow standard industrial specifications that our technicians carry in stock.'
                    ]
                ]
            ],

            'sanyo' => [
                'name' => 'Sanyo',
                'slug' => 'sanyo',
                'meta_title' => 'Sanyo Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Dedicated Sanyo microwave oven repair in Kochi by Essentechs. Fast resolution for heating failures, timer issues, and electrical faults.',
                'h1' => 'Sanyo Microwave Oven Service & Repair',
                'badge' => 'Sanyo Microwave Service Specialists',
                'hero_subtitle' => 'Quality diagnostic and repair solutions for Sanyo microwave ovens throughout Kochi and Ernakulam.',
                'intro_heading' => 'Expert Repairs for Sanyo Microwave Appliances',
                'intro_paragraphs' => [
                    'Sanyo appliances feature classic Japanese design principles focused on durable materials and reliable cooking cycles. While long-lasting, heavy kitchen usage over years can lead to capacitor leakage, heating element fatigue, or door switch misalignments.',
                    'Essentechs offers comprehensive diagnostic and restorative repairs for Sanyo microwave ovens in Kochi, ensuring safe operation and optimal heating efficiency.'
                ],
                'technologies' => [
                    'Multi-Mode Microwave Heating',
                    'High-Reliability Rotary Mechanism',
                    'Reinforced Cavity Shielding',
                    'Auto-Defrost Programming'
                ],
                'common_problems' => [
                    [
                        'title' => 'Cavity Light Works but Fan and Heating Dead',
                        'symptom' => 'The bulb turns on when opening the door, but pressing start does nothing.',
                        'cause' => 'Primary interlock switch failure or secondary relay coil failure on PCB.',
                        'solution' => 'Micro-switch replacement and relay coil voltage verification.'
                    ],
                    [
                        'title' => 'Excessive Vibration During Heating',
                        'symptom' => 'Entire outer cabinet rattles loudly while operating.',
                        'cause' => 'Loose transformer mounting screws or bent fan blade.',
                        'solution' => 'Chassis dampener tightening and fan blade balancing.'
                    ]
                ],
                'services_offered' => [
                    'Sanyo Magnetron Diagnostic & Replacement',
                    'Door Interlock Switch Repair',
                    'Power Relay PCB Solder Servicing',
                    'Cavity Inspection & Spark Prevention'
                ],
                'supported_models' => [
                    'Sanyo Solo & Grill Countertop Microwaves',
                    'Sanyo Convection Multi-Mode Ovens'
                ],
                'faqs' => [
                    [
                        'q' => 'Is it safe to use a microwave that makes a loud humming sound?',
                        'a' => 'A slight low hum is normal, but a loud, strained buzzing often indicates that the high-voltage diode is shorted or the transformer is under excessive load. You should discontinue use and have Essentechs inspect it.'
                    ]
                ]
            ],

            'siemens' => [
                'name' => 'Siemens',
                'slug' => 'siemens',
                'meta_title' => 'Siemens Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Expert Siemens built-in & freestanding microwave oven repair in Kochi by Essentechs. Servicing iQ300, iQ500, and iQ700 models with premium care.',
                'h1' => 'Siemens Microwave Oven Service & Repair',
                'badge' => 'Siemens Built-In Microwave Care',
                'hero_subtitle' => 'Precision troubleshooting and component repair for Siemens iQ300, iQ500, and iQ700 built-in kitchen microwave ovens in Kochi.',
                'intro_heading' => 'Sophisticated Diagnostics for Siemens Built-In Microwaves',
                'intro_paragraphs' => [
                    'Siemens iQ-series built-in microwave ovens represent the peak of modern kitchen luxury, featuring cookControl Plus automation, TFT touch displays, and flush motorized door architecture. Troubleshooting these high-precision German appliances requires specialized technical knowledge to avoid damage to expensive electronic modules.',
                    'Essentechs provides specialized on-site repair for Siemens microwave ovens in Kochi. Our engineers handle built-in cabinetry safely and calibrate sensors and inverter components to original factory specifications.'
                ],
                'technologies' => [
                    'Siemens cookControl Plus Intelligent Automation',
                    'TFT Touchdisplay Plus & Rotary Interface',
                    'Inverter Technology with Graduated Wattage',
                    'Side-Opening Hinged Electronic Doors',
                    'LED Multi-Point Cavity Illumination'
                ],
                'common_problems' => [
                    [
                        'title' => 'Motorized Side Door Not Unlatching',
                        'symptom' => 'Touching the open icon sounds a chime, but the door latch fails to release.',
                        'cause' => 'Solenoid release coil burned out or latch hook caught in micro-switch cradle.',
                        'solution' => 'Safe manual extraction, solenoid replacement, and latch micro-switch recalibration.'
                    ],
                    [
                        'title' => 'TFT Display Frozen or Black Screen',
                        'symptom' => 'Control panel remains dark while the interior light turns on.',
                        'cause' => 'Defective switched-mode power supply (SMPS) secondary rail on main processor board.',
                        'solution' => 'Component-level SMPS repair, voltage regulator replacement, and firmware reboot.'
                    ],
                    [
                        'title' => 'Inverter Magnetron Weak Emission',
                        'symptom' => 'Water takes three times longer than normal to reach boiling temperature.',
                        'cause' => 'Aging cathode filament on the inverter magnetron tube.',
                        'solution' => 'Magnetron emission output test and OEM-grade inverter magnetron installation.'
                    ]
                ],
                'services_offered' => [
                    'Siemens iQ300, iQ500 & iQ700 Built-In Diagnostics',
                    'Electronic Door Latch & Solenoid Servicing',
                    'TFT Display & cookControl PCB Module Repair',
                    'Inverter Power Board & Magnetron Replacement',
                    'Cabinet Removal & Re-installation Without Scratches'
                ],
                'supported_models' => [
                    'Siemens iQ300 Compact Microwave Ovens',
                    'Siemens iQ500 Built-In Microwave & Grill Units',
                    'Siemens iQ700 StudioLine Premium Multi-Ovens'
                ],
                'faqs' => [
                    [
                        'q' => 'Do you have experience with Siemens built-in microwaves in Kochi?',
                        'a' => 'Yes. Our senior technicians have handled numerous high-end European built-in installations in luxury apartments across Kochi and Kakkanad, providing seamless on-site diagnostics.'
                    ],
                    [
                        'q' => 'How can a stuck Siemens microwave door be opened in an emergency?',
                        'a' => 'Siemens built-in ovens feature a concealed manual emergency latch accessible from the bottom edge. Our technicians can assist you safely without damaging the glass front.'
                    ]
                ]
            ],

            'prestige' => [
                'name' => 'Prestige',
                'slug' => 'prestige',
                'meta_title' => 'Prestige Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Fast Prestige microwave oven repair in Kochi by Essentechs. Quality service for solo, grill, and convection microwaves with doorstep support.',
                'h1' => 'Prestige Microwave Oven Service & Repair',
                'badge' => 'Affordable Prestige Microwave Repair',
                'hero_subtitle' => 'Reliable, cost-effective doorstep repairs for Prestige microwave ovens across Kochi and Ernakulam.',
                'intro_heading' => 'Practical Kitchen Repairs for Prestige Microwaves',
                'intro_paragraphs' => [
                    'Prestige is a staple brand in Indian kitchens, offering value-focused microwave ovens with presets for daily Indian meals. When issues like turntable stops, loss of heating, or keyboard malfunctions occur, prompt local repair restores your daily cooking routine.',
                    'Essentechs provides swift doorstep servicing for Prestige microwave ovens in Kochi, utilizing reliable parts to keep repair costs economical.'
                ],
                'technologies' => [
                    'Indian Cooking Auto Menus',
                    'Mechanical & Tactile Button Layouts',
                    'Defrost by Weight / Time Settings',
                    'Multi-Stage Cooking Sequences'
                ],
                'common_problems' => [
                    [
                        'title' => 'Microwave Starts by Itself When Plugged In',
                        'symptom' => 'Fan and turntable start immediately upon plugging into wall outlet.',
                        'cause' => 'Welded relay contacts on the main board or shorted door switch.',
                        'solution' => 'Main PCB relay de-soldering and replacement with heavy-duty contacts.'
                    ],
                    [
                        'title' => 'Glass Turntable Plate Slipping',
                        'symptom' => 'Motor shaft turns underneath, but glass tray fails to rotate with dishes.',
                        'cause' => 'Cracked drive coupler teeth failing to grip the glass tray lugs.',
                        'solution' => 'Direct replacement of the center drive bushing coupler.'
                    ]
                ],
                'services_offered' => [
                    'Prestige Magnetron & HV Diode Servicing',
                    'Relay Board Replacement & Repair',
                    'Door Interlock Switch Alignment',
                    'Turntable Motor & Drive Bushing Replacement'
                ],
                'supported_models' => [
                    'Prestige Convection Microwave Ovens (PMC Series)',
                    'Prestige Grill & Solo Everyday Microwaves'
                ],
                'faqs' => [
                    [
                        'q' => 'Why does my Prestige microwave turn on as soon as I plug it in?',
                        'a' => 'This dangerous symptom occurs when a power relay on the control board gets welded in the closed position due to electrical arcing. Disconnect the wall plug immediately and call Essentechs for a relay replacement.'
                    ]
                ]
            ],

            'haier' => [
                'name' => 'Haier',
                'slug' => 'haier',
                'meta_title' => 'Haier Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Reliable Haier microwave oven service in Kochi by Essentechs. Repairing convection, grill, and solo models with quick turnaround.',
                'h1' => 'Haier Microwave Oven Service & Repair',
                'badge' => 'Certified Haier Microwave Care',
                'hero_subtitle' => 'Professional diagnostics and repair for Haier solo, grill, and convection microwave ovens in Kochi.',
                'intro_heading' => 'Efficient Service for Haier Microwave Ovens',
                'intro_paragraphs' => [
                    'Haier microwave ovens offer smart pre-programmed recipes, stainless steel cavities, and reliable cooking features. With extensive heating cycles, magnetron diodes, cooling blowers, or touch membrane keys may wear out over time.',
                    'Essentechs offers fast, transparent diagnostic visits and repair services for Haier microwave ovens throughout Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Haier Multi-Stage Cooking Control',
                    'Low-Noise Exhaust Ventilation System',
                    'Auto-Cook Indian Regional Menus',
                    'Child Lock & Thermal Safety Protectors'
                ],
                'common_problems' => [
                    [
                        'title' => 'Burning Smell from Rear Cooling Vents',
                        'symptom' => 'A distinct plastic or electrical burning odor emanates from rear vents.',
                        'cause' => 'Accumulated grease dust on cooling fan motor windings or deteriorating transformer varnish.',
                        'solution' => 'Complete internal chassis cleaning, motor overhaul, and transformer isolation test.'
                    ],
                    [
                        'title' => 'Keypad Beeps but Oven Does Not Start',
                        'symptom' => 'Time can be entered and buttons beep, but pressing Start has no effect.',
                        'cause' => 'Secondary door safety interlock switch not closing properly.',
                        'solution' => 'Door switch bracket tightening and micro-switch replacement.'
                    ]
                ],
                'services_offered' => [
                    'Haier Magnetron & Transformer Testing',
                    'Door Safety Interlock Calibration',
                    'Cooling Blower & Vent Cleaning',
                    'Keypad Circuit & Relay Board Servicing'
                ],
                'supported_models' => [
                    'Haier Convection Ovens (HIL Series)',
                    'Haier Grill & Solo Microwave Range'
                ],
                'faqs' => [
                    [
                        'q' => 'Can Essentechs fix a Haier microwave that beeps but will not start heating?',
                        'a' => 'Yes. That symptom almost always points to an open door interlock switch that signals the microcomputer that the door is still ajar for safety. We replace the faulty switch at your home.'
                    ]
                ]
            ],

            'morphy-richards' => [
                'name' => 'Morphy Richards',
                'slug' => 'morphy-richards',
                'meta_title' => 'Morphy Richards Microwave Oven Service & Repair | Essentechs',
                'meta_description' => 'Expert Morphy Richards microwave oven service in Kochi by Essentechs. Servicing Europa, Salute, and convection models with precision.',
                'h1' => 'Morphy Richards Microwave Oven Service & Repair',
                'badge' => 'Morphy Richards Specialists',
                'hero_subtitle' => 'Comprehensive repair and maintenance for Morphy Richards convection, grill, and solo microwave ovens in Kochi.',
                'intro_heading' => 'Restoring Morphy Richards Microwave Ovens',
                'intro_paragraphs' => [
                    'Morphy Richards microwave ovens, such as the Europa and Salute series, are beloved for their mirror-glass doors, tactile jog controls, and powerful convection baking. High-temperature baking cycles can eventually fatigue convection fan motors, quartz elements, and thermal fuses.',
                    'Essentechs provides skilled technician visits across Kochi to service Morphy Richards microwave ovens, restoring crisp baking and fast microwave reheating performance.'
                ],
                'technologies' => [
                    'Mirror-Finish Glass Door Architecture',
                    'Convection Turbo-Fan Heat Circulation',
                    'Multi-Stage Memory Cooking Cycles',
                    'Rotary Dial & Tactile Control Interfaces'
                ],
                'common_problems' => [
                    [
                        'title' => 'Baking Cycle Smokes and Does Not Heat Evenly',
                        'symptom' => 'Convection baking produces smoke without rising or browning food.',
                        'cause' => 'Convection heating element grease saturation or fan motor bearing seizure.',
                        'solution' => 'Convection assembly cleaning, bearing lubrication, and element resistance testing.'
                    ],
                    [
                        'title' => 'Mirror Door Latch Loose or Misaligned',
                        'symptom' => 'Door requires lifting to latch properly into place.',
                        'cause' => 'Hinge pin wear or fatigued door hook spring.',
                        'solution' => 'Hinge realignment and latch hook spring replacement.'
                    ]
                ],
                'services_offered' => [
                    'Morphy Richards Convection Fan & Heater Repair',
                    'Mirror Glass Door & Hinge Alignment',
                    'Jog Dial & PCB Controller Overhaul',
                    'Magnetron & High Voltage Circuit Servicing'
                ],
                'supported_models' => [
                    'Morphy Richards Europa Series (20L - 25L)',
                    'Morphy Richards Salute & Digit Convection Ovens',
                    'Morphy Richards MWO Solo Series'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is my Morphy Richards convection microwave smoking when baking?',
                        'a' => 'Convection elements operate at high temperatures. If food oils have splashed onto the heating coils or the convection fan is stalling, smoke will build up inside. We thoroughly service and clean the heating assembly.'
                    ]
                ]
            ],
        ];
    }

    /**
     * Get all AC brands data
     */
    public static function getAcBrands(): array
    {
        return [
            'hitachi' => [
                'name' => 'Hitachi',
                'slug' => 'hitachi',
                'meta_title' => 'Hitachi AC Service & Repair | Essentechs',
                'meta_description' => 'Expert Hitachi AC repair and service in Kochi by Essentechs. Fast resolution for Expandable Inverter faults, cooling loss, gas leaks, and sensor error codes.',
                'h1' => 'Hitachi AC Service & Repair',
                'badge' => 'Specialized Hitachi AC Support',
                'hero_subtitle' => 'Reliable diagnostic, repair, gas charging, and routine maintenance solutions for Hitachi split and window air conditioners across Kochi.',
                'intro_heading' => 'Precision Repairs for Hitachi Expandable Inverter ACs',
                'intro_paragraphs' => [
                    'Hitachi air conditioners are celebrated for their tropical performance, Expandable Inverter technology, and auto-coil cleaning mechanisms (FrostWash™). Engineered to withstand extreme tropical temperatures, these precision cooling systems rely on multi-sensor communication between indoor and outdoor inverter PCB modules.',
                    'Essentechs provides specialized on-site diagnostic and repair services for Hitachi AC owners across Kochi and Ernakulam. Our technicians use digital manifold gauges, nitrogen pressure testing, and advanced inverter motor testers to troubleshoot cooling failures, compressor trips, and refrigerant leaks cleanly.'
                ],
                'technologies' => [
                    'Expandable Inverter Variable Tonnage Technology',
                    'FrostWash™ Automatic Evaporator Deep Clean',
                    '100% Inner Grooved Copper Condenser Coils',
                    'Tropical Dual Rotary Compressor Support',
                    'Kaimin Sleep Mode & Microcontroller Sensor Logic'
                ],
                'common_problems' => [
                    [
                        'title' => 'Hitachi AC Not Cooling / Slow Cooling',
                        'symptom' => 'AC blower runs at high speed, but the air coming out is barely cool.',
                        'cause' => 'Refrigerant (R32 / R410A) pinhole leak at the condenser U-bends or dust-choked evaporator fins.',
                        'solution' => 'Nitrogen leak testing, brazing of pinhole leaks, high-pressure jet cleaning, and digital gas charging.'
                    ],
                    [
                        'title' => 'Timer / Defrost Indicator Blinking (Error Codes)',
                        'symptom' => 'The timer LED flashes in a specific sequence (e.g., 3 blinks or 4 blinks) and cooling stops.',
                        'cause' => 'Communication error between indoor and outdoor PCBs, or open ambient room thermistor sensor.',
                        'solution' => 'PCB communication signal diagnostic, thermistor resistance calibration, or IPM inverter board repair.'
                    ],
                    [
                        'title' => 'Water Leaking from Indoor Blower Unit',
                        'symptom' => 'Water droplets overflow from the front casing or drip down the bedroom wall.',
                        'cause' => 'Algae and slime clogging the condensate drain tray or drain pipe slope sag.',
                        'solution' => 'High-pressure condensate drain flush, drain tray anti-bacterial treatment, and pipe re-pitching.'
                    ],
                    [
                        'title' => 'Loud Noise or Vibration from Outdoor Unit',
                        'symptom' => 'A heavy rattling or humming noise starts when the outdoor compressor engages.',
                        'cause' => 'Worn compressor rubber isolation grommets or bent condenser fan motor blade.',
                        'solution' => 'Vibration dampener replacement, condenser fan realignment, and motor shaft lubrication.'
                    ]
                ],
                'services_offered' => [
                    'Hitachi Inverter PCB Circuit Diagnostics & Repair',
                    'R32 & R410A Gas Leak Detection & Precision Refilling',
                    'High-Pressure Jet Deep Cleaning of Coils & Blower',
                    'Outdoor Compressor Starting Relay & Capacitor Servicing',
                    'Indoor Blower Fan Motor & Bearing Replacement',
                    'Complete Split AC Dismantling & Shifting Support'
                ],
                'supported_models' => [
                    'Hitachi Toushi & Yoshi Expandable Inverter Series',
                    'Hitachi FrostWash™ 3-Star & 5-Star Split ACs',
                    'Hitachi Summer & Shizuka Inverter Models',
                    'Hitachi Window Air Conditioners (1.0T - 2.0T)',
                    'Hitachi Cassette & Commercial Light Ductable Systems'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is the timer light blinking on my Hitachi AC?',
                        'a' => 'A blinking timer light on a Hitachi AC is a diagnostic error code. The number of flashes indicates whether the issue is a sensor failure, an outdoor fan motor stall, or an inverter compressor communication fault. Our technicians carry error code decoders to isolate the problem immediately.'
                    ],
                    [
                        'q' => 'How often should a Hitachi inverter AC be serviced in Kochi?',
                        'a' => 'Due to Kochi’s coastal humidity and airborne salinity, we recommend a routine filter clean every 4–6 weeks and a professional high-pressure jet service every 4–6 months to prevent copper coil corrosion and ensure peak energy efficiency.'
                    ],
                    [
                        'q' => 'Does Essentechs provide genuine refrigerant refilling for Hitachi ACs?',
                        'a' => 'Yes. We only use pure, virgin R32 and R410A refrigerants with calibrated digital scales and vacuum evacuation to ensure manufacturer-specified pressure levels and avoid compressor burnout.'
                    ],
                    [
                        'q' => 'Can you repair Hitachi AC outdoor PCB boards on-site?',
                        'a' => 'Our technicians test the outdoor board, IPM transistors, and fuse protections on-site. If micro-soldering is required, we provide quick bench repairs with minimal turnaround time.'
                    ]
                ]
            ],

            'carrier' => [
                'name' => 'Carrier',
                'slug' => 'carrier',
                'meta_title' => 'Carrier AC Service & Repair | Essentechs',
                'meta_description' => 'Dependable Carrier AC service and repair in Kochi by Essentechs. Specialists in Flexicool Inverter split ACs, gas charging, blower cleaning, and PCB repair.',
                'h1' => 'Carrier AC Service & Repair',
                'badge' => 'Carrier Cooling Specialists',
                'hero_subtitle' => 'Expert maintenance, emergency repair, and deep jet cleaning for Carrier residential and commercial air conditioners in Kochi.',
                'intro_heading' => 'Trusted Cooling Solutions for Carrier Air Conditioners',
                'intro_paragraphs' => [
                    'Carrier is the original inventor of modern air conditioning, known for robust engineering, Flexicool multi-tonnage modulation, and Insta-Cool turbo cooling modes. Carrier systems are designed to operate under severe voltage fluctuations and humid coastal environments.',
                    'At Essentechs, our certified AC technicians provide comprehensive diagnostics, leak detection, and maintenance for Carrier split and window units. We ensure your AC delivers crisp, dehumidified cooling while conserving electricity.'
                ],
                'technologies' => [
                    'Flexicool 6-in-1 Inverter Capacity Tonnage Control',
                    'Aqua Clear Hydrophilic Condenser Coating',
                    'Dual Filtration with PM 2.5 Micro Dust Filters',
                    'High Ambient Cooling Up to 55°C',
                    'Insta-Cool Turbo Air Circulation'
                ],
                'common_problems' => [
                    [
                        'title' => 'Error Codes E1 / E2 / E3 on Carrier Display',
                        'symptom' => 'The indoor unit beeps and displays E1, E2, or E3 and blows warm air.',
                        'cause' => 'Indoor coil temperature sensor open-circuit or outdoor fan motor locked.',
                        'solution' => 'Sensor resistance diagnostic, wiring harness check, and thermistor sensor replacement.'
                    ],
                    [
                        'title' => 'Carrier AC Blowing Warm Air / Compressor Not Starting',
                        'symptom' => 'Indoor blower runs, but the outdoor unit does not hum or engage the compressor.',
                        'cause' => 'Faulty compressor dual capacitor, defective contactor relay, or low refrigerant cutoff.',
                        'solution' => 'Capacitor capacitance test, contactor cleaning, and refrigerant pressure check.'
                    ],
                    [
                        'title' => 'Rattling or Squeaking Indoor Blower Noise',
                        'symptom' => 'High-pitched squeak or cyclical vibration when the blower fan spins.',
                        'cause' => 'Worn indoor fan motor rubber bush bearing or cracked cross-flow fan drum.',
                        'solution' => 'Blower bush replacement, drum dynamic balancing, and motor spindle lubrication.'
                    ],
                    [
                        'title' => 'Ice Formation on Copper Tubing',
                        'symptom' => 'Frost or thick white ice appears on the narrow brass pipe connected to outdoor unit.',
                        'cause' => 'Partial refrigerant gas leak causing low suction pressure or severely blocked air filters.',
                        'solution' => 'Filter washing, pressure gauge inspection, leak braze repair, and top-up gas charging.'
                    ]
                ],
                'services_offered' => [
                    'Carrier Flexicool Inverter PCB Diagnostics',
                    'Dual Run Capacitor & Contactor Relay Replacement',
                    'Precision Nitrogen Pressure Leak Testing & Gas Charging',
                    'Hydrophilic Coil Jet Wash & Disinfection',
                    'Cross-Flow Blower Fan Realignment & Motor Servicing',
                    'Annual Maintenance Contracts (AMC) for Carrier ACs'
                ],
                'supported_models' => [
                    'Carrier Flexicool Hybridjet & Ester Inverter ACs',
                    'Carrier Superia & Emprende Inverter Split Units',
                    'Carrier Kurve & Estrella Window Air Conditioners',
                    'Carrier Light Commercial Cassette AC Units'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is ice forming on the copper pipes of my Carrier AC?',
                        'a' => 'Ice on the smaller (discharge) pipe usually points to low refrigerant gas due to a slow leak. Ice on the larger (suction) pipe or indoor evaporator coil often indicates choked air filters or a dead blower motor. Essentechs technicians diagnose the exact cause.'
                    ],
                    [
                        'q' => 'What is included in an Essentechs Carrier AC jet service?',
                        'a' => 'Our jet service includes complete dismantling of the front casing, high-pressure foam and water jet cleaning of the evaporator coil, cross-flow blower cleaning, outdoor condenser coil jet spray, drain tray clearing, and electrical terminal inspection.'
                    ],
                    [
                        'q' => 'Can you repair Carrier window ACs in Kochi?',
                        'a' => 'Yes! We service both split and window Carrier AC units, including compressor diagnostics, fan motor repairs, and bracket re-mounting.'
                    ]
                ]
            ],

            'panasonic' => [
                'name' => 'Panasonic',
                'slug' => 'panasonic',
                'meta_title' => 'Panasonic AC Service & Repair | Essentechs',
                'meta_description' => 'Expert Panasonic AC service in Kochi by Essentechs. Repairing Miraie smart IoT ACs, nanoe-X air purification, inverter PCBs, and refrigerant leaks.',
                'h1' => 'Panasonic AC Service & Repair',
                'badge' => 'Panasonic AC Smart Care',
                'hero_subtitle' => 'Professional maintenance and electronic diagnostics for Panasonic Miraie IoT, Inverter, and nanoe™ split AC systems across Kochi.',
                'intro_heading' => 'Smart Diagnostics for Panasonic Miraie & nanoe-X ACs',
                'intro_paragraphs' => [
                    'Panasonic air conditioners are advanced climate systems featuring Miraie IoT smart connectivity, twin-cool inverter compressors, and nanoe-X hydroxyl radical air purification. Their sophisticated indoor control boards communicate wirelessly with mobile apps while actively balancing humidity and cooling output.',
                    'Essentechs provides specialized technician visits for Panasonic ACs in Kochi. We resolve IoT connectivity drops, twin-rotary inverter drive errors, and sensor communication anomalies quickly and accurately.'
                ],
                'technologies' => [
                    'Miraie Smart IoT App & Voice Control Integration',
                    'nanoe-X & nanoe-G Air Purification Technology',
                    'Twin Cool Inverter Rotary Compressor Design',
                    'Shield Blu+ Anti-Corrosion Protection on Coils',
                    'Econavi Intelligent Eco Sensors'
                ],
                'common_problems' => [
                    [
                        'title' => 'Panasonic AC Error Code H11 / H14 / H16',
                        'symptom' => 'AC stops cooling, and the timer lamp flashes with an H-code on the Miraie app.',
                        'cause' => 'H11 indicates indoor/outdoor communication failure; H16 indicates CT current detection error.',
                        'solution' => 'Interconnecting cable inspection, communication optocoupler test, or outdoor PCB refurbishment.'
                    ],
                    [
                        'title' => 'nanoe-X Generator Emitting Sparking Sound',
                        'symptom' => 'A sharp clicking or static hiss comes from the top right air discharge grille.',
                        'cause' => 'Dust accumulation or moisture shorting the high-voltage nanoe needle emitter.',
                        'solution' => 'Emitter pin de-dusting, high-voltage driver circuit inspection, and housing alignment.'
                    ],
                    [
                        'title' => 'Foul Smell Coming from AC When First Turned On',
                        'symptom' => 'Musty, vinegar-like smell blows into the room during the first 3 minutes of operation.',
                        'cause' => 'Bacterial mold and fungus colony growing on the damp indoor evaporator coil.',
                        'solution' => 'Anti-microbial deep foam treatment, coil sanitization, and blower jet decontamination.'
                    ]
                ],
                'services_offered' => [
                    'Panasonic Miraie IoT Board Diagnostic & Repair',
                    'Twin-Cool Inverter Compressor & IPM Troubleshooting',
                    'Shield Blu+ Anti-Rust Coil Protective Spray Coating',
                    'High-Pressure Foam Jet Evaporator & Blower Deep Clean',
                    'Nitrogen Pressure Testing & R32 Refrigerant Gas Refilling'
                ],
                'supported_models' => [
                    'Panasonic Miraie Smart Inverter Split ACs',
                    'Panasonic nanoe-X 7-in-1 Convertible Inverter ACs',
                    'Panasonic Twin Cool Heavy Duty 5-Star Series',
                    'Panasonic Compact Window & Cassette Air Conditioners'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code H11 mean on a Panasonic AC?',
                        'a' => 'H11 is an indoor/outdoor communication error. The two microprocessors are not exchanging data. This is typically caused by corroded terminal wiring, a blown communication fuse, or a damaged outdoor inverter PCB. We carry diagnostic gear to trace the fault.'
                    ],
                    [
                        'q' => 'How does Essentechs eliminate musty smells from Panasonic ACs?',
                        'a' => 'We use specialized HVAC anti-fungal foam cleaners that break down organic bio-film trapped between aluminum cooling fins, followed by a high-pressure flush that leaves your room air fresh and hygienic.'
                    ]
                ]
            ],

            'godrej' => [
                'name' => 'Godrej',
                'slug' => 'godrej',
                'meta_title' => 'Godrej AC Service & Repair | Essentechs',
                'meta_description' => 'Affordable and reliable Godrej AC repair in Kochi by Essentechs. Servicing 5-in-1 Convertible Inverter ACs, gas leakage, coil cleaning, and compressor faults.',
                'h1' => 'Godrej AC Service & Repair',
                'badge' => 'Reliable Godrej AC Care',
                'hero_subtitle' => 'Doorstep repair and preventive maintenance for Godrej 5-in-1 convertible, inverter, and window air conditioners across Kochi.',
                'intro_heading' => 'Practical & Eco-Friendly Godrej AC Repairs',
                'intro_paragraphs' => [
                    'Godrej is known for introducing eco-friendly green refrigerants (R290 and R32) and durable 100% copper condenser systems designed for Indian power conditions. With heavy monsoonal humidity and coastal air in Kochi, routine servicing is essential to protect cooling fins and prevent condensate pan blockages.',
                    'Essentechs offers fast, budget-conscious repair and servicing for Godrej air conditioners in Kochi. Our skilled technicians handle all electrical and refrigeration components safely.'
                ],
                'technologies' => [
                    '5-in-1 Convertible Flexible Cooling Technology',
                    'Heavy-Duty Twin Rotary Inverter Compressors',
                    'Anti-Corrosive Blue Fin Technology on Evaporators',
                    'Anti-Dust Filter with Nano-Coated Carbon Layer',
                    'Silent Airflow Acoustic Engineering'
                ],
                'common_problems' => [
                    [
                        'title' => 'Godrej AC Not Cooling / Compressor Tripping After 2 Minutes',
                        'symptom' => 'Compressor kicks on for a short burst, then cuts off with a metallic click.',
                        'cause' => 'Over-temperature compressor sensor tripping due to low gas, dirty condenser, or failing fan motor.',
                        'solution' => 'Condenser jet wash, outdoor fan capacitor replacement, and refrigerant pressure top-up.'
                    ],
                    [
                        'title' => 'Indoor Unit Dropping Water Indoors',
                        'symptom' => 'Water overflows from behind the swing flap and drips onto furniture.',
                        'cause' => 'Choked drain hole or disconnected plastic condensate hose behind wall bracket.',
                        'solution' => 'Drain line vacuum suction clearing and hose clamp re-securing.'
                    ]
                ],
                'services_offered' => [
                    'Godrej Inverter PCB Repair & Sensor Calibration',
                    'Refrigerant Gas Leak Detection & Precision Charging',
                    'Foam & Water Jet Cleaning for Coils and Blower',
                    'Fan Motor & Capacitor Replacement',
                    'Complete Uninstallation, Shifting & Installation'
                ],
                'supported_models' => [
                    'Godrej 5-in-1 Convertible Inverter Split ACs',
                    'Godrej Turbo Plus & Eon Green Balance Inverter ACs',
                    'Godrej Heavy Duty Window Air Conditioners'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair a Godrej AC that trips the electricity breaker?',
                        'a' => 'Yes. A tripping breaker typically indicates a shorted compressor winding, ground fault in the outdoor fan motor, or a blown capacitor. We conduct insulation resistance testing to safely isolate and resolve the short.'
                    ]
                ]
            ],

            'haier' => [
                'name' => 'Haier',
                'slug' => 'haier',
                'meta_title' => 'Haier AC Service & Repair | Essentechs',
                'meta_description' => 'Fast Haier AC service and repair in Kochi by Essentechs. Experts in Triple Inverter Plus, Self-Clean technology, PCB diagnostics, and gas charging.',
                'h1' => 'Haier AC Service & Repair',
                'badge' => 'Haier Certified AC Care',
                'hero_subtitle' => 'Doorstep repair, Self-Clean maintenance, and electronic servicing for Haier Triple Inverter and split ACs in Kochi.',
                'intro_heading' => 'Expert Servicing for Haier Triple Inverter ACs',
                'intro_paragraphs' => [
                    'Haier air conditioners feature Triple Inverter Plus architecture that combines TLFM, PID, and A-PAM inverter controls to achieve rapid cooling with low energy draw. Their patented Self-Clean technology freezes moisture on the evaporator to wash away dirt.',
                    'Essentechs provides specialized technician visits across Kochi for Haier ACs. We resolve Self-Clean error codes, PCB communication faults, and gas leakage issues with reliable parts and professional care.'
                ],
                'technologies' => [
                    'Triple Inverter Plus (TLFM, PID & A-PAM Modulation)',
                    'Frost Self-Clean 99.9% Disinfection Technology',
                    'Hyper PCB Strong Surge Protection (130V - 300V)',
                    'Heavy-Duty 20-Meter Long Air Throw Fan Design',
                    '100% Grooved Copper Tubes with Hydrophilic Fins'
                ],
                'common_problems' => [
                    [
                        'title' => 'Haier AC Error Code E7 on Indoor Display',
                        'symptom' => 'The AC display flashes E7 and cooling ceases completely.',
                        'cause' => 'Communication failure between indoor unit PCB and outdoor inverter board.',
                        'solution' => 'Diagnostic probe test on RX/TX communication line, board optocoupler repair, or harness replacement.'
                    ],
                    [
                        'title' => 'Frost Self-Clean Cycle Stalling or Showing Error',
                        'symptom' => 'Starting the self-clean mode results in an error chime midway through.',
                        'cause' => 'Defective coil thermistor failing to read the freezing threshold properly.',
                        'solution' => 'Evaporator pipe sensor replacement and control board logic reset.'
                    ]
                ],
                'services_offered' => [
                    'Haier E7 and Communication Error Code Diagnostics',
                    'Triple Inverter Power Board Component-Level Repair',
                    'Pressure Nitrogen Leak Testing & Refrigerant Charging',
                    'Indoor Blower & Condenser Coil Jet Cleaning',
                    'Compressor Relay & Sensor Harness Replacement'
                ],
                'supported_models' => [
                    'Haier Kinouchi & PuriCool Triple Inverter ACs',
                    'Haier CleanCool & Heavy-Duty 7-in-1 Convertible Units',
                    'Haier Window & Commercial Light Inverter Systems'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code E7 mean on my Haier AC?',
                        'a' => 'E7 is an electronic communication error between the indoor and outdoor control boards. This commonly happens after heavy thunderstorms or voltage spikes. Essentechs technicians diagnose the communication rail and repair the affected PCB.'
                    ]
                ]
            ],

            'whirlpool' => [
                'name' => 'Whirlpool',
                'slug' => 'whirlpool',
                'meta_title' => 'Whirlpool AC Service & Repair | Essentechs',
                'meta_description' => 'Reliable Whirlpool AC service in Kochi by Essentechs. Servicing 6th Sense IntelliComfort, 4-in-1 convertible, and Magicool ACs with fast doorstep support.',
                'h1' => 'Whirlpool AC Service & Repair',
                'badge' => 'Whirlpool AC Service Care',
                'hero_subtitle' => 'Comprehensive diagnostics, coil deep-wash, and component repair for Whirlpool 6th Sense and split ACs in Kochi.',
                'intro_heading' => 'Smart Cooling Repairs for Whirlpool Air Conditioners',
                'intro_paragraphs' => [
                    'Whirlpool air conditioners utilize 6th Sense IntelliComfort sensors to automatically regulate temperature and humidity based on ambient room conditions. Featuring Turbo Cool modes and 100% copper condensers, these systems require precise sensor feedback and clean coil airflow to operate at peak efficiency.',
                    'Essentechs provides expert diagnostic visits for Whirlpool AC owners in Kochi, addressing sensor calibration, gas leaks, and electronic board failures with safety and precision.'
                ],
                'technologies' => [
                    '6th Sense IntelliComfort Climate Control Technology',
                    'Turbo Cool & 4-in-1 Convertible Tonnage Modes',
                    '100% Copper Heat Exchanger with Rust-Shield Coating',
                    'Self-Diagnosis Error Code System',
                    'Advanced Dual Humidity & Temperature Sensors'
                ],
                'common_problems' => [
                    [
                        'title' => 'Whirlpool AC Shows F1 / F2 / F3 Error',
                        'symptom' => 'Front panel flashes F1 or F2 and the unit stops chilling air.',
                        'cause' => 'Evaporator or ambient temperature sensor drifted out of manufacturer tolerance.',
                        'solution' => 'Sensor resistance test, terminal connector cleaning, and thermistor probe replacement.'
                    ],
                    [
                        'title' => 'Blower Runs at Single Speed Regardless of Remote Setting',
                        'symptom' => 'Changing fan speed on the remote between Low, Med, High does not alter blower RPM.',
                        'cause' => 'Failed optical triac switch or Hall-effect feedback sensor on indoor motor.',
                        'solution' => 'Indoor PCB fan control triac replacement or indoor fan motor replacement.'
                    ]
                ],
                'services_offered' => [
                    'Whirlpool 6th Sense Sensor Diagnostics & Tuning',
                    'Inverter PCB Board Repair & Solder Restoration',
                    'Eco-Friendly Refrigerant Charging & Nitrogen Leak Testing',
                    'Deep Jet Wash for Evaporator & Condenser Units',
                    'Indoor Blower Fan Motor & Capacitor Servicing'
                ],
                'supported_models' => [
                    'Whirlpool Magicool Inverter Split ACs',
                    'Whirlpool 6th Sense IntelliComfort Series',
                    'Whirlpool 4-in-1 & 5-in-1 Convertible Inverter ACs'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is my Whirlpool AC not responding to the remote control?',
                        'a' => 'If fresh batteries don’t resolve it, the infrared sensor receiver diode on the front display board may have failed or corroded due to humidity. Essentechs can replace the sensor module on-site.'
                    ]
                ]
            ],

            'lloyd' => [
                'name' => 'Lloyd',
                'slug' => 'lloyd',
                'meta_title' => 'Lloyd AC Service & Repair | Essentechs',
                'meta_description' => 'Expert Lloyd AC service and repair in Kochi by Essentechs. Servicing Havells Lloyd Inverter ACs, Golden Fin coils, gas leaks, and PCB faults.',
                'h1' => 'Lloyd AC Service & Repair',
                'badge' => 'Lloyd AC Care Specialists',
                'hero_subtitle' => 'Professional doorstep repair, jet maintenance, and gas charging for Lloyd Havells split and window ACs in Kochi.',
                'intro_heading' => 'Dependable Service for Lloyd (Havells) Air Conditioners',
                'intro_paragraphs' => [
                    'Lloyd, a brand of Havells, has emerged as a premier air conditioning choice in India with Golden Fin corrosion protection, 4-way swing distribution, and rapid cooling down to 18°C. Built to withstand tropical coastal conditions, keeping coils clean and ensuring tight electrical terminations prevents unnecessary service calls.',
                    'Essentechs provides dependable technician visits across Kochi for Lloyd air conditioners. We diagnose compressor starting errors, gas pressure drops, and electrical board anomalies quickly.'
                ],
                'technologies' => [
                    'Golden Fin Hydrophilic Anti-Rust Protection',
                    '4-Way Auto Swing Omnidirectional Airflow',
                    'Duo Inverter Compressor Technology',
                    'Rapid Cooling Down to 18°C in 45 Seconds',
                    'Hidden LED Display Architecture'
                ],
                'common_problems' => [
                    [
                        'title' => 'Lloyd AC Displays Error Code E1 or P4',
                        'symptom' => 'Unit beeps and displays error P4 or E1, then shuts off compressor.',
                        'cause' => 'P4 indicates inverter drive module overload or compressor thermal protection trip.',
                        'solution' => 'Inverter IPM board testing, compressor winding ohm test, and thermal sensor replacement.'
                    ],
                    [
                        'title' => 'Weak Air Flow Despite Clean Filters',
                        'symptom' => 'Air output from the louvers feels faint even when set to maximum fan speed.',
                        'cause' => 'Heavy dust clogging the rear side of the cross-flow blower barrel.',
                        'solution' => 'Dismantling front fascia, high-pressure rotor wash, and blower balancing.'
                    ]
                ],
                'services_offered' => [
                    'Lloyd Inverter PCB Circuit Troubleshooting',
                    'Golden Fin Coil Leak Detection & Gas Charging',
                    'Indoor Cross-Flow Blower Deep Jet Cleaning',
                    'Swing Flap Motor & Linkage Repair',
                    'Outdoor Condenser Fan Motor Replacement'
                ],
                'supported_models' => [
                    'Lloyd Stellar & Grand Heavy Duty Inverter ACs',
                    'Lloyd 5-in-1 Convertible Inverter Split Series',
                    'Lloyd Window Air Conditioners (1.0T - 1.5T)'
                ],
                'faqs' => [
                    [
                        'q' => 'What is the advantage of Lloyd’s Golden Fin technology?',
                        'a' => 'Golden Fin is an anti-corrosion coating that protects aluminum fins from salty coastal air and acidic rain. However, the fins still accumulate airborne dust and require routine professional jet cleaning to maintain heat exchange.'
                    ]
                ]
            ],

            'ifb' => [
                'name' => 'IFB',
                'slug' => 'ifb',
                'meta_title' => 'IFB AC Service & Repair | Essentechs',
                'meta_description' => 'Fast IFB AC service and repair in Kochi by Essentechs. Experts in FastCool Inverter ACs, Titanium Gold fins, gas leak detection, and PCB repairs.',
                'h1' => 'IFB AC Service & Repair',
                'badge' => 'IFB FastCool AC Support',
                'hero_subtitle' => 'Quality maintenance and component-level repair for IFB FastCool, Titanium Gold, and heavy-duty split ACs in Kochi.',
                'intro_heading' => 'Heavy-Duty Servicing for IFB Air Conditioners',
                'intro_paragraphs' => [
                    'IFB air conditioners are engineered with heavy-duty cooling coils, Titanium Gold Fin coatings, and 7-stage air treatment systems. Known for high air throw and rapid cooling even in extreme ambient temperatures, IFB units require calibrated refrigerant management and sensor alignment for optimal performance.',
                    'Essentechs provides professional technician visits across Kochi for IFB air conditioners. We diagnose electronic board errors, mechanical blower faults, and refrigerant pinholes with certified safety tools.'
                ],
                'technologies' => [
                    'FastCool Dual Heavy Inverter Technology',
                    'Titanium Gold Fin Non-Stick Protective Shield',
                    '7-Stage Air Purification with Dust & PM 0.3 Filters',
                    'High Ambient Cooling at 58°C',
                    'Automated Indoor Coil De-Dusting Mode'
                ],
                'common_problems' => [
                    [
                        'title' => 'IFB AC Blowing Normal Room Temperature Air',
                        'symptom' => 'Fan runs smoothly, but room temperature stays unchanged.',
                        'cause' => 'Low refrigerant due to service valve leak or outdoor compressor failing to ramp up frequency.',
                        'solution' => 'Valve core tightening, nitrogen pressure test, and R32 gas refilling to factory weight.'
                    ],
                    [
                        'title' => 'Rattling Sound from Indoor Swing Louver',
                        'symptom' => 'The horizontal swing flap chatters or drops down loose when turned on.',
                        'cause' => 'Stripped stepper motor drive gear or broken louver hinge pin.',
                        'solution' => 'Stepper motor replacement and louver hinge bracket re-alignment.'
                    ]
                ],
                'services_offered' => [
                    'IFB FastCool Inverter Board Diagnostics & Repair',
                    'Titanium Gold Fin Leak Detection & Gas Charging',
                    'High-Pressure Jet Deep Cleaning & Sanitization',
                    'Louver Swing Stepper Motor Replacement',
                    'Electrical Wiring & Terminal Connector Maintenance'
                ],
                'supported_models' => [
                    'IFB FastCool Gold Series Inverter ACs',
                    'IFB Silver Series 3-Star & 5-Star Split ACs',
                    'IFB Heavy Duty Convertible Split Units'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is my IFB AC blowing air but not cooling the room?',
                        'a' => 'This typically happens when the outdoor compressor fails to receive the 230V command from the indoor PCB, the starting capacitor is weak, or refrigerant has leaked out. We perform complete electrical and pressure tests on-site.'
                    ]
                ]
            ],

            'mitsubishi-electric' => [
                'name' => 'Mitsubishi Electric',
                'slug' => 'mitsubishi-electric',
                'meta_title' => 'Mitsubishi Electric AC Service & Repair | Essentechs',
                'meta_description' => 'Precision Mitsubishi Electric AC repair in Kochi by Essentechs. Servicing MSZ/MUZ Inverter split ACs, Dual Barrier Coating, and silent cooling systems.',
                'h1' => 'Mitsubishi Electric AC Service & Repair',
                'badge' => 'Mitsubishi Electric Specialists',
                'hero_subtitle' => 'Premium technical service, electronic diagnostics, and deep maintenance for Mitsubishi Electric residential and commercial ACs in Kochi.',
                'intro_heading' => 'Japanese Engineering Excellence: Mitsubishi Electric',
                'intro_paragraphs' => [
                    'Mitsubishi Electric air conditioners are globally acclaimed for ultra-quiet operation (down to 19 dB), legendary durability, Dual Barrier Coating, and proprietary Joint Lap DC motor technology. These premium systems deliver exceptional energy efficiency and silent cooling.',
                    'Essentechs provides specialized technician visits for Mitsubishi Electric AC owners in Kochi and Kakkanad. Our technicians understand Mitsubishi wiring protocols, inverter pulse circuits, and delicate cross-flow fan assemblies.'
                ],
                'technologies' => [
                    'Dual Barrier Coating on Heat Exchangers & Blower Fan',
                    'Joint Lap DC Scroll Compressor Motors',
                    '3D i-See Sensor Temperature & Human Presence Detection',
                    'Ultra-Quiet Operation Down to 19 dB',
                    'Long & Wide Airflow Auto-Vane Technology'
                ],
                'common_problems' => [
                    [
                        'title' => 'Operating Lamp Flashing in Sequences (Error Blinks)',
                        'symptom' => 'Green power LED blinks 2, 5, or 14 times while cooling stays disabled.',
                        'cause' => '2 blinks indicates pipe temperature thermistor; 5 blinks indicates serial communication fault.',
                        'solution' => 'Diagnostic pulse count decoding, sensor harness testing, and board trace restoration.'
                    ],
                    [
                        'title' => 'Vibration Humming Sound Transmitted Through Wall',
                        'symptom' => 'A low-frequency hum vibrates the interior wall when the compressor runs at high RPM.',
                        'cause' => 'Aged outdoor bracket dampener pads or misaligned compressor footings.',
                        'solution' => 'Heavy-duty neoprene vibration isolator fitting and bracket realignment.'
                    ]
                ],
                'services_offered' => [
                    'Mitsubishi Electric Inverter PCB Diagnostic & Repair',
                    'Dual Barrier Coil Jet Wash & Disinfection',
                    'Serial Communication & Sensor Array Troubleshooting',
                    'Digital Refrigerant Charging with Vacuum Evacuation',
                    'Ultra-Quiet Blower Balancing & Motor Replacement'
                ],
                'supported_models' => [
                    'Mitsubishi Electric MSZ/MUZ Series Inverter Split ACs',
                    'Mitsubishi Electric Kirigamine Zen Designer Models',
                    'Mitsubishi Electric Cassette & Multi-Split Systems'
                ],
                'faqs' => [
                    [
                        'q' => 'Can Essentechs service high-end Mitsubishi Electric ACs in Kochi?',
                        'a' => 'Yes. Our technicians have extensive hands-on experience with Mitsubishi Electric inverter split and cassette systems installed in premium villas and apartments across Kochi.'
                    ]
                ]
            ],

            'mitsubishi-heavy-industries' => [
                'name' => 'Mitsubishi Heavy Industries',
                'slug' => 'mitsubishi-heavy-industries',
                'meta_title' => 'Mitsubishi Heavy Industries AC Service & Repair | Essentechs',
                'meta_description' => 'Expert Mitsubishi Heavy Industries AC service in Kochi by Essentechs. Servicing SRK/SRC Heavy Duty Inverter split ACs and jet air distribution systems.',
                'h1' => 'Mitsubishi Heavy Industries AC Service & Repair',
                'badge' => 'MHI Heavy Duty AC Support',
                'hero_subtitle' => 'Specialized repair, electronic troubleshooting, and precision maintenance for Mitsubishi Heavy Industries (MHI) split ACs in Kochi.',
                'intro_heading' => 'Heavy-Duty Industrial Precision: Mitsubishi Heavy (MHI)',
                'intro_paragraphs' => [
                    'Mitsubishi Heavy Industries (MHI) air conditioners utilize aerospace airflow engineering to deliver powerful Jet Air Scroll technology, long air throw (up to 17 meters), and durable copper heat exchangers. Engineered for heavy cooling loads, MHI systems are popular for large living halls, offices, and coastal residences.',
                    'Essentechs provides specialized on-site diagnostic and repair support for MHI air conditioners in Kochi. We resolve refrigeration pressure faults, fan motor failures, and electronic inverter issues with meticulous precision.'
                ],
                'technologies' => [
                    'Jet Air Technology Aerodynamic Blower Blades',
                    'Pam Vector Inverter Energy Control',
                    'Self-Clean Operation with Allergen Clear Filters',
                    'Heavy-Duty Extended Copper Coil Architecture',
                    'Microcomputer Controlled Defrosting Logic'
                ],
                'common_problems' => [
                    [
                        'title' => 'Run & Timer LEDs Alternating Flash',
                        'symptom' => 'Run LED and Timer LED blink in an alternating rhythm, shutting down the compressor.',
                        'cause' => 'Discharge pipe high-temperature safety cutoff or outdoor fan motor locked rotor.',
                        'solution' => 'Discharge sensor testing, outdoor fan motor winding check, and gas pressure measurement.'
                    ],
                    [
                        'title' => 'Reduced Air Throw Velocity from Blower',
                        'symptom' => 'The air stream does not project across the room even at maximum setting.',
                        'cause' => 'Jet air blades clogged with sticky dust film or worn indoor fan motor capacitor.',
                        'solution' => 'Disassembly of jet scroll barrel, chemical foam wash, and capacitor renewal.'
                    ]
                ],
                'services_offered' => [
                    'MHI Inverter PCB & Vector Control Diagnostics',
                    'Jet Scroll Fan Disassembly & High-Pressure Jet Wash',
                    'High-Pressure Nitrogen Leak Detection & Gas Refilling',
                    'Allergen Filter & Evaporator Coil Sanitization',
                    'Outdoor Condenser Motor & Mount Maintenance'
                ],
                'supported_models' => [
                    'Mitsubishi Heavy SRK/SRC Inverter Series (1.5T - 2.5T)',
                    'MHI Hyper Inverter Split ACs',
                    'MHI Ceiling Concealed & Commercial Units'
                ],
                'faqs' => [
                    [
                        'q' => 'Is Mitsubishi Heavy Industries the same as Mitsubishi Electric?',
                        'a' => 'No. While both are respected Japanese engineering giants with shared roots, they produce distinct air conditioning systems with unique electronics, error codes, and replacement components. Essentechs technicians are trained to service both brands correctly.'
                    ]
                ]
            ],

            'toshiba' => [
                'name' => 'Toshiba',
                'slug' => 'toshiba',
                'meta_title' => 'Toshiba AC Service & Repair | Essentechs',
                'meta_description' => 'Precision Toshiba AC service and repair in Kochi by Essentechs. Servicing DC Twin-Rotary Inverter split ACs, Magic Coil, and PCB diagnostics.',
                'h1' => 'Toshiba AC Service & Repair',
                'badge' => 'Toshiba Inverter AC Care',
                'hero_subtitle' => 'Professional diagnostics, Magic Coil deep cleaning, and component repair for Toshiba Inverter split air conditioners in Kochi.',
                'intro_heading' => 'Pioneers of Inverter Air Conditioning: Toshiba',
                'intro_paragraphs' => [
                    'Toshiba created the world’s first residential inverter air conditioner and continues to lead in compressor efficiency with their DC Twin-Rotary systems and Magic Coil aqua-resin heat exchangers. Designed to prevent oil and dust from adhering to aluminum fins, Toshiba ACs provide silky-smooth cooling when properly maintained.',
                    'Essentechs provides specialized technician visits for Toshiba air conditioners in Kochi. We handle inverter power board diagnostics, gas charging, and coil washing with genuine expertise.'
                ],
                'technologies' => [
                    'DC Twin-Rotary Inverter Compressor Design',
                    'Magic Coil Aqua-Resin Coated Heat Exchanger',
                    'Self-Cleaning Operation with Reverse Airflow',
                    'High-Power Turbo Rapid Cooling Mode',
                    'Ultra-Pure PM 2.5 Air Filtration System'
                ],
                'common_problems' => [
                    [
                        'title' => 'Toshiba AC Operation / Timer Lamp Blinking (Check Code)',
                        'symptom' => 'Check code 00, 01, 02, or 1C appears on remote diagnostic mode.',
                        'cause' => 'Compressor over-current, IPM short, or indoor heat exchanger temperature sensor defect.',
                        'solution' => 'Remote check code readout, sensor resistance verification, and inverter PCB repair.'
                    ],
                    [
                        'title' => 'Musty Odor Despite Magic Coil Coating',
                        'symptom' => 'Damp, stale smell blowing into room during dehumidification cycles.',
                        'cause' => 'Algae growth in the condensate drain trough due to clogged drain pipe.',
                        'solution' => 'Drain trough extraction, anti-bacterial flushing, and line clearing.'
                    ]
                ],
                'services_offered' => [
                    'Toshiba DC Twin-Rotary Inverter Troubleshooting',
                    'Magic Coil Protective Jet Foam Wash',
                    'Check Code Electronic Fault Isolation & Board Repair',
                    'Nitrogen Pressure Testing & Digital Gas Refilling',
                    'Indoor Blower Fan & Louver Mechanism Servicing'
                ],
                'supported_models' => [
                    'Toshiba Daiseikai Premium Inverter Split ACs',
                    'Toshiba Shorai & Seiya Inverter AC Range',
                    'Toshiba Light Commercial Cassette Systems'
                ],
                'faqs' => [
                    [
                        'q' => 'How do I check the error code on my Toshiba AC remote?',
                        'a' => 'You can press and hold the "CHECK" button with a pin for 5 seconds until the display shows "00", then use the up/down arrows to find the blinking code. Our technicians use this diagnostic to pinpoint the exact circuit fault.'
                    ]
                ]
            ],

            'o-general' => [
                'name' => 'O General',
                'slug' => 'o-general',
                'meta_title' => 'O General AC Service & Repair | Essentechs',
                'meta_description' => 'Master technician service for O General AC in Kochi by Essentechs. Servicing heavy-duty tropical inverter split ACs, hyper tropical compressors, and PCB repairs.',
                'h1' => 'O General AC Service & Repair',
                'badge' => 'O General Heavy Duty Specialists',
                'hero_subtitle' => 'Uncompromising diagnostic, jet maintenance, and component repair for O General tropical split and window air conditioners in Kochi.',
                'intro_heading' => 'Legendary Cooling Power: O General Air Conditioners',
                'intro_paragraphs' => [
                    'O General (Fujitsu General) is legendary across Kerala and the Middle East for unmatched tropical cooling power, heavy-gauge copper coils, and hyper-tropical compressors that cool effectively even when ambient outdoor temperatures exceed 52°C. These heavy-duty machines are an investment in supreme comfort and durability.',
                    'Essentechs specializes in high-caliber maintenance and repair for O General air conditioners in Kochi. Our senior technicians understand the heavy-gauge refrigeration circuits, high-torque fan motors, and sophisticated V-PAM inverter boards that power these premium machines.'
                ],
                'technologies' => [
                    'Hyper Tropical Rotary & Scroll Compressors',
                    'V-PAM (Vector Controlled Pulse Amplitude Modulation) Inverter',
                    'Extra-Large High-Density Multi-Path Heat Exchanger',
                    'Blue Fin Condenser Protection Against Coastal Corrosion',
                    'High Airflow Coanda Air Distribution'
                ],
                'common_problems' => [
                    [
                        'title' => 'Operation & Timer Lamp Blinking in Code Sequences',
                        'symptom' => 'Operation light and Timer light flash specific counts (e.g., 2 flashes + 3 flashes).',
                        'cause' => 'Outdoor IPM inverter error, compressor position sensor error, or discharge thermistor fault.',
                        'solution' => 'Fujitsu/O General error matrix decoding, board-level component diagnosis, and harness check.'
                    ],
                    [
                        'title' => 'Heavy Outdoor Fan Noise or Drone',
                        'symptom' => 'Outdoor unit makes a deep droning roar when cooling.',
                        'cause' => 'Outdoor fan motor bearing wear or vibration transferring to heavy mounting brackets.',
                        'solution' => 'Heavy-duty motor bearing replacement and thick anti-vibration pad installation.'
                    ],
                    [
                        'title' => 'Cooling Drop After 30 Minutes of Operation',
                        'symptom' => 'Starts cold, but cooling fades as outdoor temperatures climb at midday.',
                        'cause' => 'Condenser coil heat rejection failure due to salt crusting or failing outdoor fan RPM.',
                        'solution' => 'High-pressure chemical coil descaling, fan motor capacitor check, and gas pressure tuning.'
                    ]
                ],
                'services_offered' => [
                    'O General V-PAM Inverter Board Component-Level Repair',
                    'High-Pressure Chemical Descaling of Heavy-Duty Coils',
                    'Hyper-Tropical Compressor Diagnostics & Valve Testing',
                    'Precision Nitrogen Pressure Testing & R32/R410A Charging',
                    'Heavy-Duty Outdoor Wall Bracket Reinforcement'
                ],
                'supported_models' => [
                    'O General ASGG Tropical Inverter Split Series (1.5T - 2.5T)',
                    'O General Classic Fixed-Speed Heavy Duty Split ACs',
                    'O General Window Air Conditioners (AXGT Series)',
                    'O General Ceiling Cassette & Ductable Units'
                ],
                'faqs' => [
                    [
                        'q' => 'Why does O General AC repair require specialized technicians?',
                        'a' => 'O General units operate with higher operating pressures, heavier condenser coils, and unique V-PAM inverter circuitry compared to standard entry-level ACs. Incorrect gas charging or unskilled board testing can damage expensive tropical compressors. Essentechs technicians are specifically trained on O General equipment.'
                    ],
                    [
                        'q' => 'Can you repair O General inverter outdoor PCB boards?',
                        'a' => 'Yes. Replacing an entire O General inverter board is expensive. We perform component-level diagnostic repairs on IPM chips, rectifier bridges, and optocouplers to save you substantial replacement costs.'
                    ]
                ]
            ],

            'hisense' => [
                'name' => 'Hisense',
                'slug' => 'hisense',
                'meta_title' => 'Hisense AC Service & Repair | Essentechs',
                'meta_description' => 'Fast Hisense AC service and repair in Kochi by Essentechs. Experts in Smart Inverter ACs, gas charging, blower cleaning, and PCB repair.',
                'h1' => 'Hisense AC Service & Repair',
                'badge' => 'Hisense AC Service Care',
                'hero_subtitle' => 'Prompt doorstep service, jet cleaning, and electronic troubleshooting for Hisense split air conditioners in Kochi.',
                'intro_heading' => 'Efficient Diagnostics for Hisense Air Conditioners',
                'intro_paragraphs' => [
                    'Hisense air conditioners offer smart connectivity, dual-mode inverter compressors, and fast cooling modes at competitive price points. Featuring hydrophilic fins and self-cleaning capabilities, keeping the electrical controls and refrigerant charge optimized ensures long, trouble-free cooling.',
                    'Essentechs provides quick, transparent repair visits for Hisense AC owners throughout Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Dual-Mode Inverter Energy Saving Technology',
                    'Quick Cool Turbo Airflow Mode',
                    'Hydrophilic Aluminum Fin Evaporators',
                    'Smart Wi-Fi App Remote Control Integration',
                    'Self-Diagnosis Diagnostic Protocol'
                ],
                'common_problems' => [
                    [
                        'title' => 'Hisense AC Error Code E4 / E5 on LED',
                        'symptom' => 'Indoor display shows E4 or E5 and the compressor will not kick on.',
                        'cause' => 'Zero-crossing detection fault on indoor fan motor or temperature sensor failure.',
                        'solution' => 'Sensor test, motor hall-sensor harness check, or indoor PCB power rail repair.'
                    ],
                    [
                        'title' => 'Blower Air Smells Stale / Weak Cooling Output',
                        'symptom' => 'Room temperature drops slowly and airflow feels restricted.',
                        'cause' => 'Dust-blocked cooling fins and low refrigerant pressure.',
                        'solution' => 'High-pressure foam jet wash, drain flush, and gas pressure top-up.'
                    ]
                ],
                'services_offered' => [
                    'Hisense Inverter Board Diagnostics & Repair',
                    'Refrigerant Leak Detection & Gas Refilling',
                    'Indoor & Outdoor Coil Jet Cleaning',
                    'Fan Motor & Sensor Harness Servicing'
                ],
                'supported_models' => [
                    'Hisense IntelliPro Inverter Split ACs',
                    'Hisense Cooling Expert 3-Star & 5-Star Models'
                ],
                'faqs' => [
                    [
                        'q' => 'How quickly can Essentechs service my Hisense AC in Kochi?',
                        'a' => 'We offer same-day technician dispatch across Kochi, Kakkanad, and nearby areas. Call +91 97467 00889 to book your slot.'
                    ]
                ]
            ],

            'cruise' => [
                'name' => 'Cruise',
                'slug' => 'cruise',
                'meta_title' => 'Cruise AC Service & Repair | Essentechs',
                'meta_description' => 'Dependable Cruise AC repair in Kochi by Essentechs. Servicing VarioQool Inverter ACs, Rust-O-Shield coils, gas charging, and PCB faults.',
                'h1' => 'Cruise AC Service & Repair',
                'badge' => 'Cruise AC Support Care',
                'hero_subtitle' => 'Doorstep repair, preventive maintenance, and deep jet cleaning for Cruise residential air conditioners in Kochi.',
                'intro_heading' => 'Reliable Repairs for Cruise Air Conditioners',
                'intro_paragraphs' => [
                    'Cruise air conditioners feature VarioQool inverter compressors, Rust-O-Shield Blue Fin technology, and PM 2.5 air purification filters designed to handle heavy Indian summer heat. Ensuring clean airflow and proper refrigerant charge keeps these robust units running smoothly.',
                    'Essentechs provides dependable, budget-friendly diagnostic and repair visits for Cruise AC owners in Kochi.'
                ],
                'technologies' => [
                    'VarioQool Inverter Smart Compressor Design',
                    'Rust-O-Shield 7-Stage Protective Coating',
                    'Dual Filtration Air Cleaner Cartridges',
                    'High Ambient Cooling Performance'
                ],
                'common_problems' => [
                    [
                        'title' => 'Cruise AC Shuts Down with Blinking Timer Light',
                        'symptom' => 'AC runs for 10 minutes then stops, timer light begins flashing.',
                        'cause' => 'Outdoor condenser fan motor overheating or clogged outdoor coil.',
                        'solution' => 'Condenser jet cleaning, outdoor fan capacitor replacement, and heat-sink paste reapplication.'
                    ]
                ],
                'services_offered' => [
                    'Cruise Inverter PCB Troubleshooting',
                    'Rust-O-Shield Coil Inspection & Jet Cleaning',
                    'Gas Leak Braze Repair & Refrigerant Charging',
                    'Indoor Cross-Flow Blower Balancing'
                ],
                'supported_models' => [
                    'Cruise VarioQool Convertible Inverter ACs',
                    'Cruise Classic Split & Window Models'
                ],
                'faqs' => [
                    [
                        'q' => 'Can you repair Cruise ACs that blow warm air?',
                        'a' => 'Yes. Warm air usually indicates a refrigerant leak, a failed starting capacitor, or an inverter board trip. We test all three components on-site to resolve it quickly.'
                    ]
                ]
            ],

            'onida' => [
                'name' => 'Onida',
                'slug' => 'onida',
                'meta_title' => 'Onida AC Service & Repair | Essentechs',
                'meta_description' => 'Fast Onida AC repair and service in Kochi by Essentechs. Servicing Onida Inverter ACs, cooling issues, gas leakage, and electrical faults.',
                'h1' => 'Onida AC Service & Repair',
                'badge' => 'Onida AC Care Support',
                'hero_subtitle' => 'Affordable, reliable doorstep repairs and maintenance for Onida split and window air conditioners across Kochi.',
                'intro_heading' => 'Practical & Economical Onida AC Repairs',
                'intro_paragraphs' => [
                    'Onida air conditioners are built with high-efficiency rotary compressors, Gold Fin evaporator coils, and rapid cooling algorithms. They offer great value for home cooling, provided regular servicing is performed to clear lint and dust from the cooling coils.',
                    'Essentechs offers fast, economical diagnostic visits and repairs for Onida ACs in Kochi, extending the operating life of your unit.'
                ],
                'technologies' => [
                    'Gold Fin Anti-Corrosion Technology',
                    'Dual Inverter Rapid Temperature Drop',
                    'Low Noise Cross-Flow Air Distribution',
                    'Digital Temperature Display on Front Panel'
                ],
                'common_problems' => [
                    [
                        'title' => 'Water Spraying Out with Cold Air',
                        'symptom' => 'Tiny water droplets mist out of the indoor air discharge louvers.',
                        'cause' => 'Evaporator fins partially frozen due to low gas or high humidity pulling moisture off dirty coils.',
                        'solution' => 'Coil deep wash, gas pressure inspection, and blower speed calibration.'
                    ]
                ],
                'services_offered' => [
                    'Onida Inverter Board Diagnostic & Repair',
                    'Refrigerant Gas Pressure Testing & Top-Up',
                    'High-Pressure Jet Foam Cleaning',
                    'Blower Fan Motor & Louver Stepper Motor Service'
                ],
                'supported_models' => [
                    'Onida Genio & Grand Inverter Split ACs',
                    'Onida Classic Window Air Conditioners'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is my Onida AC blowing water droplets into the room?',
                        'a' => 'Water misting occurs when condensate cannot drain down the coil properly due to dirt accumulation, or when partial coil freezing creates ice that the fan blows off. A professional jet service and gas check will eliminate this.'
                    ]
                ]
            ],

            'croma' => [
                'name' => 'Croma',
                'slug' => 'croma',
                'meta_title' => 'Croma AC Service & Repair | Essentechs',
                'meta_description' => 'Prompt Croma AC service and repair in Kochi by Essentechs. Servicing Croma Inverter split ACs, copper condensers, gas refilling, and PCB fixes.',
                'h1' => 'Croma AC Service & Repair',
                'badge' => 'Croma AC Care Support',
                'hero_subtitle' => 'Reliable doorstep repair, preventive service, and gas charging for Croma split and window air conditioners in Kochi.',
                'intro_heading' => 'Quality Service for Croma Air Conditioners',
                'intro_paragraphs' => [
                    'Croma air conditioners, manufactured with 100% copper condensers and Blue Fin protection, offer dependable domestic cooling. Keeping coils clean and protecting electronic boards from coastal moisture ensures consistent cooling performance.',
                    'Essentechs provides certified AC technician visits across Kochi for Croma air conditioners, providing honest assessments and transparent pricing.'
                ],
                'technologies' => [
                    '100% Copper Condenser with Blue Fin Protection',
                    'Inverter Energy Saving Compressor Modes',
                    'Anti-Dust & Active Carbon Air Filters',
                    'Self-Diagnosis Fault Warning System'
                ],
                'common_problems' => [
                    [
                        'title' => 'Croma AC Stops Cooling During Afternoon Heat',
                        'symptom' => 'Works fine in morning and night, but blows ambient air during peak afternoon.',
                        'cause' => 'Outdoor condenser coil choked with dust, causing thermal overload protection to shut off compressor.',
                        'solution' => 'Thorough outdoor coil jet wash and thermal safety sensor test.'
                    ]
                ],
                'services_offered' => [
                    'Croma Inverter PCB Diagnostics & Repair',
                    'Complete Jet Deep Cleaning of Indoor & Outdoor Units',
                    'Gas Leak Detection & Precision Refrigerant Charging',
                    'Capacitor & Contactor Replacement'
                ],
                'supported_models' => [
                    'Croma 4-in-1 Convertible Inverter ACs',
                    'Croma 3-Star & 5-Star Split AC Range',
                    'Croma Window Air Conditioners'
                ],
                'faqs' => [
                    [
                        'q' => 'How much does a routine Croma AC service cost in Kochi?',
                        'a' => 'Our service rates are clear, competitive, and transparent with no hidden charges. Contact us at +91 97467 00889 for an upfront quote tailored to your unit’s needs.'
                    ]
                ]
            ],

            'midea' => [
                'name' => 'Midea',
                'slug' => 'midea',
                'meta_title' => 'Midea AC Service & Repair | Essentechs',
                'meta_description' => 'Expert Midea AC repair and service in Kochi by Essentechs. Servicing Midea Inverter split ACs, Golden Fin technology, PCB errors, and gas leaks.',
                'h1' => 'Midea AC Service & Repair',
                'badge' => 'Midea AC Service Experts',
                'hero_subtitle' => 'Specialized diagnostics, jet maintenance, and component repair for Midea residential and commercial air conditioners in Kochi.',
                'intro_heading' => 'Global Cooling Technology: Midea Air Conditioners',
                'intro_paragraphs' => [
                    'Midea is one of the world’s largest air conditioning manufacturers, engineering sophisticated inverter systems with Golden Fin anti-corrosive coatings, Smart Gear power management, and high-frequency cooling. When electronic or refrigeration faults occur, trained diagnostics protect the compressor.',
                    'Essentechs provides specialized technician visits for Midea air conditioners in Kochi, addressing PCB communication errors, gas leaks, and fan motor issues.'
                ],
                'technologies' => [
                    'Inverter Quattro Intelligent Frequency Modulation',
                    'Golden Fin Anti-Corrosion Hydrophilic Coating',
                    'GearShift Energy Saving Power Modes',
                    'High Density Filtration Architecture',
                    'Low-Refrigerant Automatic Warning Detection'
                ],
                'common_problems' => [
                    [
                        'title' => 'Midea AC Error Code EC on Display',
                        'symptom' => 'The display flashes EC and the indoor fan blows room temperature air.',
                        'cause' => 'Refrigerant leakage detection sensor has triggered due to loss of gas pressure.',
                        'solution' => 'Nitrogen leak test, coil braze repair, vacuum evacuation, and R32 gas charging.'
                    ]
                ],
                'services_offered' => [
                    'Midea EC Error Code & Gas Leak Repair',
                    'Inverter Quattro PCB Diagnostics & Component Replacement',
                    'Golden Fin Evaporator & Condenser Jet Deep Wash',
                    'Indoor Blower Fan Motor & Sensor Maintenance'
                ],
                'supported_models' => [
                    'Midea Inverter Quattro Split ACs',
                    'Midea All-Easy & Mission Inverter Series',
                    'Midea Light Commercial Cassette AC Units'
                ],
                'faqs' => [
                    [
                        'q' => 'What does error code EC mean on a Midea AC?',
                        'a' => 'Error code EC indicates that the indoor coil temperature sensor is not detecting the expected temperature drop within a specific duration, signaling a refrigerant leak or loss of pressure. We test and recharge the system.'
                    ]
                ]
            ],

            'haikawa' => [
                'name' => 'Haikawa',
                'slug' => 'haikawa',
                'meta_title' => 'Haikawa AC Service & Repair | Essentechs',
                'meta_description' => 'Reliable Haikawa AC service and repair in Kochi by Essentechs. Servicing split ACs, cooling issues, gas leakage, and electrical maintenance.',
                'h1' => 'Haikawa AC Service & Repair',
                'badge' => 'Haikawa AC Support Care',
                'hero_subtitle' => 'Prompt doorstep service, jet cleaning, and component repair for Haikawa split air conditioners in Kochi.',
                'intro_heading' => 'Dependable Service for Haikawa Air Conditioners',
                'intro_paragraphs' => [
                    'Haikawa air conditioners offer functional domestic cooling with copper condenser circuits and user-friendly digital controls. Like all air conditioners in coastal regions, routine seasonal maintenance is vital to prevent dust buildup and coil corrosion.',
                    'Essentechs provides expert, affordable technician visits for Haikawa air conditioners across Kochi and Ernakulam.'
                ],
                'technologies' => [
                    'Copper Tube Heat Exchanger Architecture',
                    'Fast Cooling Auto Temperature Regulation',
                    'Multi-Speed Indoor Air Blower',
                    'Electronic Digital Display'
                ],
                'common_problems' => [
                    [
                        'title' => 'AC Emitting Musty Odor and Low Cooling',
                        'symptom' => 'Air output smells damp and the room takes hours to reach target temperature.',
                        'cause' => 'Dust accumulation on the cooling fins and biological growth in the drain pan.',
                        'solution' => 'High-pressure anti-bacterial foam jet wash and drain pipe clearing.'
                    ]
                ],
                'services_offered' => [
                    'Haikawa Indoor & Outdoor Coil Jet Cleaning',
                    'Refrigerant Gas Leak Detection & Charging',
                    'Capacitor & Fan Motor Servicing',
                    'Drainage System Flushing & Deodorization'
                ],
                'supported_models' => [
                    'Haikawa Split Air Conditioners (1.0T - 2.0T)',
                    'Haikawa Inverter & Fixed-Speed Models'
                ],
                'faqs' => [
                    [
                        'q' => 'Can Essentechs fix water leakage from my Haikawa AC?',
                        'a' => 'Yes. Water dripping from the indoor unit is quickly resolved by clearing clogged drain lines and re-leveling the indoor mounting plate.'
                    ]
                ]
            ],

            'sansui' => [
                'name' => 'Sansui',
                'slug' => 'sansui',
                'meta_title' => 'Sansui AC Service & Repair | Essentechs',
                'meta_description' => 'Fast Sansui AC service in Kochi by Essentechs. Quality repairs for split and window ACs, gas leakage, compressor issues, and blower faults.',
                'h1' => 'Sansui AC Service & Repair',
                'badge' => 'Sansui AC Service Support',
                'hero_subtitle' => 'Economical doorstep repair and maintenance for Sansui split and window air conditioners across Kochi.',
                'intro_heading' => 'Cost-Effective Service for Sansui Air Conditioners',
                'intro_paragraphs' => [
                    'Sansui air conditioners are known for straightforward operation and reliable rotary cooling compressors. As units age, capacitor degradation, fan motor resistance, and slow refrigerant leaks are common issues that our technicians can resolve on-site.',
                    'Essentechs offers fast, budget-friendly diagnostic visits for Sansui air conditioners in Kochi, restoring cool air to your home.'
                ],
                'technologies' => [
                    'Rotary Compressor Cooling Circuit',
                    'Copper Condenser Tube Systems',
                    'Turbo Cool & Sleep Mode Programming',
                    'Anti-Dust Washable Air Filters'
                ],
                'common_problems' => [
                    [
                        'title' => 'Outdoor Unit Humming but Fan Not Spinning',
                        'symptom' => 'Outdoor compressor hums, but the condenser fan remains stationary.',
                        'cause' => 'Burned-out fan motor capacitor or seized outdoor motor bearings.',
                        'solution' => 'Capacitor replacement and fan motor bearing lubrication or motor renewal.'
                    ]
                ],
                'services_offered' => [
                    'Sansui Outdoor Fan Motor & Capacitor Replacement',
                    'Refrigerant Gas Top-Up & Pressure Testing',
                    'High-Pressure Jet Cleaning for Coils and Blower',
                    'Thermostat & Sensor Calibration'
                ],
                'supported_models' => [
                    'Sansui Split Air Conditioners',
                    'Sansui Window Air Conditioners'
                ],
                'faqs' => [
                    [
                        'q' => 'Why is my Sansui outdoor fan not spinning?',
                        'a' => 'A failed dual run capacitor is the most common cause. The capacitor provides the starting phase torque for the fan motor. Essentechs technicians carry replacement capacitors on every visit.'
                    ]
                ]
            ],

            'akai' => [
                'name' => 'Akai',
                'slug' => 'akai',
                'meta_title' => 'Akai AC Service & Repair | Essentechs',
                'meta_description' => 'Prompt Akai AC repair in Kochi by Essentechs. Servicing split and window ACs with dependable parts, gas charging, and jet cleaning.',
                'h1' => 'Akai AC Service & Repair',
                'badge' => 'Akai AC Repair Support',
                'hero_subtitle' => 'Reliable diagnostic and repair solutions for Akai residential air conditioners across Kochi and Ernakulam.',
                'intro_heading' => 'Dependable Servicing for Akai Air Conditioners',
                'intro_paragraphs' => [
                    'Akai air conditioners feature Japanese-inspired styling and reliable rotary compressors designed for domestic cooling. To keep power consumption low and cooling delivery crisp, regular coil maintenance and electrical checks are recommended.',
                    'Essentechs provides dependable, prompt technician visits across Kochi for Akai air conditioners.'
                ],
                'technologies' => [
                    'High-Efficiency Rotary Compressor',
                    'Hydrophilic Aluminum Foil Evaporator Coils',
                    'Rapid Temperature Pull-Down Turbo Mode',
                    'Low-Noise Cross Flow Fan Drum'
                ],
                'common_problems' => [
                    [
                        'title' => 'Cooling Stops After 15–20 Minutes',
                        'symptom' => 'AC cools initially, then transitions to blowing warm room air.',
                        'cause' => 'Compressor thermal overload protector tripping due to high condenser head pressure or weak capacitor.',
                        'solution' => 'Condenser coil cleaning, head pressure testing, and capacitor check.'
                    ]
                ],
                'services_offered' => [
                    'Akai Compressor & Capacitor Troubleshooting',
                    'High-Pressure Jet Cleaning of Coils & Blower',
                    'Refrigerant Leak Detection & Gas Charging',
                    'Louver Swing Motor & Wiring Service'
                ],
                'supported_models' => [
                    'Akai Split Air Conditioners',
                    'Akai Window Air Conditioning Units'
                ],
                'faqs' => [
                    [
                        'q' => 'Can Essentechs service Akai ACs in Kakkanad and Kochi?',
                        'a' => 'Yes! We cover all areas across Kochi, Kakkanad, Edappally, Aluva, and nearby Ernakulam regions.'
                    ]
                ]
            ],

            'sharp' => [
                'name' => 'Sharp',
                'slug' => 'sharp',
                'meta_title' => 'Sharp AC Service & Repair | Essentechs',
                'meta_description' => 'Precision Sharp AC repair in Kochi by Essentechs. Specialists in Plasmacluster ion technology, J-Tech Inverter compressors, and PCB diagnostics.',
                'h1' => 'Sharp AC Service & Repair',
                'badge' => 'Sharp Plasmacluster Care',
                'hero_subtitle' => 'Expert diagnostic, electronic repair, and maintenance for Sharp J-Tech Inverter and Plasmacluster air conditioners in Kochi.',
                'intro_heading' => 'Advanced Air Purification & Cooling: Sharp Air Conditioners',
                'intro_paragraphs' => [
                    'Sharp air conditioners are celebrated for their patented Plasmacluster Ion technology that actively sanitizes indoor air by eliminating airborne microbes, paired with J-Tech Inverter compressors that modulate energy in fine 0.5°C increments. These refined Japanese climate systems require careful electronic handling.',
                    'Essentechs provides specialized technician visits for Sharp air conditioners in Kochi. We service Plasmacluster ionizers, J-Tech inverter control boards, and multi-sensor cooling loops with utmost care.'
                ],
                'technologies' => [
                    'Patented Plasmacluster Ion High-Density Air Purification',
                    'J-Tech Inverter with 15-Step Frequency Control',
                    'Coanda Airflow Technology for Indirect Draft-Free Cooling',
                    'Eco Mode with Super Jet Rapid Cooling Cycle',
                    '7 Shields Japanese Safety & Durability Protection'
                ],
                'common_problems' => [
                    [
                        'title' => 'Plasmacluster Indicator Light Flashing',
                        'symptom' => 'Plasmacluster blue light blinks and ion purification stops operating.',
                        'cause' => 'High-voltage ion generation pin dirty or discharge unit power supply fault.',
                        'solution' => 'Discharge needle cleaning with specialized anti-static brush and ionizer voltage test.'
                    ],
                    [
                        'title' => 'J-Tech Inverter Not Modulating Speed',
                        'symptom' => 'Compressor stays at lowest speed or fails to ramp up to cool room.',
                        'cause' => 'Outdoor ambient thermistor open-circuit or outdoor PCB microcontroller error.',
                        'solution' => 'Thermistor curve calibration, board trace testing, or PCB replacement.'
                    ]
                ],
                'services_offered' => [
                    'Sharp Plasmacluster Ionizer Servicing & Cleaning',
                    'J-Tech Inverter PCB Component-Level Diagnostics',
                    'High-Pressure Jet Wash for Coanda Airflow Coils',
                    'Nitrogen Pressure Testing & Digital Gas Refilling',
                    'Indoor Blower Fan & Louver Mechanism Servicing'
                ],
                'supported_models' => [
                    'Sharp J-Tech Inverter Split ACs with Plasmacluster',
                    'Sharp Eco Inverter 3-Star & 5-Star Series',
                    'Sharp Commercial Light Inverter Systems'
                ],
                'faqs' => [
                    [
                        'q' => 'How does Sharp Plasmacluster technology affect AC servicing?',
                        'a' => 'Plasmacluster units include an active high-voltage ionizer near the air outlet. During our jet cleaning service, our technicians isolate and protect this electronic ion generator to ensure safe, thorough cleaning without water damage.'
                    ]
                ]
            ],
        ];
    }
}
