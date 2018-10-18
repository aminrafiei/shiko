@extends('layouts.user_profile')


@section('content2')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>حساب شخصی</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('submit.profile.info')}}" method="post">
                        @csrf
                        <div class="form-group row mt-5">
                            <label for="name" class="col-4 col-form-label">نام و نام خانوادگی</label>
                            <div class="col-8">
                                <input id="name" name="name"  class="form-control here" type="text" required="required" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="postal_code" class="col-4 col-form-label">کد پستی</label>
                            <div class="col-8">
                                <input id="postal_code" name="postal_code"  class="form-control here"   value="{{$user->postal_code}}">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="phone_number" class="col-4 col-form-label">شماره موبایل</label>
                            <div class="col-8">
                                <input id="phone_number" name="phone_number"  class="form-control here" type="number" value="{{$user->phone_number}}">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="age" class="col-4 col-form-label">متولد</label>
                            <div class="col-8">
                                <input id="card_number" name="age" class="form-control here" type="number" value="{{$user->age}}">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="email" class="col-4 col-form-label">آدرس ایمیل</label>
                            <div class="col-8">
                                <input id="email" name="email"  class="form-control here" required="required" type="text" value="{{$user->email}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="address" class="col-4 col-form-label">آدرس </label>
                            <div class="col-8">
                                <input id="address" name="address"  class="form-control here" required="required" type="text" value="{{$user->address}}" >
                                <em>آدرس خود را کامل همراه با شهر محل زندگی خود بنویسید</em>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <input type="submit" class="col-5 mx-2 btn btn-primary" style="display: inline-block" value="ثبت اطلاعات">
                            <a href="{{route('show.profile')}}" class="col-5 mx-2 btn btn-danger" style="display: inline-block">انصراف</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection