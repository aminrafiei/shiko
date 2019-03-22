<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * Class AdminLoginController
 * @package App\Http\Controllers\Admin
 */
class AdminLoginController extends Controller
{
    /**
     * AdminLoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('AdminLogout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginForm()
    {
        return view('admin.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {

        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $att = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($att)) {

            return redirect()->route('admin.dashboard')->with('status', 'logged in successfully');
        }

        return redirect()->back()->withInput($att);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('index');
    }
}
