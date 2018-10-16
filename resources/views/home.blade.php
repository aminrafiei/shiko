@extends('main.layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">پیام سیستم</div>

                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h5>!شما وارد شدید</h5>
                        <br>
                        <a href={{route('index')}}>برای برگشت به صفحه اصلی کلیک کنید!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
