<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function index($token)
    {
        return view('auth.password-reset',compact('token'));
    }

    public function submit(ResetPasswordRequest $request,$token)
    {

        $rec = DB::table('password_resets')
        ->where('token', $token)
        ->where('created_at', '>', now()->subHours(2))
        ->where('email', $request->email)
        ->count();

        if($rec)
        {
            User::where('email', $request->email)->update(['password' => bcrypt($request->password)]);
            DB::table('password_resets')->where('email', $request->email)->delete();

            return redirect()->route('login')->with('success','تمت إعادة تعيين كلمة السر بنجاح');
        }

        return redirect()->route('login')->withErrors('حدث خطأ أثناء إعادة تعيين كلمة المرور');
    }
}
