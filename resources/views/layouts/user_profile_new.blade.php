@extends('layouts.user_profile')


@section('content2')

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ویرایش اطلاعات</h5>
                    <div class="row">
                        <div class="col-6 block-item">
                            <div class="mt-2 text-muted">
                                <p>نام و نام خانوادگی:</p>
                                <p>{{$user->name}}</p>
                            </div>
                        </div>
                        <div class="col-6 block-item">
                            <div class="mt-2 text-muted">
                                <p>پست الکترونیکی:</p>
                                <p>{{$user->email}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 block-item">
                            <div class="mt-2 text-muted">
                                <p>شماره تلفن همراه:</p>
                                <p>{{$user->phone_number}}</p>
                            </div>
                        </div>
                        <div class="col-6 block-item">
                            <div class="mt-2 text-muted">
                                <p>کد پستی:</p>
                                <p>{{$user->postal_code}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 block-item">
                            <div class="mt-2 text-muted">
                                <p>سن:</p>
                                <p>{{$user->age}}</p>
                            </div>
                        </div>
                        <div class="col-6 block-item">
                            <div class="mt-2 text-muted">
                                <p>شماره کارت:</p>
                                <p>-</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{route('show.profile.info')}}" class="btn btn-primary mt-3">ویرایش اطلاعات شخصی</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">لیست آخرین علاقه مندی ها</h5>
                    <p class="card-body">بدون اطلاعات</p>
                    {{--<div class="row">--}}
                        {{--<div class="col-12 block-item">--}}
                            {{--<div class="row" style="height: 100%">--}}
                                {{--<div class="col-3">--}}
                                    {{--<img class="card-img-overlay" src="{{ asset('images/smiling.png') }}"--}}
                                         {{--alt="Card image cap" style="width: 100px;height: auto">--}}
                                {{--</div>--}}
                                {{--<div class="col-6">--}}
                                    {{--<p>محصول1</p>--}}
                                    {{--<span class="text-danger">12000</span>--}}
                                {{--</div>--}}
                                {{--<div class="col-3">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-12 block-item">--}}
                            {{--<div class="row" style="height: 100%">--}}
                                {{--<div class="col-3">--}}
                                    {{--<img class="card-img-overlay" src="{{ asset('images/smiling.png') }}"--}}
                                         {{--alt="Card image cap" style="width: 100px;height: auto">--}}
                                {{--</div>--}}
                                {{--<div class="col-6">--}}
                                    {{--<p>محصول1</p>--}}
                                    {{--<span class="text-danger">12000</span>--}}
                                {{--</div>--}}
                                {{--<div class="col-3">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-12 block-item">--}}
                            {{--<div class="row" style="height: 100%">--}}
                                {{--<div class="col-3">--}}
                                    {{--<img class="card-img-overlay" src="{{ asset('images/smiling.png') }}"--}}
                                         {{--alt="Card image cap" style="width: 100px;height: auto">--}}
                                {{--</div>--}}
                                {{--<div class="col-6">--}}
                                    {{--<p>محصول1</p>--}}
                                    {{--<span class="text-danger">12000</span>--}}
                                {{--</div>--}}
                                {{--<div class="col-3">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<a href="#" class="btn btn-primary mt-3">مشاهده و ویرایش لیست مورد علاقه</a>--}}

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h5>آخرین سفارش ها</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">شماره پیگیری</th>
                    <th scope="col">تاریخ ثبت سفارش</th>
                    <th scope="col">مبلغ کل</th>
                    <th scope="col">جزییات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <td>{{$order->order_id}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{unserialize(base64_decode($order->cart))->totalPrice}}</td>
                        <td><a href={{route('show.profile.order',['id'=>$order->order_id])}} class="btn btn-primary">جزییات</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$orders->links()}}
        </div>

    </div>
@endsection