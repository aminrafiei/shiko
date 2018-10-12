<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        //dd($request->toArray());
        Auth::user()->posts()->create($request->except('_token'));

        return redirect()->route('admin.dashboard')->with('status', 'successfully created!');
    }
}
