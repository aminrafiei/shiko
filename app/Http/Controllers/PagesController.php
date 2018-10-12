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
	    $sliBars=Slidebar::all();
        $products = Product::paginate(20);
        return view('main.index',compact('products','sliBars'));
    }

}
