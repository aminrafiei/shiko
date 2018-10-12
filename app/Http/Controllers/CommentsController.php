<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentsValidator;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin')->except('newComment');
    }

    public function showComments()
    {
        $comments = Comment::all();
        return view('admin.dashboard.comments', compact('comments'));
    }

    public function showCommentDetail($id)
    {
        $product = Product::find($id);//->with(['comment']);

        return view('admin.dashboard.comment_details', compact('product'));
    }

    public function newComment(CommentsValidator $request, $id)
    {
        $validated = $request->validated();

        $product = Product::find($id);

        $com = new Comment();
        $com->title = $request->title;
        $com->description = $request->description;
        $com->user_id = Auth::user()->id;

        $product->comment()->save($com);
        return redirect()->back()->with('status', __('messages.new_comment'));

    }

    public function publishCommentProduct(Request $request)
    {
        if ($id = $request->publish) {
            Comment::where('id', $id)->update(['isShow' => 1]);
            return redirect()->back()->with('status', 'successfully changed!!');
        } else if ($id = $request->delete) {
            Comment::where('id', $id)->delete();
            return redirect()->back()->with('status', 'successfully deleted!!');
        } else if ($id = $request->hide) {
            Comment::where('id', $id)->update(['isShow' => 0]);
            return redirect()->back()->with('status', 'successfully changed!!');
        }
        return redirect()->back()->with('warning', 'something wrong !!');
    }

    public function deleteComment(Request $request)
    {
        $id = $request->delete;

    }

    public function publishComment(Request $request)
    {
        $id = $request->checkbox;
        foreach ($id as $value) {
            $comment = Comment::find($value);
            $comment->update(['isShow' => 1]);
        }
        return redirect()->back()->with('status', 'successfully changed!');
    }
}
