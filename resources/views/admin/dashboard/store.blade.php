@extends('layouts.dashboard')

@section('content2')


    <div class="wrapper-title">
        <div class="content-title">
            <h1>انبار</h1>

        </div>
    </div>

    <div class="products-container">

            <table class="steelBlueCols">
                <thead>
                <tr>
                    <th>عنوان محصول</th>
                    <th>نویسنده</th>
                    <th>کل موجودی</th>
                    <th>تاریخ انتشار</th>
                    <th>تاریخ آپدیت</th>

                </tr>
                </thead>
                <tbody>

                {{csrf_field()}}
                @foreach($products as $product)
                    <tr>
                        <td>
                            <a href={{route('show.products.details',['id'=>$product->id])}}>{{$product->title}}</a>
                        </td>
                        <td><a href="#">{{$product->admin->name}}</a></td>
                        <td><a href={{route('show.store.details',['id'=>$product->id])}}>{{$product->total_qty}}</a></td>
                        <td><a href="#">{{$product->created_at}}</a></td>
                        <td><a href="#">{{$product->updated_at}}</a></td>
                    </tr>
                @endforeach
                <input type="submit" id="submit" style="display: none">


                </tbody>
            </table>
    </div>

@endsection