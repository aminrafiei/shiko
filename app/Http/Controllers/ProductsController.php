<?php


namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Color;
use App\Comment;
use App\Http\Requests\ProductsValidator;
use App\Picture;
use App\Poster;
use App\Product;
use App\Size;
use App\Slidebar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin')->except(['showProductsDetails']);
    }

    public function showStoreDetails($id)
    {
        $product = Product::with(['color', 'size'])->find($id);
        return view('admin.dashboard.store_details', compact('product'));
    }


    public function storeUpdate(Request $request, $id)
    {
        /*
        $this->validate($request, [
            'color' => 'required|numeric',
            'size' => 'required|numeric',
        ]);
        */
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


    public function showStore()
    {
        $products = Product::all();
        return view('admin.dashboard.store', compact('products'));
    }

    public function showProductsDetails($id)
    {
        $product = Product::with(['size', 'color'])->findOrFail($id);//->with(['comment','picture']);
        return view('layouts.product', compact('product'));
    }

    public function adminShowProduct()
    {
        $products = Product::paginate(10);
        return view('admin.dashboard.products', compact('products'));
    }

    public function adminShowProductID($id)
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $product = Product::with(['category', 'picture'])->findOrFail($id);
        return view('admin.dashboard.update_product', compact('product', 'categories', 'sizes', 'colors'));
        //return view('admin.dashboard.product_details', compact('product'));
    }


    public function productUpdate(ProductsValidator $request, $id)
    {

        $validated = $request->validated();
        $product = Product::find($id);
        $product->update($request->only('title', 'price', 'tag', 'description', 'color_id'));
        $product->color_id = $request->color_id;
        $product->save();

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . "." . $img->getClientOriginalExtension();
            $location = public_path("images/" . $filename);
            Image::make($img)->save($location);
            $product->image = $filename;
            $product->save();
        }
        if ($request->hasFile('images')) {

            $pic = Picture::where('product_id', $product->id)->get();

            foreach ($request->images as $image) {

                global $i;
                $filename = (time() + $i) . "." . $image->getClientOriginalExtension();
                $location = public_path("images/" . $filename);
                Image::make($image)->save($location);
                if ($i == null)
                    $i = 0;
                $pp = Picture::find($pic[$i]->id);
                $pp->update([
                    'product_id' => $product->id,
                    'picture' => $filename
                ]);
                $i++;
            }
        }

        $product->size()->sync($request->get('size_id'));
        //$product->color()->sync($request->get('color_id'));
        $product->category()->sync($request->get('category_id'));
        return redirect()->route('admin.dashboard')->with('status', 'successfully updated!');

    }

    public function removeProduct(Request $request)
    {
        $ids = $request->checkbox;
        foreach ($ids as $id) {
            Product::where('id', $id)->delete();
        }
        return back();
    }

    public function addProduct()
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        //dd($categories->toArray());
        return view('admin.dashboard.add_product', compact('categories', 'sizes', 'colors'));
    }

    public function addProductSubmit(ProductsValidator $request)
    {
        //not really hard code =D

        $validated = $request->validated();

        $product = new Product;
        $product->admin_id = Auth::user()->id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->tag = $request->tag;
        $product->color_id = $request->color_id;


        if ($request->hasFile('image')) {

            $img = $request->file('image');
            $filename = time() . "." . $img->getClientOriginalExtension();
            $location = public_path("images/" . $filename);

            Image::make($img)->save($location);
            $product->image = $filename;
        }

        $product->save();
        sleep(1);
        if ($request->hasFile('images')) {
            $i = 1;
            foreach ($request->images as $image) {

                global $i;

                $filename = (time() + $i) . "." . $image->getClientOriginalExtension();
                $location = public_path("images/" . $filename);
                Image::make($image)->save($location);
                $i++;

                Picture::create([
                    'product_id' => $product->id,
                    'picture' => $filename
                ]);

            }
        }

        $product->size()->attach($request->get('size_id'));
        $product->category()->attach($request->get('category_id'));
        return redirect()->route('admin.dashboard')->with('status', 'successfully created!');
    }


}
