@extends('main.layouts.app')

@section('content')

    <div class="p-2 contact-us-content" style="background-color: white;border: 1px solid lightgray">
        <div class="col-12 col-md-3 contact-us__icon">

        </div>
        <div class="row col-12 p-0 m-0 mb-4">
            <h2 class="text-right col-12 contact-us__title">{{ __('messages.contact_us') }}</h2>
        </div>
        <div class="row col-12 p-0 m-0 rtl">
            <div class="p-2 col-12 col-md-9 text-right contact-us">

                <p class="contact-us__p px-3">
                    {{ __('messages.lorem') }}
                </p>
                <ul class="contact-us__list">
                    <h6 class="text-right mb-4 contact-us__subject">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                        صنعت چاپ و با استفاده از طراحان گرافیک است:</h6>
                    <li class="contact-us__item">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                        از طراحان گرافیک است.
                    </li>
                    <li class="contact-us__item">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                        از طراحان گرافیک است.
                    </li>
                    <li class="contact-us__item">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                        از طراحان گرافیک است.
                    </li>
                    <li class="contact-us__item"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                        از طراحان گرافیک است.
                    </li>
                    <li class="contact-us__item">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                        از طراحان گرافیک است.
                    </li>
                </ul>
                <div class="contact-us__phone-number">
                    <p>تلفن تماس و فکس: 12345678 - 021 ، 12345678 - 021 (پاسخگویی ۲۴ ساعته، ٧ روز هفته) </p>
                </div>
            </div>

        </div>
        <hr>
        <div class="row col-12 p-0 m-0 rtl">
            <h3 class="col-12 text-right">دفتر مرکزی:</h3>
            <p class="pr-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                است.</p>
        </div>
        <div class="row col-12 p-0 m-0 rtl text-right">
            <h3 class="col-12">ایمیل ها:</h3>
            <p class="pr-3 col-12">info1@gmail.com</p>
            <p class="pr-3 col-12">info2@gmail.com</p>
            <p class="pr-3 col-12">info3@gmail.com</p>
        </div>
        <hr>
        <div class="row col-12 p-0 m-0 rtl text-right">
            <p class="px-3">
                {{ __('messages.lorem') }}
            </p>
            <form class="message-form mx-auto col-12 col-md-4">
                <div class="form-group">
                    <label for="name" class="message-form__label">نام و نام خانوادگی:</label>
                    <input type="text" class="form-control message-form__input" id="name">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="message-form__label">آدرس ایمیل:</label>
                    <input type="email" class="form-control message-form__input" id="exampleInputEmail1"
                           aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="phone_number" class="message-form__label">شماره تماس:</label>
                    <input type="number" class="form-control message-form__input" id="phone_number">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="message-form__label">متن پیام:</label>
                    <textarea class="form-control message-form__text-area" id="exampleFormControlTextarea1"
                              rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary message-form__submit">ثبت</button>
            </form>
        </div>
    </div>



@endsection