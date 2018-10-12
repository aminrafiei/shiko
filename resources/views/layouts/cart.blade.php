@extends('layouts.index')

@section('content')
    <div class="cart-container">

        <div class="title">
            <h1>سبد خرید</h1>
        </div>
        @if($cart->totalQuantity > 0)
            <div class="counting-product">
                <table>
                    <tr>
                        <td>تخفیف</td>
                        <td>10000000</td>
                    </tr>
                    <tr>
                        <td>هزینه ارسال</td>
                        <td>10000000</td>
                    </tr>
                </table>
                <hr>
                <strong style="display: block">مبلغ قابل پرداخت:</strong>
                <strong>{{$cart->totalPrice}}</strong>
                <form action="" method="" role="form">

                    <input type="submit" name="" value="ادامه ثبت سفارش"
                           style="border: 1px solid #56ccc4;background-color: #56ccc4;color: white;font-size: 20px">
                </form>
            </div>

            <!-- for every product -->
            @foreach($cart->items as $item)

                <div class="cart-content">

                    <div class="cart">

                        <div class="product-type">
                            <img class="product-image" src="{{asset('images/'.$item['item']->image)}}">

                            <div class="column1">
                                <a href={{route('show.products.details',['id' => $item['item']->id])}}>
                                    <h1>{{$item['item']->title}}</h1></a>
                                <p>color: {{$item['item']->color->color}}</p>
                                <p>size: {{$item['item']->size->where('id',$item['size'])->first()->pants_size}}
                                    {{$item['item']->size->where('id',$item['size'])->first()->cloth_size}}</p>
                                <strong>{{$item['item']->price }} تومان</strong>
                            </div>
                            <div class="column2">
                                <div>
                                    <label for="number">تعداد محصول</label><br>
                                    <!-- must be changed -->
                                    <a href={{route('increase.qty',['id' => $item['item']->id + $item['size']])}}>+</a> {{$item['qty']}}
                                    <a
                                            href={{route('decrease.qty',['id' => $item['item']->id + $item['size']])}}>-</a>
                                </div>
                            </div>


                            <div class="column3">
                                <div style="margin: 20px 0">
                                    <del>{{$item['price']}}<span>تومان</span></del>
                                </div>
                                <div style="margin: 20px 0">
                                    <mark style="color: #777777">500 <span>تومان</span><span> تخفیف</span></mark>
                                </div>
                                <div style="margin: 20px 0">
                                    <span>{{$item['price']}}<span>تومان</span></span>
                                </div>
                            </div>

                            <div class="col-lg-offset-1">
                                <div style="margin: 40px 0">
                                    <a href={{route('remove.from.cart',['id'=>$item['item']->id + $item['size']])}}>X</a>
                                </div>
                            </div>

                        </div>

                        <br>

                    </div>

                </div>

            @endforeach
        @else
            <strong>your cart is empty</strong>
        @endif

    </div>

    <script>
        function updateQty(str) {

        }
    </script>


@endsection