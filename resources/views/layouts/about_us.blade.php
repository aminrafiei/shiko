@extends('main.layouts.app')



@section('content')
    <div class="about-us-content">
        <div class="row">
            <div class="col-12 about-us">
                <div class="about-us__body rtl">
                    <h1 class="about-us__title">shiko</h1>
                    <h2 class="about-us__sub-title">راحت خرید کن</h2>
                    <p class="about-us__text">
                        {{ __('messages.lorem') }}{{ __('messages.lorem') }}{{ __('messages.lorem') }}
                        <br>
                        {{ __('messages.lorem') }}{{ __('messages.lorem') }}{{ __('messages.lorem') }}
                        <br>
                        {{ __('messages.lorem') }}{{ __('messages.lorem') }}{{ __('messages.lorem') }}
                        <br>
                        {{ __('messages.lorem') }}{{ __('messages.lorem') }}{{ __('messages.lorem') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row px-5">
            <div class="more-info rtl">
                <div class="row">
                    <img src="{{ asset('images/logo.jpg') }}" alt="shiko" class="more-info__image col-12 col-md-4">

                    <div class="col-12 col-md-8 more-info__text-container">
                        <p class="more-info__text more-info__text--inline col-12">
                            {{ __('messages.lorem') }}{{ __('messages.lorem') }}{{ __('messages.lorem') }}
                        </p>
                    </div>
                </div>


                <p class="more-info__text">
                    {{ __('messages.lorem') }}{{ __('messages.lorem') }}{{ __('messages.lorem') }}
                </p>
            </div>
        </div>

    </div>



@endsection