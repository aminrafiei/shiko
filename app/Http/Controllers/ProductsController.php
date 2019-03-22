<?php


namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Http\Requests\ProductsValidator;
use App\Http\Service\ProductService;
use App\Poster;
use App\Product;
use App\Size;
use Illuminate\Http\Request;

/**
 * Class ProductsController
 * @package App\Http\Controllers
 */
class ProductsController extends Controller
{
    /**
     * @var ProductService
     */
    protected $service;

    /**
     * ProductsController constructor.
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->service = $productService;
        $this->middleware('auth:admin')->except(['showProductsDetails']);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showStoreDetails($id)
    {
        $product = Product::with(['color', 'size'])->find($id);

        return view('admin.dashboard.store_details', compact('product'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUpdate(Request $request, $id)
    {
        $this->validate($request, [
            "size.*" => 'required|numeric',
        ]);

        $product = Product::with(['color', 'size'])->find($id);
        $total = 0;

        foreach ($product->size as $size) {
            $si = $request->get('size');
            $size->pivot->qty = $si[$size->id];
            $total += $si[$size->id];
            $size->pivot->save();
        }

        $product->total_qty = $total;
        $product->save();

        return back()->with('status', 'update successfully');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showStore()
    {
        $products = Product::all();

        return view('admin.dashboard.store', compact('products'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProductsDetails($id)
    {
        $product = Product::with(['size', 'color'])->findOrFail($id);

        return view('layouts.product', compact('product'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminShowProduct()
    {
        $products = Product::paginate(10);

        return view('admin.dashboard.products', compact('products'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminShowProductID($id)
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $product = Product::with(['category', 'picture'])->findOrFail($id);

        return view('admin.dashboard.update_product', compact('product', 'categories', 'sizes', 'colors'));
    }


    /**
     * @param ProductsValidator $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function productUpdate(ProductsValidator $request, $id)
    {
        $request->validated();

        $this->service->update($request, $id);

        return redirect()->route('admin.dashboard')->with('status', 'successfully updated!');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeProduct(Request $request)
    {
        $ids = $request->checkbox;
        foreach ($ids as $id) {
            Product::where('id', $id)->delete();
        }
        return back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addProduct()
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();

        return view('admin.dashboard.add_product', compact('categories', 'sizes', 'colors'));
    }

    /**
     * @param ProductsValidator $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addProductSubmit(ProductsValidator $request)
    {
        $request->validated();

        $this->service->store($request);

        return redirect()->route('admin.dashboard')->with('status', 'successfully created!');
    }
}
