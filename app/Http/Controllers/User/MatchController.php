<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function personal()
    {
        if(!session('stripe_payment_id'))
        {
            return redirect()->route('dashboard.home');
        }
        return view('User.match.personal');
    }
}
