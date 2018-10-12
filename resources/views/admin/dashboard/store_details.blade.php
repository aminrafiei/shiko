@extends('layouts.dashboard')

@section('content2')


    <div class="container-fluid">
        <div class="text-right">
            <h1>انبار</h1>

            <a href={{route('show.products.details',['id'=>$product->id])}}><h3>{{$product->title}}</h3></a>
            <form class="form-control" method="POST" action="{{route('store.update',['id'=>$product->id])}}">
                @csrf
                <hr>
                @foreach($product->size as $size)
                    <div style="width:70px;display:inline-block">{{$size->cloth_size}}{{$size->pants_size}}:</div><input
                            type="text" name="size[{{$size->id}}]"
                            value={{$size->pivot->qty}}>
                    <br>
                @endforeach
                <hr>
                <button class="btn mt-2 ">submit</button>
            </form>

        </div>
    </div>

@endsection