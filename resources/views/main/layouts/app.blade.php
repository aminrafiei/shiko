<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('icomoon/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4.css') }}">
    <link href="{{ asset('css/new-style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
    <title>Shiko</title>

</head>
<body>
<header>

    <div class="header-tape">

        @auth()

            <a class="header-tape__link header-tape__link--cart" href={{route('show.cart')}}>
                <i class="fas fa-shopping-cart header-tape__icon"></i>سبد
                خرید: {{Session::has('cart') ? Session::get('cart')->totalQuantity : " خالی"}}
            </a>
            <div class="dropdown" style="position: relative;z-index: 1021">
                <a class="header-tape__link header-tape__link--login dropdown-toggle" href="#" role="button"
                   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user header-tape__icon"></i> سلام {{Auth::getUser()->name}}
                </a>
                <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{route('show.profile')}}">پروفایل</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{route('user.logout')}}" method="post">
                        @csrf
                        <input type="submit" class="dropdown-item" value="خروج">
                    </form>
                </div>
            </div>


        <!--form action="{{route('user.logout')}}" method="post"-->



            @else
                <a class="header-tape__link header-tape__link--login" href="{{route('login')}}">
                    <i class="fas fa-sign-in-alt header-tape__icon"></i> {{ __('messages.login_or_register') }}
                </a>

                @endauth
                <div class="header-tape__logo">
                    <img class="header-tape__image" src="{{ asset('images/logo.jpg') }}">
                </div>

    </div>
</header>
<nav class="navbar navbar-expand-lg sticky-top main-nav">

    <button class="navbar-toggler main-nav__toggle-btn" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars main-nav__icon"></i>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav main-nav__list">
            <li class="nav-item main-nav__item">
                <a class="nav-link main-nav__link" id="1" href={{route('index')}}>{{__('messages.main_page')}} <span
                            class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown main-nav__item">
                <a class="nav-link dropdown-toggle main-nav__link" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    {{__('messages.products')}}
                </a>
                <div class="dropdown-menu main-dropdown" aria-labelledby="navbarDropdown">

                </div>
            </li>
            <li class="nav-item main-nav__item">
                <a class="nav-link main-nav__link" href="#">{{__('messages.contact_us')}}</a>
            </li>
            <li class="nav-item main-nav__item">
                <a class="nav-link main-nav__link" href="#">{{__('messages.about_us')}}</a>
            </li>
        </ul>
        <div class="col-lg-8" style="float: left;text-align: left;direction: ltr;position: absolute;left: 0">
            <form class="form-inline my-2 my-lg-0 col-xs-10 col-sm-pull-2 search-form" action="{{route('search')}}"
                  method="get">
                <input class="form-control mr-sm-2 col-lg-5 search-form__input" style="text-align: right"
                       type="search" name="search"
                       placeholder="{{ __('messages.search') }}" aria-label="Search">
                <button class="btn my-2 my-sm-0 search-form__button" type="submit"><i class="fas fa-search"></i>
                </button>
            </form>
        </div>

    </div>
</nav>


@if (session('status'))
    <div class="alert alert-success text-right" role="alert">
        {{ session('status') }}
    </div>
@endif
@include('layouts.error')


<div class="container-fluid py-4" style="background-color: #f6f6f6">

    @yield('content')
</div>

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3 page-footer__top-row">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 page-footer__details">
                <h6 class="text-uppercase mb-4 font-weight-bold">لورم ایپسوم</h6>
                <p>{{ __('messages.lorem') }}</p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 page-footer__products">
                <h6 class="text-uppercase mb-4 font-weight-bold">{{ __('messages.products') }}</h6>
                <p class="page-footer__item">
                    <a class="page-footer__link" href="#">محصول1</a>
                </p>
                <p class="page-footer__item">
                    <a class="page-footer__link" href="#">محصول2</a>
                </p>
                <p class="page-footer__item">
                    <a class="page-footer__link" href="#">محصول3</a>
                </p>
                <p class="page-footer__item">
                    <a class="page-footer__link" href="#">محصول4</a>
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 page-footer__help">
                <h6 class="text-uppercase mb-4 font-weight-bold">لینک های مفید</h6>
                <p class="page-footer__item">
                    <a href="#" class="page-footer__link">اکانت شما</a>
                </p>
                <p class="page-footer__item">
                    <a href="#" class="page-footer__link">همکاری با ما</a>
                </p>
                <p class="page-footer__item">
                    <a href="#" class="page-footer__link">هزینه های حمل و نقل</a>
                </p>
                <p class="page-footer__item">
                    <a href="#" class="page-footer__link">راهنما</a>
                </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 page-footer__contact">
                <h6 class="text-uppercase mb-4 font-weight-bold">{{__('messages.contact_us')}}</h6>
                <p class="page-footer__item">
                    <i class="fa fa-home mr-3"></i> تهران,میدان ولیعصر</p>
                <p class="page-footer__item">
                    <i class="fa fa-envelope mr-3"></i> info@gmail.com </p>
                <p class="page-footer__item page-footer__item--ltr">
                    021 123 456 78 <i class="fa fa-phone mr-3"></i></p>
                <p class="page-footer__item page-footer__item--ltr">
                    0912 234 567 89 <i class="fa fa-print mr-3"></i></p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <!-- Grid row -->
        <div class="row d-flex align-items-center page-footer__bottom-row">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 page-footer__copy-right">

                <!--Copyright-->
                <p style="display: inline-block"
                   class="text-right text-md-left page-footer__item page-footer__item--inline-block">© 1397 کپی رایت:
                    تمام حقوق محفوظ است</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4  col-xs-12 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right page-footer__social-media social-media">
                    <ul class="list-unstyled list-inline social-media__list">
                        <li class="list-inline-item social-media__item">
                            <a class="social-media__link" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item social-media__item">
                            <a class="social-media__link" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item social-media__item">
                            <a class="social-media__link" href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item social-media__item">
                            <a class="social-media__link" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>
<!-- Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="{{ asset('/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('/js/bootstrap4.js') }}"></script>

@stack('scripts')


</body>
</html>