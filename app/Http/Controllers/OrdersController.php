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

    public function confirm(Request $request)
    {

        $order = Order::create($request->only('order_id', 'cart', 'user_id'));
        if (Session::has('cart')) {

            $cart = Session::get('cart');
            foreach ($cart->items as $item) {

                $pro = $item['item']->size->where('id', $item['size'])->first()->pivot;
                $qty = $item['qty'];
                $this->storeDeq($pro, $qty);
            }
        }
        Session::has('cart') ? $request->session()->forget('cart') : null;

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
