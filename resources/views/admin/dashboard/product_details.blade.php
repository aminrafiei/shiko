@extends('layouts.dashboard')

@section('content2')
    <div class="wrapper-title">
        <div class="content-title">
            <h1>محصول</h1>
        </div>
    </div>
    <div class="card-body">
        <form action={{route('update.product',['id' => $product->id])}} method="POST">
            <fieldset>
                <legend>update product</legend>
                {{csrf_field()}}
                <strong>product id = {{$product->id}}</strong>
                <br>
                no
                <div class="mt-3">
                    @foreach($product->picture as $picture)
                        <img class="product-image" src={{asset("images/".$picture->picture)}}>,
                    @endforeach
                </div>
                <br>

                <input type="text" name="title" placeholder="title" value="{{$product->title}}">
                <input type="text" name="description" placeholder="description" value="{{$product->description}}">
                <input type="number" name="price" placeholder="price" value="{{$product->price}}">
                <input type="text" name="tag" placeholder="tag" value="{{$product->tag}}">
                <input type="submit" id="submit">

                @include('layouts.error')

            </fieldset>
        </form>
    </div>
@endsection