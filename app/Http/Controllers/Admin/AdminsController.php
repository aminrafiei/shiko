<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\GuardsController;

/**
 * Class AdminsController
 * @package App\Http\Controllers\Admin
 */
class AdminsController extends Controller
{
    /**
     * AdminsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        $guard = GuardsController::checkGuard();

        return view('layouts.dashboard', compact('guard'));
    }
}
