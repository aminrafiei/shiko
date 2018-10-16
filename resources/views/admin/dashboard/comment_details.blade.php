@extends('layouts.dashboard')

@section('cms_content')

    <div class="container-fluid">
        <div class="text-right">
            <strong><h1>نظرات</h1></strong>
            <a href={{route('show.products.details',['id'=>$product->id])}}><h2>{{$product->title}}</h2></a>
            <div class="row">
                @foreach($product->comment as $comment)
                    <div class="card col-4 mx-2 text-center">
                        <div class="card-header">
                            <span>عنوان: {{$comment->title}}</span>
                        </div>
                        <div class="card-body">
                            <div class="card-text text-right">
                                <p>{{$comment->description}}</p>
                                <em>توسط: {{$comment->user->name}}</em>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <form action={{route('publish.comment.details')}} method="post">
                                @csrf
                                <button class="btn btn-success ml-sm-2" name="publish"
                                        value={{$comment->id}} {{$comment->isShow==1 ? "disabled" : ""}}>{{
                            $comment->isShow==0 ? "Publish" : "published"
                            }}</button>
                                <button class="btn btn-outline-info" name="hide"
                                        {{$comment->isShow==0 ? "disabled" : ""}} value={{$comment->id}}>
                                    Hide
                                </button>
                                <button class="btn btn-outline-danger ml-sm-2" name="delete" value={{$comment->id}} >
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>

@endsection