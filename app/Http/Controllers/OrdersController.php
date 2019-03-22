<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Session;
use Illuminate\Http\Request;

/**
 * Class OrdersController
 * @package App\Http\Controllers
 */
class OrdersController extends Controller
{
    /**
     * OrdersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('showAdminOrders','showAdminOrderDetail','submitAdminOrderDetail');
        $this->middleware('auth:admin')->only('showAdminOrders','showAdminOrderDetail','submitAdminOrderDetail');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAdminOrders()
    {
        $orders = Order::with('user')->get();

        return view('admin.dashboard.orders',compact('orders'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAdminOrderDetail($id)
    {
        $order = Order::findOrFail($id);
        $cart = unserialize(base64_decode($order->cart));

        return view('admin.dashboard.order_detail',compact('order','cart'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitAdminOrderDetail(Request $request)
    {
        $order = Order::findOrFail($request->order);
        $order->confirm = $request->confirm;
        $order->save();

        return back()->with('status','با موفقیت انجام شد');
    }


    /**
     * @param Order $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cartFinish(Order $order)
    {
        $cart = unserialize(base64_decode($order->cart));

        return view('layouts.cart_finish', compact('order', 'cart'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * @param $pro
     * @param $qty
     */
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
