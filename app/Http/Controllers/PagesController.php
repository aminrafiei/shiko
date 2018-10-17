<?php

namespace App\Http\Controllers;


use App\Post;
use App\Product;
use App\Slidebar;


class PagesController extends Controller
{
    //testing controller !!!
    //maybe changed after while!!
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::with(['admin'])->get();
        $sliBars = Slidebar::all();
        $products = Product::orderBy('created_at', 'desc')->paginate(4);

        return view('main.index', compact('products', 'sliBars'));
    }

}
