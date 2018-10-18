@extends('layouts.user_profile')


@section('content2')

    <div class="row mt-5">
        <div class="card container-fluid mr-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-6 block-item">
                        <div class="mt-2 text-muted">
                            <p>کد پیگیری:</p>
                            <p>{{$ord->order_id}}</p>
                        </div>
                    </div>
                    <div class="col-6 block-item">
                        <div class="mt-2 text-muted">
                            <p>وضعیت سفارش:</p>
                            <p>{{$ord->confirm==1 ? "تایید شده" : "در صف تایید سفارش"}}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 block-item">
                        <div class="mt-2 text-muted">
                            <p>نحوه ارسال:</p>
                            <p>-</p>
                        </div>
                    </div>
                    <div class="col-6 block-item">
                        <div class="mt-2 text-muted">
                            <p>هزینه ارسال:</p>
                            <p>0</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <p>کل مبلغ:{{$cart->totalPrice}}</p>
            </div>
        </div>
    </div>
    <div class="row my-3 ">
        <div class="col-12">
            <h5>آخرین سفارش ها</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>محصول</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                    <th>مجموع</th>
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
                            <small>رنگ:{{$item['item']->color->color}}</small><br>
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
@endsection