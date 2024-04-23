<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('throttle:3,1')->only('submit');
    }

    public function index()
    {
        return view('auth.password-forgot');
    }

    public function submit(ForgotPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {

            $token = Str::random(64);

            DB::table('password_resets')->insertGetId([
                'email' => $request->email,
                'token' => $token,
                'created_at' => now()
            ]);

            Mail::to($request->email)->send(new ResetPasswordMail($token));
        }

        return redirect()->route('login')->with('success', 'إذا كان البريد الإلكتروني مسجل سيتم إرسال رابط إعادة تعيين كلمة المرور');
    }
}
