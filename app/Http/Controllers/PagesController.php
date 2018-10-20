<?php

namespace App\Http\Controllers;


use App\Post;
use App\Product;
use App\Slidebar;
use Illuminate\Http\Request;


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

    public function search(Request $request)
    {
        if ($request->toArray()) {

            $search = $request->search;
            $products = Product::where('title', 'like', '%' . $search . '%')
                ->orderBy('title')
                ->paginate(20);
            return view('layouts/all_product', compact('products'));

        } else {
            $products = Product::paginate('20');
            return view('layouts/all_product', compact('products'));
        }

    }

}
