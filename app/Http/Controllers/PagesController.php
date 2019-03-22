<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use App\Slidebar;
use Illuminate\Http\Request;


/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
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

    /**
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchCat($name)
    {
        $category = Category::all();
        $products = Product::whereHas('category', function ($query) use ($name) {

            $query->where('name', 'like', '%' . $name . '%');
        })
            ->orderBy('title')
            ->paginate(20);
        return view('layouts/all_product', compact('products', 'category'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $category = Category::all();
        if ($request->toArray()) {

            $search = $request->search;
            $products = Product::where('title', 'like', '%' . $search . '%')
                ->orderBy('title')
                ->paginate(20);

            return view('layouts/all_product', compact('products', 'category'));

        } else {
            $products = Product::paginate('20');
            return view('layouts/all_product', compact('products', 'category'));
        }

    }
}
