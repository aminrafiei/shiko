<?php
/**
 * Created by PhpStorm.
 * User: amin
 * Date: 3/22/19
 * Time: 3:55 PM
 */

namespace App\Http\Service;

use App\Comment;
use App\Jobs\CommentsStoreJob;
use App\Product;
use Auth;

class CommentService
{
    public function store($request, $product_id)
    {
        $product = Product::find($product_id);

//        dispatch(new CommentsStoreJob($request, $product));
        $comment = new Comment();
        $comment->title = $request->title;
        $comment->description = $request->description;
        $comment->user_id = Auth::user()->id;

        $product->comment()->save($comment);
    }
}