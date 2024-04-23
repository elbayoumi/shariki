<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $request = auth()->user()->requests()->first();

        return view('User.home', compact('request'));
    }


    public function documentations()
    {
        return view('User.documentations');
    }

    public function terms()
    {
        return view('User.terms');
    }


    public function logout()
    {
        auth()->logout();
        Log::info('User logged out');
        return redirect()->route('login');
    }
}
