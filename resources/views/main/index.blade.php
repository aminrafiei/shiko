@extends('main.layouts.app')

@section('content')


        <div class="row px-4">
            <div class="col-sm-8">

                <div id="amazingslider-wrapper-1"
                     style="display:block;position:relative;max-width:1300px;margin:50px auto 44px;">
                    <div id="amazingslider-1" style="display:none;position:relative;margin:0 auto;">
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

            </div>
            <div class="col-sm-4 mt-5">
                <h1 class="text-center my-2"><span class="badge badge-info"> <i
                                class="icon-checkmark advantages__icon"></i> ضمانت محصولات </span></h1>
                <h1 class="text-center my-5"><span class="badge badge-secondary"><i
                                class="icon-grip-horizontal-solid advantages__icon"></i> فروش عمده</span> <span
                            class="badge badge-secondary"></span></h1>
                <h1 class="text-center my-5"><span class="badge badge-info"> <i
                                class="icon-dollar advantages__icon"></i> قیمت مناسب </span></h1>
                <h1 class="text-center my-2"><span class="badge badge-secondary"> <i
                                class="icon-credit-card-alt advantages__icon"></i> پرداخت در محل</span></h1>
            </div>
        </div>
        <hr>


    <div class="container text-center">
        <h3>جدید ترین محصولات</h3>
        <br>
        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-3">
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
        <a class="text-center" href="{{route('search')}}"><h5>مشاهده تمام محصولات</h5></a>
        <hr class="mb-5">
    </div>

    <div class="container text-center">
        <h3>برترین برندهای ما</h3>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <img src="{{asset('/images/brands/CAMPER.png')}}" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-2">
                <img src="{{asset('/images/brands/DEFACTO.png')}}" class="img-responsive" style="width:100%"
                     alt="Image">
            </div>
            <div class="col-sm-2">
                <img src="{{asset('/images/brands/MANGO.png')}}" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-2">
                <img src="{{asset('/images/brands/ONLY.png')}}" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-2">
                <img src="{{asset('/images/brands/MISSGUIDED.png')}}" class="img-responsive" style="width:100%"
                     alt="Image">
            </div>
            <div class="col-sm-2">
                <img src="{{asset('/images/brands/SOLIVER.png')}}" class="img-responsive" style="width:100%"
                     alt="Image">
            </div>
        </div>
    </div><br>


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
