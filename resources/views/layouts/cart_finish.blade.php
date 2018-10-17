@extends('main.layouts.app')

@section('content')


    <div class="container my-5">
        <div class="row">
            <div class="col-8">
                <div class="card card-body">
                    <div class="card-header text-center">
                        <h3>سبد خرید</h3>
                    </div>
                    <div class="card-text">
                        @foreach($cart->items as $item)
                            <div class="row m-4">
                                <div class="col-4">
                                    <img class="product-image" src="{{asset('images/'.$item['item']->image)}}"
                                         style="height: 100px;width: 100px">
                                </div>
                                <div class="col-4 text-center">
                                    <small>تعداد:{{$item['qty']}}</small>
                                </div>
                                <div class="col-4 text-right">
                                    <h4><a href={{route('show.products.details',['id' => $item['item']->id])}}>
                                            {{$item['item']->title}}</a></h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card card-body">
                    <div class="card-header text-center">
                        <h3>فاکتور خرید</h3>
                    </div>
                    <div class="card-text text-center">
                        <h6>خرید شما با موفقیت ثبت شد</h6>
                        <small>شما میتوانید با مراجعه به پروفایل خود روند خرید خود را پیگیری کنید</small>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <span>{{$order->order_id}}</span>
                            </div>
                            <div class="col-6">
                                <span class="text-right">:شماره پیگیری</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection