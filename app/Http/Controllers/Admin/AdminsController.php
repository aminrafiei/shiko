<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\GuardsController;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard()
    {
        $guard = GuardsController::checkGuard();
        return view('layouts.dashboard',compact('guard'));
    }
}
