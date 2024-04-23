<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest','throttle:5,1']);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $otp=rand(1000, 9999);
        $user = User::create([
            'email' => $request->email,
            'password' => $request->password,
            'otp_code' => $otp,
        ]);

        // Mail::to($request->email)->send(new WelcomeMail($otp));

        auth()->login($user);

        return redirect()->route('verify')->with('success','لقد قمنا بإرسال رمز سري علي بريدك الإلكتروني لتأكيد حسابك');
    }
}
