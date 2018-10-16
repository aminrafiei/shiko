@extends('main.layouts.app')

@section('content')

    <div class="container my-5">
        @if($cart->totalQuantity > 0)
            <div class="row">

                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <span>بازبینی سفارش</span>
                        </div>
                        <div class="card-body">
                            @foreach($cart->items as $item)
                                <div class="row my-2">
                                    <div class="col-6">
                                        <img class="product-image" src="{{asset('images/'.$item['item']->image)}}"
                                             style="height: 100px;width: 100px">
                                    </div>
                                    <div class="col-6">
                                        <h4><a href={{route('show.products.details',['id' => $item['item']->id])}}>
                                                {{$item['item']->title}}</a></h4>
                                        <small>{{$item['item']->tag}}</small>
                                        <br>
                                        <small>تعداد:{{$item['qty']}}</small>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{route('show.cart')}}">
                                <button class="btn btn-outline-primary">برگشت به سبدخرید</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <span>اطلاعات گیرنده</span>
                        </div>
                        <div class="card-body">
                            <div class="card-text text-right">
                                <h5>گیرنده: {{Auth::getUser()->name}} </h5>
                                <p>آدرس: {{Auth::getUser()->address}}</p>
                                <p>تلفن: {{Auth::getUser()->phone_number}}</p>
                                <p>آدرس پستی: {{Auth::getUser()->postal_code}}</p>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{route('show.profile')}}">
                                <button class="btn btn-outline-info">تغییر اطلاعات</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row my-3">
                <div class="col-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <span>تایید و پرداخت</span>
                        </div>
                        <form action="{{route('order.confirm')}}" method="post" role="form">
                            @csrf
                            <input type="hidden" name="order_id" value={{uniqid()}}>
                            <input type="hidden" name="user_id" value={{Auth::getUser()->id}}>
                            <input type="hidden" name="cart" value={{base64_encode(serialize($cart))}}>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            <label>پرداخت در محل </label>
                                            <input type="radio" name="payment" value="offline" checked>
                                        </div>
                                        <div>
                                            <label>پرداخت آنلاین</label>
                                            <input type="radio" name="payment" value="online">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <p>:قابل پرداخت
                                        <p>
                                        {{$cart->totalPrice}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <button class="btn btn-outline-success">ثبت سفارش</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <h3 class="text-center my-5">سبد خرید شما خالی است</h3>
        @endif
    </div>

@endsection