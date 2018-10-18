{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="UTF-8">--}}
{{--<title>profile</title>--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">--}}
{{--<link rel="stylesheet" href="{{ asset('css/bootstrap4.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('css/new-style.css') }}">--}}
{{--<script src="{{asset('jquery-3.2.1.js')}}"></script>--}}
{{--<meta name="viewport"--}}
{{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}

{{--</head>--}}
{{--<body>--}}
@extends('main.layouts.app')

@section('content')


    <div class="container-fluid my-4">
        <div class="row" style="direction: rtl;text-align: right">
            <div class="col-md-3">
                <div class="row">
                    <div class="card" style="">
                        <div class="row">
                            <div class="col-5" style="margin: 0 auto">
                                <img class="card-img-top" src="{{ asset('images/userimg.jpg') }}" alt="Card image cap">
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{Auth::getUser()->name}}</h5>
                            <div class="row">
                                <a href="#" class="col-5 btn btn-primary" style="display: inline-block">تغییر رمز</a>
                                <a href="#" class="col-5 btn btn-primary" style="display: inline-block">خروج از حساب</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 list-group" style="padding: 0">
                        <h6 class="list-group-item list-group-item-action list-group-item-primary">حساب کاربری شما</h6>
                        <a href="#" class="list-group-item list-group-item-action">لیست علاقه مندی ها</a>
                        <a href="#" class="list-group-item list-group-item-action">نقد و نظرات</a>
                        <a href="#" class="list-group-item list-group-item-action">پیغام های من</a>
                        <a href="{{route('show.profile.info')}}" class="list-group-item list-group-item-action">اطلاعات شخصی</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">

                @yield('content2')

            </div>
        </div>
    </div>


    {{--</body>--}}
    {{--</html>--}}
@endsection