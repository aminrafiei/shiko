@extends('layouts.user_profile')


@section('')

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
                    <form>
                        <div class="form-group row mt-5">
                            <label for="name" class="col-4 col-form-label">نام</label>
                            <div class="col-8">
                                <input id="name" name="name" placeholder="رضا" class="form-control here" type="text" required="required">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="lastname" class="col-4 col-form-label">نام خانوادگی</label>
                            <div class="col-8">
                                <input id="lastname" name="lastname" placeholder="میردامادی" class="form-control here" type="text" required="required">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="national_id" class="col-4 col-form-label">کد ملی</label>
                            <div class="col-8">
                                <input id="national_id" name="national_id" placeholder="0123456789" class="form-control here" type="number">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="phone_number" class="col-4 col-form-label">شماره موبایل</label>
                            <div class="col-8">
                                <input id="phone_number" name="phone_number" placeholder="09123456789" class="form-control here" type="number">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="card_number" class="col-4 col-form-label">شماره کارت</label>
                            <div class="col-8">
                                <input id="card_number" name="card_number" placeholder="0123456789" class="form-control here" type="number">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="email" class="col-4 col-form-label">آدرس ایمیل</label>
                            <div class="col-8">
                                <input id="email" name="email" placeholder="mirdamadi.reza.98@gmial.com" class="form-control here" required="required" type="text">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <a href="#" class="col-6 btn btn-primary" style="display: inline-block">ثبت اطلاعات</a>
                            <a href="#" class="col-6 btn btn-primary" style="display: inline-block">انصراف</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection