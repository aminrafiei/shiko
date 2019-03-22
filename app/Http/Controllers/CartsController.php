<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

/**
 * Class CartsController
 * @package App\Http\Controllers
 */
class CartsController extends Controller
{
    /**
     * CartsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCart()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = Cart::makeInstance($oldCart);

        return view('layouts.cart', compact('cart'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCartConfirm()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart =Cart::makeInstance($oldCart);

        return view('layouts.factor', compact('cart'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart(Request $request, $id)
    {
        $product = Product::with('size')->find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = Cart::makeInstance($oldCart);
        $cart->add($product, $request->get('size'));
        $request->session()->put('cart', $cart);

        return back();
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeFromCart(Request $request, $id)
    {
        $cart = Cart::deleteItem(Session::get('cart'), $id);
        $request->session()->put('cart', $cart);

        return back()->with('status', 'successfully remove!');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function increaseQty(Request $request, $id)
    {
        $cart = Cart::changeQty(Session::get('cart'), $id, 'plus');
        $request->session()->put('cart', $cart);

        return back();
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function decreaseQty(Request $request, $id)
    {
        $cart = Cart::changeQty(Session::get('cart'), $id, 'decrease');
        $request->session()->put('cart', $cart);

        return back();
    }

}
