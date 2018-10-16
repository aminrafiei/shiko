@extends('layouts.dashboard')

@section('cms_content')


    <div class="container-fluid">
        <div class="text-right">
            <h1>انبار</h1>

            <a href={{route('show.products.details',['id'=>$product->id])}}><h3>{{$product->title}}</h3></a>
            <form class="form-group" method="POST" action="{{route('store.update',['id'=>$product->id])}}">
                @csrf
                <hr>
                @foreach($product->size as $size)
                    <div style="width:70px;display:inline-block">{{$size->cloth_size}}{{$size->pants_size}}:</div><input
                            type="text" name="size[{{$size->id}}]"
                            value="{{$size->pivot->qty}}" class="my-1">
                    <br>
                @endforeach
                <hr>
                <button class="btn btn-outline-primary">ثبت</button>
                <a href="{{URL::previous()}}"><button type="button" class="btn btn-outline-danger mx-1">برگشت</button></a>
            </form>

        </div>
    </div>

@endsection