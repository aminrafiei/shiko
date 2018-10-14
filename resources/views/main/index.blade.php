@extends('main.layouts.app')





@section('content')


    @auth()
        <a class="alert-link" href="{{route('show.profile')}}">Profile</a>
        <a class="alert-link"
           href={{route('show.cart')}}>Cart: {{Session::has('cart') ? Session::get('cart')->totalQuantity : " nothing"}}</a>
    @endauth

    <!--div class="advantages">
        <ul class="advantages__list">
            <li class="advantages__item">
                <i class="icon-credit-card-alt advantages__icon"></i>
                <p class="advantages__caption">{{__('messages.advantages_item1')}}</p>
            </li>
            <li class="advantages__item">
                <i class="icon-dollar advantages__icon"></i>
                <p class="advantages__caption">{{__('messages.advantages_item2')}}</p>
            </li>
            <li class="advantages__item">
                <i class="icon-grip-horizontal-solid advantages__icon"></i>
                <p class="advantages__caption">{{__('messages.advantages_item3')}}</p>
            </li>
            <li class="advantages__item">
                <i class="icon-checkmark advantages__icon"></i>
                <p class="advantages__caption">{{__('messages.advantages_item4')}}</p>
            </li>
        </ul>
    </div-->

    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1300px;margin:50px auto 44px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                @foreach($sliBars as $slibar)
                    <li>
                        <a href="{{route('show.products.details',['id'=> $slibar->product_id])}}">
                            <img src="{{asset('images/'.$slibar->image)}}" alt="main-banner-01"/>
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                @foreach($sliBars as $slibar)
                    <li>
                        <a href="{{route('show.products.details',['id'=> $slibar->product_id])}}">
                            <img src="{{asset('images/'.$slibar->image)}}" alt="main-banner-01"/>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


    <div class="main-container">
        <div class="special-offers">
            <h1 class="special-offers__title">{{__('messages.offers')}}</h1>

            <div class="row">
                @foreach($products as $product)

                    <div class="col-md-4">

                        <div class="card my-5">
                            @if($product->image == null)
                                <img class="card-img-top" src="{{asset('images/main-banner-01-tn.jpg')}}">
                            @else
                                <img class="card-img-top" src="{{asset('images/'.$product->image)}}">
                            @endif

                            <div class="card-body">


                                <h5 class="card-title">{{$product->title}}</h5>
                                <p><span class="text-success">Description:</span> {!! $product->description !!}</p>
                                <br>
                                <p><span class="text-success">Price:</span> {{$product->price}}</p>

                                <a class="btn btn-primary"
                                   href={{route('show.products.details',['id'=>$product->id])}}>{{__('messages.show_more')}}</a>
                            </div>
                        </div>

                    </div>


                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    {{ $products->links() }}

                </div>
            </div>


        </div>

    </div>


    @push('scripts')


        <script>

            $(function () {

                $('ul.pagination').addClass('justify-content-center');

            })

        </script>
        <script src="{{asset('sliderengine/jquery.js')}}"></script>
        <script src="{{asset('sliderengine/amazingslider.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('sliderengine/amazingslider-1.css')}}">
        <script src="{{asset('sliderengine/initslider-1.js')}}"></script>

    @endpush


@endsection
