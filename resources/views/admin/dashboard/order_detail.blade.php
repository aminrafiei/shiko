@extends('layouts.dashboard')


@section('cms_content')

    <div class="container">
        <div class="row my-3 ">
            <div class="col-12">
                <h1 class="text-right">اطلاعات خرید</h1>
                <h4 class="text-right my-2">شماره پیگیری : {{$order->order_id}}</h4>
                <h6 class="text-right my-2">توسط : {{$order->user->name}}</h6>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th>محصول</th>
                        <th>قیمت</th>
                        <th>تعداد</th>
                        <th>پرداخت شده</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart->items as $item)
                        <tr>
                            <td>
                                <img class="product-image" src="{{asset('images/'.$item['item']->image)}}"
                                     style="width: 125px;height: 100px">
                            </td>
                            <td>
                                <p><a href={{route('show.products.details',['id' => $item['item']->id])}}>
                                        {{$item['item']->title}}</a></p>
                                <small>رنگ:{{$item['item']->color->color}}</small>
                                <br>
                                <small>سایز: {{$item['item']->size->where('id',$item['size'])->first()->pants_size}}
                                    {{$item['item']->size->where('id',$item['size'])->first()->cloth_size}}</small>
                            </td>
                            <td>{{$item['item']->price }}</td>
                            <td>
                                {{$item['qty']}}

                            </td>
                            <td>{{$item['price']}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6 text-right">
                <p>کل مبلغ پرداختی:{{$cart->totalPrice}}</p>

            </div>
            <div class="col-6 ">
                <form action="{{route('submit.order.detail')}}" method="post">
                    @csrf
                    <input type="hidden" name="order" value="{{$order->id}}">
                    <select name="confirm">
                        <option value="0" {{$order->confirm==0 ? "selected" : null}}>در صف انتظار</option>
                        <option value="1" {{$order->confirm==1 ? "selected" : null}}>تایید شده</option>
                    </select>
                    <input class="btn btn-outline-info" type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection