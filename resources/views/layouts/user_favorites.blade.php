@extends('layouts.user_profile')

@section('content2')


    <div class="row">
        <div class="col-12 my-5">
            <h5>لیست علاقه مندی ها</h5>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('images/smiling.png') }}"
                                 alt="Card image cap" style="width: 100px;height: auto">
                        </div>
                        <div class="col-9">
                            <div class="col-12" style="min-height: 80px">
                                <p>محصول1</p>
                            </div>
                            <div class="row">
                                <div class="col-6 text-center text-danger">
                                    12000
                                </div>
                                <div class="col-6" style="text-align: left">
                                    <a href="#" class="btn btn-primary">مشاهده</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('images/smiling.png') }}"
                                 alt="Card image cap" style="width: 100px;height: auto">
                        </div>
                        <div class="col-9">
                            <div class="col-12" style="min-height: 80px">
                                <p>محصول1</p>
                            </div>
                            <div class="row">
                                <div class="col-6 text-center text-danger">
                                    12000
                                </div>
                                <div class="col-6" style="text-align: left">
                                    <a href="#" class="btn btn-primary">مشاهده</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection