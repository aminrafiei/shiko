@extends('layouts.dashboard')

@section('cms_content')


    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                @foreach($sliBars as $slibar)
                    @csrf
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{asset('images/'.$slibar->image)}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center">آیدی اسلایدر : {{$slibar->id}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{"edit-special-product/".$slibar->id}}">
                                            <button type="button" class="btn btn-outline-info mr-sm-3">تغییر
                                            </button>
                                        </a>
                                        <a id="submit" href="{{route('remove.special.product',["id" => $slibar->id])}}">
                                            <button type="button" class="btn btn-outline-danger mr-sm-3">حذف
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <hr>
    </div>

    <div>
        <form class="form-group" action="{{route('special.product.submit')}}" method="POST">
            @csrf
            <p class="text-right">آیدی محصول را وارد کنید</p>
            <div class="row">
                <input class="form-control col-3 mx-2" type="text" name="getId" placeholder="Id">
                <input class="btn btn-outline-primary col-1" type="submit" name="submit" value="Submit">
            </div>
            @if(Session::has('message'))
                <div class="alert" style="background: red">
                    {{Session::get('message')}}
                </div>
            @endif
        </form>
    </div>
    </div>


@endsection