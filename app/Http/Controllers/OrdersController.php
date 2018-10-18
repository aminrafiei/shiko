<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Session;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cartFinish(Order $order)
    {

        $cart = unserialize(base64_decode($order->cart));
        return view('layouts.cart_finish', compact('order', 'cart'));
    }


    public function confirm(Request $request)
    {
        $oldcart = $request->only('cart');
        $cart = unserialize(base64_decode($oldcart['cart']));

        if ($cart->totalQuantity > 0) {
            $order = Order::create($request->only('order_id', 'cart', 'user_id','peyment_type'));

            if (Session::has('cart')) {

                $cart = Session::get('cart');
                foreach ($cart->items as $item) {

                    $pro = $item['item']->size->where('id', $item['size'])->first()->pivot;
                    $qty = $item['qty'];
                    $this->storeDeq($pro, $qty);
                }
            }
            Session::has('cart') ? $request->session()->forget('cart') : null;

            return $this->cartFinish($order);
        }
    }

    public function storeDeq($pro, $qty)
    {
        $product = Product::with(['size'])->find($pro->product_id);
        foreach ($product->size as $size) {

            if ($size->id == $pro->size_id) {
                $size->pivot->qty -= $qty;
                $product->total_qty -= $qty;
            }

            $size->pivot->save();
        }
        $product->save();
    }
}
