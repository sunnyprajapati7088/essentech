<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    /**
     * Show the forms page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function forms()
    {        return view('admin.pages.forms');
    }
    /**
     * Show the tables page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tables()
    {        return view('admin.pages.tables');
    }
}
