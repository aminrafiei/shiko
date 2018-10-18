<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function loginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {

        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $att = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($att)) {

            return redirect()->route('admin.dashboard')->with('status','logged in successfully');
        }

        return redirect()->back()->withInput($att);
    }

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();
        return redirect()->route('index');
    }
}
