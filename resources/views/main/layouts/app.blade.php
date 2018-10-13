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
    <title>Document</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="1" href="#">{{__('messages.main_page')}} <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{__('messages.products')}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">دسته بندی1</a>
                    <a class="dropdown-item" href="#">دسته بندی2</a>
                    <a class="dropdown-item" href="#">دسته بندی3</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{__('messages.contact_us')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{__('messages.about_us')}}</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">
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
                <p style="display: inline-block" class="text-right text-md-left page-footer__item page-footer__item--inline-block">© 1397 کپی رایت: تمام حقوق محفوظ است</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right page-footer__social-media">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1 page-footer__link" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1 page-footer__link" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1 page-footer__link" href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1 page-footer__link" href="#">
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

<script src="{{ asset('/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('/js/bootstrap4.js') }}"></script>

@stack('scripts')


</body>
</html>