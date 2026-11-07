<?php

namespace App\Services\Catalog;

class AcCatalog
{
    /**
     * Get all 11 AC Service Categories
     */
    public static function getServices(): array
    {
        return [
            [
                'title' => 'AC Repair',
                'description' => 'Fast component-level diagnostics and repair for inverter PCB boards, dual rotary compressors, starting capacitors, and electrical contactors.',
                'icon' => 'fas fa-wrench',
                'cta_text' => 'Book AC Repair',
                'badge' => 'Certified Tech'
            ],
            [
                'title' => 'AC Service',
                'description' => 'Comprehensive multi-point inspection including operating pressure verification, electrical current draw analysis, and louver calibration.',
                'icon' => 'fas fa-cogs',
                'cta_text' => 'Book AC Service',
                'badge' => 'Annual Care'
            ],
            [
                'title' => 'AC Installation',
                'description' => 'Professional split and window AC mounting, vibration-damped outdoor bracket installation, vacuum-tested copper line flaring, and electrical wiring.',
                'icon' => 'fas fa-tools',
                'cta_text' => 'Request Installation',
                'badge' => 'OEM Standard'
            ],
            [
                'title' => 'AC Maintenance',
                'description' => 'Preventive maintenance programs and Annual Maintenance Contracts (AMC) to minimize unexpected breakdowns and sustain optimal energy ratings.',
                'icon' => 'fas fa-calendar-check',
                'cta_text' => 'Get Maintenance',
                'badge' => 'Preventive'
            ],
            [
                'title' => 'Split AC Service',
                'description' => 'Dedicated indoor and outdoor servicing for high-wall split air conditioners, including deep chemical foam washing and cross-flow barrel de-moulding.',
                'icon' => 'fas fa-snowflake',
                'cta_text' => 'Service Split AC',
                'badge' => 'Split Systems'
            ],
            [
                'title' => 'Window AC Service',
                'description' => 'Complete slide-out chassis washing, condenser descaling, fan motor bearing lubrication, and thermostat recalibration for window units.',
                'icon' => 'fas fa-window-maximize',
                'cta_text' => 'Service Window AC',
                'badge' => 'Window Units'
            ],
            [
                'title' => 'AC Inspection',
                'description' => 'Pre-season full health audit checking suction/discharge pressures, delta-T air temperature split, earthing resistance, and coil corrosion.',
                'icon' => 'fas fa-clipboard-check',
                'cta_text' => 'Schedule Inspection',
                'badge' => 'Thorough'
            ],
            [
                'title' => 'AC Cooling Problem',
                'description' => 'Accurate troubleshooting for weak airflow, slow temperature drop, frozen copper pipes, and low refrigerant gas using electronic halogen detectors.',
                'icon' => 'fas fa-temperature-low',
                'cta_text' => 'Restore Cooling',
                'badge' => 'Most Common'
            ],
            [
                'title' => 'AC Water Leakage Repair',
                'description' => 'High-pressure condensate line suction clearing, drain pan algae treatment, pipe re-pitching, and crack repairs to eliminate indoor dripping.',
                'icon' => 'fas fa-tint',
                'cta_text' => 'Stop Water Leak',
                'badge' => 'Leak Proof'
            ],
            [
                'title' => 'AC Gas/Leakage Diagnosis',
                'description' => 'Nitrogen hold testing up to 350 PSI, electronic sniffer pinhole leak location, copper brazing, and precision digital scale refrigerant refilling (R32, R410A).',
                'icon' => 'fas fa-gas-pump',
                'cta_text' => 'Fix Gas Leak',
                'badge' => 'Pure Gas'
            ],
            [
                'title' => 'AC Electrical Repair',
                'description' => 'Micro-soldering burned IPM power chips, replacing communication optocouplers, replacing dual run capacitors, and rewiring burned MCB switches.',
                'icon' => 'fas fa-bolt',
                'cta_text' => 'Fix Electrical',
                'badge' => 'Microchip Tech'
            ],
        ];
    }

