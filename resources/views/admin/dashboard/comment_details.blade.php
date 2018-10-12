@extends('layouts.dashboard')

@section('content2')

    <div class="container-fluid">
        <div class="text-right">
            <strong><h1>نظرات</h1></strong>

            <div class="m-5">
                <a href={{route('show.products.details',['id'=>$product->id])}}><h2>{{$product->title}}</h2></a>
                @foreach($product->comment as $comment)
                    <h4>{{$comment->title}}</h4>
                    <p>{{$comment->description}}</p>
                    <p>توسط:{{$comment->user->name}}</p>
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
                        <button class="btn btn-outline-danger ml-sm-2" name="delete" value={{$comment->id}} >Delete
                        </button>
                    </form>
                    <br>
                    <hr>
                @endforeach
            </div>

        </div>


    </div>

@endsection