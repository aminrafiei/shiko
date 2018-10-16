@extends('main.layouts.app')

@section('content')


    <div class="container-fluid">

        <div class="text-center">
            <h1 class="my-3">سبد خرید</h1>
        </div>
        @if($cart->totalQuantity > 0)
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>محصول</th>
                            <th>قیمت</th>
                            <th>تعداد</th>
                            <th>مجموع</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart->items as $item)
                            <tr>
                                <td>
                                    <img class="product-image" src="{{asset('images/'.$item['item']->image)}}" style="width: 125px;height: 100px">
                                </td>
                                <td>
                                    <a href={{route('show.products.details',['id' => $item['item']->id])}}>
                                        {{$item['item']->title}}</a>
                                </td>
                                <td>{{$item['item']->price }}</td>
                                <td>
                                    <a href={{route('increase.qty',['id' => $item['item']->id + $item['size']])}}>+</a> {{$item['qty']}}
                                    <a href={{route('decrease.qty',['id' => $item['item']->id + $item['size']])}}>-</a>
                                </td>
                                <td>{{$item['price']}}</td>
                                <td><a href={{route('remove.from.cart',['id'=>$item['item']->id + $item['size']])}}><i
                                                class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <div class=" text-center">
                        <form class="container-fluid" action="#">
                            <p class="">کد تخفیف یا کد هدیه خود را وارد کنید</p>
                            <input class="form-control" type="text" name="discount">
                            <input class="btn btn-outline-danger form-control my-2" type="submit" value="تایید">
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-md-8 offset-md-5">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success text-right">صورت حساب</div>
                            <div class="card-body container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <span>2000</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="text-right">:جمع صورتحساب</span>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <span>0</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="text-right">:جمع تخفیفات</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <span>{{$cart->totalPrice}}</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="text-right">:قابل پرداخت</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-success text-right">
                                <a href="{{route('index')}}">
                                    <button class="btn btn-outline-secondary">برگشت</button>
                                </a>
                                <a href="{{route('show.cart.confirm')}}">
                                    <button class="btn btn-outline-success">ادامه</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h3 class="text-center my-5">سبد خرید شما خالی است</h3>
        @endif

    </div>

@endsection