    /**
     * Get all 20 Common AC Problems & Solutions
     */
    public static function getProblems(): array
    {
        return [
            [
                'title' => 'AC Not Cooling',
                'keyword' => 'ac not cooling',
                'symptom' => 'The air conditioner blows ambient room temperature air even when set to 16°C or 18°C.',
                'cause' => 'Choked condenser coils, defective compressor starting capacitor, low refrigerant gas, or failed outdoor inverter board.',
                'solution' => 'High-pressure jet wash, capacitor replacement, nitrogen leak detection, and digital gas refilling.'
            ],
            [
                'title' => 'AC Not Working',
                'keyword' => 'ac not working',
                'symptom' => 'The entire system is unresponsive; no beeping sound when pressing the remote, no display LEDs lit.',
                'cause' => 'Blown primary fuse on the indoor PCB, tripped MCB breaker, or defective power supply SMPS circuit.',
                'solution' => 'Indoor PCB power supply testing, fuse replacement, and household breaker voltage verification.'
            ],
            [
                'title' => 'AC Low Cooling',
                'keyword' => 'ac low cooling',
                'symptom' => 'Airflow feels slightly cool but takes hours to bring down room temperature on humid afternoons.',
                'cause' => 'Thick dust layer clogging indoor nylon mesh filters, dirty cooling fins, or partial refrigerant loss.',
                'solution' => 'Deep antibacterial foam jet clean, filter sanitization, and operating pressure check.'
            ],
            [
                'title' => 'AC Cooling Problem',
                'keyword' => 'ac cooling problem',
                'symptom' => 'Compressor frequently cuts off after 5 minutes of running, leaving room warm and humid.',
                'cause' => 'Overheating outdoor compressor due to direct sun exposure, choked heat sink, or faulty outdoor thermistor.',
                'solution' => 'Heat-sink thermal paste reapplication, cleaning condenser fins, and sensor resistance calibration.'
            ],
            [
                'title' => 'AC Water Leakage',
                'keyword' => 'ac water leakage',
                'symptom' => 'Water overflows from the front indoor casing or drips down behind the wall mounting bracket.',
                'cause' => 'Condensate drain tray clogged with dust and fungal slime, or sagging drain pipe creating an airlock.',
                'solution' => 'High-pressure condensate drain flush, drain tray antibacterial treatment, and slope re-alignment.'
            ],
            [
                'title' => 'AC Leaking Water',
                'keyword' => 'ac leaking water',
                'symptom' => 'Puddles of water accumulate on bedroom floor tiles directly underneath the indoor high-wall unit.',
                'cause' => 'Cracked plastic drain tray, detached drain hose fitting, or ice melting from a frozen coil.',
                'solution' => 'Drain tray sealing/replacement, hose re-clamping, and resolving underlying coil frost.'
            ],
            [
                'title' => 'AC Making Noise',
                'keyword' => 'ac making noise',
                'symptom' => 'Squeaking, rattling, or loud rumbling sounds during operation.',
                'cause' => 'Unbalanced cross-flow blower barrel with dust clumps, dry blower motor bushings, or loose casing screws.',
                'solution' => 'Blower wheel balancing, high-temperature bushing lubrication, and casing damper tightening.'
            ],
            [
                'title' => 'AC Not Turning On',
                'keyword' => 'ac not turning on',
                'symptom' => 'System fails to respond to remote or manual emergency button on the front panel.',
                'cause' => 'Defective remote receiver infrared eye, open transformer winding, or damaged communication cable.',
                'solution' => 'IR receiver board replacement, indoor/outdoor cable continuity test, and main board diagnosis.'
            ],
            [
                'title' => 'AC Compressor Problem',
                'keyword' => 'ac compressor problem',
                'symptom' => 'Outdoor fan spins but compressor does not start, or vibrates heavily with a loud humming noise.',
                'cause' => 'Weak dual run capacitor, burnt terminal pins, open motor winding, or inverter IPM chip failure.',
                'solution' => 'Capacitor replacement, terminal lug recrimping, or inverter PCB driver module replacement.'
            ],
            [
                'title' => 'AC Gas Leakage',
                'keyword' => 'ac gas leakage',
                'symptom' => 'Ice forming on thin copper discharge pipe, oily residue around flare joints, and declining cooling.',
                'cause' => 'Pinhole corrosion on copper U-bends from coastal humidity or loose flare brass nuts.',
                'solution' => 'Electronic sniffer leak detection, brazing copper pinholes, nitrogen pressure test, and gas charging.'
            ],
            [
                'title' => 'AC Gas Problem',
                'keyword' => 'ac gas problem',
                'symptom' => 'Suction pressure is drastically low or fluctuating wildly, causing poor cooling.',
                'cause' => 'Refrigerant contamination with moisture, choked capillary filter drier, or improper previous gas charge.',
                'solution' => 'Full recovery of contaminated gas, nitrogen purge, deep two-stage vacuuming, and pure factory gas refilling.'
            ],
            [
                'title' => 'AC PCB Problem',
                'keyword' => 'ac pcb problem',
                'symptom' => 'Timer or power LED blinks error codes (e.g., E1, F3, CH05), compressor frequency erratic.',
                'cause' => 'Voltage surges burning IPM transistors, swollen filter capacitors, or micro-controller communication breakdown.',
                'solution' => 'On-site PCB diagnostics, component-level micro-soldering, and protective conformal recoating.'
            ],
            [
                'title' => 'AC Remote Not Working',
                'keyword' => 'ac remote not working',
                'symptom' => 'Handheld remote display works, but AC does not beep or accept mode/temperature changes.',
                'cause' => 'Defective infrared sensor diode on the indoor display receiver board, or corroded battery terminals.',
                'solution' => 'Display board sensor replacement or universal OEM remote programming.'
            ],
            [
                'title' => 'AC Fan Not Working',
                'keyword' => 'ac fan not working',
                'symptom' => 'Indoor unit turns on and compressor engages, but no cold air is blown out of the horizontal louver.',
                'cause' => 'Seized blower motor bearing, blown fan capacitor on the indoor board, or jammed blower barrel.',
                'solution' => 'Replacing blower motor capacitor, lubricating bearings, or installing new BLDC fan motor.'
            ],
            [
                'title' => 'AC Indoor Unit Not Working',
                'keyword' => 'ac indoor unit not working',
                'symptom' => 'Indoor unit louvers flap shut immediately after turning on, with LED lights blinking in error sequence.',
                'cause' => 'Indoor room thermistor or coil temperature sensor open-circuit or short-circuit.',
                'solution' => 'Thermistor resistance curve calibration and dual sensor replacement.'
            ],
            [
                'title' => 'AC Outdoor Unit Not Working',
                'keyword' => 'ac outdoor unit not working',
                'symptom' => 'Indoor unit runs continuously blowing warm room air, but outdoor unit remains silent.',
                'cause' => 'Communication wire severed, outdoor PCB power fuse blown, or outdoor compressor contactor burnt.',
                'solution' => 'Signal wire testing, outdoor board fuse replacement, and magnetic contactor renewal.'
            ],
            [
                'title' => 'AC Bad Smell',
                'keyword' => 'ac bad smell',
                'symptom' => 'Musty, damp, or sour moldy smell fills the room as soon as the AC blower starts.',
                'cause' => 'Algae, bacteria, and fungal mould colonies breeding in the damp cooling fins and dark condensate tray.',
                'solution' => 'Deep antimicrobial foam wash, high-pressure jet cleaning of blower barrel, and coil sanitization.'
            ],
            [
                'title' => 'AC Freezing Problem',
                'keyword' => 'ac freezing problem',
                'symptom' => 'Thick white frost or solid ice coats the indoor cooling coil and copper pipes.',
                'cause' => 'Severely choked air filters restricting airflow, failed blower fan, or low refrigerant gas charge.',
                'solution' => 'Thorough coil de-icing, cleaning filters, and verifying gas charge.'
            ],
            [
                'title' => 'AC Ice Formation',
                'keyword' => 'ac ice formation',
                'symptom' => 'Pieces of ice shoot out of the blower louver or ice forms along the outdoor service valves.',
                'cause' => 'Restricted refrigerant expansion caused by low suction pressure or choked indoor return air.',
                'solution' => 'Restoring balanced airflow and charging pure refrigerant to exact factory PSI specifications.'
            ],
            [
                'title' => 'AC Taking Too Long to Cool',
                'keyword' => 'ac taking too long to cool',
                'symptom' => 'AC takes more than 45–60 minutes to make the room comfortable, running electricity bills high.',
                'cause' => 'Dust blanket on outdoor condenser reducing heat dissipation, sluggish inverter frequency, or minor gas leak.',
                'solution' => 'High-pressure condenser wash, inverter compressor performance test, and subcooling check.'
            ]
        ];
    }
}
