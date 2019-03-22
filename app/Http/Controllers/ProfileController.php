<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidator;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $user = Auth::getUser();
        $orders = $user->order()->paginate('5');

        return view('layouts.user_profile_new', compact('user', 'orders'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showInfo()
    {
        $user = Auth::getUser();

        return view('layouts.user_information', compact('user'));
    }

    /**
     * @param UserValidator $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitInfo(UserValidator $request)
    {
        $validetor = $request->validated();

        $user = Auth::getUser();

        $user->age = (int)$request->age;
        $user->name = $request->name;
        $user->postal_code = $request->postal_code;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('status','اطلاعات با موفقیت ثبت شد');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function fav()
    {
        $user = Auth::getUser();

        return view('layouts.user_favorites', compact('user'));
    }


}
