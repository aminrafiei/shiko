<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidator;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::getUser();
        $orders = $user->order()->paginate('5');
        return view('layouts.user_profile_new', compact('user', 'orders'));
    }

    public function order($id)
    {
        $user = Auth::getUser();

        foreach ($user->order as $ord){
            if ($ord->order_id == $id){

                $cart = unserialize(base64_decode($ord->cart));
                return view('layouts.user_orders',compact('cart','ord'));

            }
        }
        return view(404);

    }


    public function showInfo()
    {
        $user = Auth::getUser();
        return view('layouts.user_information', compact('user'));
    }

    public function submitInfo(UserValidator $request)
    {
        $validetor = $request->validated();

        $user = Auth::getUser();

//        dd($request->toArray());
//        $user->update($request->except('_token','age'));
        $user->age = (int)$request->age;
        $user->name = $request->name;
        $user->postal_code = $request->postal_code;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('status','اطلاعات با موفقیت ثبت شد');

    }

    public function fav()
    {
        $user = Auth::getUser();
        return view('layouts.user_favorites', compact('user'));
    }


}
