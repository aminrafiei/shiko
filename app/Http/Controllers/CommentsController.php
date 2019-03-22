<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentsValidator;
use App\Http\Service\CommentService;
use App\Product;
use Illuminate\Http\Request;

/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class CommentsController extends Controller
{
    protected $service;

    /**
     * CommentsController constructor.
     * @param CommentService $commentService
     */
    public function __construct(CommentService $commentService)
    {
        $this->service = $commentService;
        $this->middleware('auth:admin')->except('newComment');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showComments()
    {
        $comments = Comment::all();

        return view('admin.dashboard.comments', compact('comments'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCommentDetail($id)
    {
        $product = Product::with(['comment'])->find($id);

        return view('admin.dashboard.comment_details', compact('product'));
    }

    /**
     * @param CommentsValidator $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newComment(CommentsValidator $request, $id)
    {
        $request->validated();

        $this->service->store($request, $id);

        return redirect()->back()->with('status', __('messages.new_comment'));

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
