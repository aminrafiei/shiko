<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class api extends Controller
{

    public function showStoreDetails($id)
    {
        $product = Product::with(['color', 'size'])->find($id);
        return $product;
    }
}