<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slidebar;
use Illuminate\Http\Request;

/**
 * Class SpecialProductsController
 * @package App\Http\Controllers
 */
class SpecialProductsController extends Controller
{
    /**
     * SpecialProductsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeSpecialProduct($id)
    {
        Slidebar::where('id', $id)->delete();

        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSpecialProductID($id)
    {
        $slidebar = Slidebar::findOrFail($id);

        return view('admin.dashboard.edit_special_product', compact('slidebar'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editSpecialProduct(Request $request, $id)
    {
        $newID = $request->product_id;
        $image = Product::where('id', $newID)->value('image');
        if ($image == null) {
            return back()->with('message', 'تصویر کالایی که انتخاب کردید وجود ندارد');
        }
        $sliBar = Slidebar::find($id);
        $sliBar->update($request->only('product_id'));
        $sliBar->image = $image;
        $sliBar->update([
            'product_id' => $newID,
            'image' => $image
        ]);

        return back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function specialProduct()
    {
        $sliBars = Slidebar::all();

        return view('admin.dashboard.special_product', compact('sliBars'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function specialProductSubmit(Request $request)
    {
        $id = $request->getId;
        $image = Product::where('id', $id)->value('image');
        if ($image == null) {
            return back()->with('message', 'تصویر کالایی که انتخاب کردید وجود ندارد');
        }
        $sliBar = new Slidebar();
        $sliBar->product_id = $id;
        $sliBar->image = $image;
        $sliBar->save();

        return back();
    }
}
