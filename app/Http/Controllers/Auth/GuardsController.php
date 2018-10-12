<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GuardsController extends Controller
{
    public static function checkGuard()
    {
        if (Auth::guard('admin')->check()) {
            return "admin";
        } elseif (Auth::guard('user')->check()) {
            return "user";
        } elseif (Auth::guard('client')->check()) {
            return "client";
        }

    }
}
