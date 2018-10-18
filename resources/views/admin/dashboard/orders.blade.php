@extends('layouts.dashboard')

@section('cms_content')

    <div class="container">
        <h1 class="text-right">سفارشات</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>شماره پیگیری</th>
                    <th>توسط</th>
                    <th>مبلغ</th>
                    <th>وضعیت</th>
                    <th>تاریخ انتشار</th>
                    <th></th>

                </tr>
                </thead>
                <tbody>

                {{csrf_field()}}
                @foreach($orders as $order)

                    <tr>
                        <td>{{$order->order_id}}</td>
                        <td><a href="#">{{$order->user->name}}</a></td>
                        <td>{{unserialize(base64_decode($order->cart))->totalPrice}}</td>
                        <td>{{$order->confirm==0 ? "در صف تایید سفارش" : "تایید شده"}}</td>
                        <td>{{$order->created_at}}</td>
                        <td><a href="{{route('show.order.detail',['id' => $order->id])}}" class="btn btn-outline-primary">جزییات</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>


    </div>

@endsection