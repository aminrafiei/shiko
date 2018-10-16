@extends('layouts.dashboard')

@section('cms_content')

    <div class="container my-5">
        <form class="form-group" action={{route('edit.special.product',['id' => $slidebar->id])}} method="POST"
              enctype="multipart/form-data"
              role="form">
            <fieldset>
                <legend class="text-right">به روز رسانی کردن اسلایدر</legend>
                {{csrf_field()}}

                <div class="mt-3">
                    <input class="form-control" type="text" name="product_id" placeholder="id">
                </div>

                <input type="submit" id="submit" value="به روزرسانی محصول" class="btn btn-outline-success my-2">
                @if(Session::has('message'))
                    <div class="alert" style="background: red">
                        <a style="margin-bottom: 200px">
                            {{Session::get('message')}}
                        </a>
                    </div>
                @endif
                @include('layouts.error')

            </fieldset>
        </form>

        <img src="{{asset('images/'.$slidebar->image)}}" class="card-img-top">
    </div>
@endsection

