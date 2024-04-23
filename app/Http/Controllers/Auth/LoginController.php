<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\OTPCodeRequest;
use App\Mail\ResendOTPMail;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('login', 'authenticate');
        $this->middleware('auth')->only('verify', 'verifycode', 'resend');
        $this->middleware('throttle:3,1')->only('authenticate');
        $this->middleware('throttle:5,1')->only('verifycode','resend');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'fail' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة',
        ])->withInput();
    }

    public function verify()
    {
        return view('auth.verify');
    }

    public function verifycode(OTPCodeRequest $request)
    {

        if (auth()->user()->otp_code == $request->otp_code) {
            auth()->user()->update([
                'verified_at' => now(),
            ]);
            return redirect()->route('dashboard.home');
        }

        return back()->withErrors([
            'fail' => 'الرمز غير صحيح',
        ])->withInput();
    }

    public function resend()
    {
        $user = auth()->user();

        $user->update([
            'otp_code' => rand(1000, 9999),
        ]);

        Mail::to($user->email)->send(new ResendOTPMail($user));

        return back()->with('success', 'تم إعادة إرسال الرمز');

    }


    public function logout()
    {
        auth()->logout();
        Log::info('New User logged out');
        return redirect()->route('login');
    }
}
