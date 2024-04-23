<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function auth(AdminLoginRequest $request)
    {

        $credentials = $request->only('email', 'password');
        // dd(auth()->guard('admin')->attempt($credentials, $request->remember_me));
        if (auth()->guard('admin')->attempt($credentials, $request->remember_me)) {

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors(['fail' => "The data you entered doesn't match our records"])->withInput();

    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
