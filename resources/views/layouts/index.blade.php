<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sirco</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
    <!--script src="{{asset('jquery-3.2.1.js')}}"></script-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
    <div class="top-nav">
        <div class="text-center">
            <a href={{route('show.cart')}}>cart : {{Session::has('cart') ? Session::get('cart')->totalQuantity : " nothing"}}</a>
        </div>
    </div>
    <nav>
        <div class="handle"><i class="fas fa-align-justify"></i></div>
        <ul>
            <li class="nav-filed"><a class="nav-links" href="#">{{__('messages.main_page')}}</a></li>
            <li class="nav-filed"><a class="nav-links" href="#">{{__('messages.products')}}</a>
                <div class="dropdown-container">

                    <div class="hoveredcolor"></div>

                    <div class="dropdown-content-container">

                        <ul class="dropdown-section coat-section">
                            <li class="content-field content-field-header"><a href="#"><h3>{{__('messages.coat')}}</h3>
                                </a></li>
                            <li class="content-field content-field-component"><a href="#">{{__('messages.coat1')}}</a>
                            </li>
                            <li class="content-field content-field-component"><a href="#">{{__('messages.coat2')}}</a>
                            </li>
                        </ul>

                        <ul class="dropdown-section jacket-section">
                            <li class="content-field content-field-header"><a href="#">
                                    <h3>{{__('messages.jacket')}}</h3></a></li>
                            <li class="content-field content-field-component"><a href="#">{{__('messages.jacket1')}}</a>
                            </li>
                            <li class="content-field content-field-component"><a href="#">{{__('messages.jacket2')}}</a>
                            </li>
                            <li class="content-field content-field-component"><a href="#">{{__('messages.jacket3')}}</a>
                            </li>
                        </ul>

                    </div>

                    <div class="seprator"></div>

                    <div class="dropdown-content-container">

                        <ul class="dropdown-section cloth-pants-section">
                            <li class="content-field content-field-header"><a href="#">
                                    <h3>{{__('messages.cloth_pants')}}</h3></a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.cloth_pants1')}}</a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.cloth_pants2')}}</a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.cloth_pants3')}}</a></li>
                        </ul>

                        <ul class="dropdown-section linen-pants-section">
                            <li class="content-field content-field-header"><a href="#">
                                    <h3>{{__('messages.linen_pants')}}</h3></a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.linen_pants1')}}</a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.linen_pants2')}}</a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.linen_pants3')}}</a></li>
                        </ul>

                    </div>

                    <div class="seprator"></div>

                    <div class="dropdown-content-container">

                        <ul class="dropdown-section overcoat-section">
                            <li class="content-field content-field-header"><a href="#">
                                    <h3>{{__('messages.overcoat')}}</h3></a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.overcoat1')}}</a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.overcoat2')}}</a></li>
                            <li class="content-field content-field-component"><a
                                        href="#">{{__('messages.overcoat3')}}</a></li>
                        </ul>

                        <ul class="dropdown-section vest-section">
                            <li class="content-field content-field-header"><a href="#"><h3>{{__('messages.vest')}}</h3>
                                </a></li>
                        </ul>

                    </div>
                    <div class="seprator"></div>
                    <div class="dropdown-img-container">
                        <img src="#" alt="#" class="dropdown-img">
                    </div>
                </div>
            </li>
            <li class="nav-filed"><a class="nav-links" href="#">{{__('messages.about_us')}}</a></li>
            <li class="nav-filed"><a class="nav-links" href="#">{{__('messages.contact_us')}}</a></li>
        </ul>
    </nav>
</header>
<br>
<br>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@include('layouts.error')
@yield('content')

<footer class="footer">
    <div class="big-section-wrapper">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="wrapper-row-3">
                    <p>
                        {{__('messages.sample_text')}}
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="wrapper-row-4">
                    <p>مارا دنبال کنید</p>
                    <div class="socialMedia">
                        <a class="fab fa-instagram" href="#"></a>
                        <a class="fab fa-telegram-plane" href="#"></a>
                        <a class="fab fa-twitter" href="#"></a>
                        <a class="fab fa-whatsapp" href="#"></a>
                        <a class="fab fa-facebook-f" href="#"></a>
                    </div>
                    <div class="footer-text">
                        <p>021 - 33340806</p>
                        <p>تهران میدان امام حسین(ع) خیابان ثارالله پلاک 146 تولیدی سرکان</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="wrapper-row-5">
                    <p>
                        {{__('messages.sample_text')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $('.handle').on('click', function () {
       $('nav ul').toggleClass('showing');
       $('nav').toggleClass('showing');
    });
</script>
</div>
</body>
</html>