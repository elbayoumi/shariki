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
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        return redirect()->route('dashboard.home');
    }
    public function clientDashboard()
    {
        return view('clientDashboard');
    }
    public function faq()
    {
        return view('faq');
    }
    public function documentations()
    {
        return view('documentations');
    }
    public function terms()
    {
        return view('termsAndConditions');
    }

}
