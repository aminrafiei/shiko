<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Size;
use Illuminate\Http\Request;
use Session;

class CartsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCart()
    {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        //$sizes = $cart->items[12]['item']->size->where('id',11)->first();
        return view('layouts.cart', compact('cart'));
    }

    public function showCartConfirm()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        return view('layouts.factor', compact('cart'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::with('size')->find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$request->get('size'));

        $request->session()->put('cart', $cart);
        return back();
    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = Cart::deleteItem(Session::get('cart'), $id);
        $request->session()->put('cart', $cart);
        return back()->with('status','successfully remove!');
    }

    //must be changed
    public function increaseQty(Request $request,$id)
    {
        $cart = Cart::changeQty(Session::get('cart'),$id,'plus');
        $request->session()->put('cart', $cart);
        return back();
    }

    //must be changed
    public function decreaseQty(Request $request,$id)
    {
        $cart = Cart::changeQty(Session::get('cart'),$id,'decrease');
        $request->session()->put('cart', $cart);
        return back();
    }

}
