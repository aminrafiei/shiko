<?php
/**
 * Created by PhpStorm.
 * User: amin
 * Date: 3/22/19
 * Time: 4:05 PM
 */

namespace App\Http\Service;


use App\Picture;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProductService
{
    /**
     * @param $request
     */
    public function store($request)
    {
        $product = new Product();

        $product->admin_id = Auth::user()->id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->tag = $request->tag;
        $product->color_id = $request->color_id;

        if ($request->hasFile('image')) {
            $product->image = $this->storeImage($request);
        }

        $product->save();

        sleep(1);//for syncing

        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                global $i;
                $filename = (time() + $i) . "." . $image->getClientOriginalExtension();
                $location = public_path("images/" . $filename);
                Image::make($image)->save($location);
                $i++;

                Picture::create(['product_id' => $product->id, 'picture' => $filename]);
            }
        }

        $product->size()->attach($request->get('size_id'));
        $product->category()->attach($request->get('category_id'));
    }

    /**
     * @param $request
     * @param $product_id
     */
    public function update($request, $product_id)
    {
        $product = Product::find($product_id);

        $product->update($request->only('title', 'price', 'tag', 'description', 'color_id'));
        $product->color_id = $request->color_id;

        if ($request->hasFile('image')) {
            $product->image = $this->storeImage($request);
        }

        $product->save();

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
        $product->category()->sync($request->get('category_id'));
    }

    /**
     * @param $request
     * @return string
     */
    private function storeImage($request)
    {
        $img = $request->file('image');
        $filename = time() . "." . $img->getClientOriginalExtension();
        $location = public_path("images/" . $filename);
        Image::make($img)->save($location);

        return $filename;
    }

}