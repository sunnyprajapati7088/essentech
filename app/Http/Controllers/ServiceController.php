<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function acService()
    {
        return view('services.ac-service');
    }

    public function washingMachineRepair()
    {
        return view('services.washing-machine-repair');
    }

    public function refrigeratorRepair()
    {
        return view('services.refrigerator-repair');
    }

    public function microwaveOvenRepair()
    {
        return view('services.microwave-oven-repair');
    }
    public function installationUninstallation()
    {
        return view('services.installation-uninstallation');
    }
    public function amc()
    {
        return view('services.amc');
    }
    public function services(){
        return view('services.services');
    }
}
