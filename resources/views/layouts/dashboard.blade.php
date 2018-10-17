@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-style.css') }}">
    <script src="{{ asset('/jquery-3.2.1.js') }}"></script>

</head>


@section('content')

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 cms-nav">

        <div class="col-12 col-md-3 col-lg-2" style="padding: 0;">
            <a class="navbar-brand  mr-0 cms-nav__company-name" style="display: inline-block;width: 100%;" href="#">
                <span>نام شرکت</span>
            </a>
        </div>
        <div class="col-4 col-md-3 col-lg-2" style="text-align: right">
            <a href="#" style="color: white;text-decoration: none"><i class="fas fa-user-tie mx-1"></i>{{ Auth::getUser()->name}} </a>
        </div>
        <div class="col-4 col-md-3 col-lg-6 "></div>
        <ul class="navbar-nav px-3 col-4 col-md-3 col-lg-2 cms-nav__list">
            <li class="nav-item text-nowrap cms-nav__item">
                <a class="nav-link cms-nav__link" href="#">خروج</a>
            </li>
        </ul>

    </nav>

    <div class="container-fluid">
        <div class="row cms">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar cms-sidebar">
                    <ul class="nav flex-column cms-sidebar__list">
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link active cms-sidebar__link" href="#">
                                <i class="fas fa-home cms-sidebar__icon"></i>
                                <span>پیشخوان</span>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href="#">
                                <i class="fas fa-clipboard-list cms-sidebar__icon"></i>
                                <span>سفارشات</span>
                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item cms-sidebar__item--dropdown">
                            <a class="nav-link dropdown-toggle cms-sidebar__link" id="cms-dropdown" href="#">
                                <span class="cms-sidebar__icon-container" style="display:inline-block;width: 25px">
                                     <i class="fas fa-shopping-cart cms-sidebar__icon"></i>
                                </span>

                                <span>محصولات</span>

                            </a>
                            <div class="cms-sidebar__dropdown">
                                <a class="dropdown-item text-light cms-sidebar__link" href="{{route('add.product')}}">اضافه کردن محصول</a>
                                <a class="dropdown-item text-light cms-sidebar__link" href={{route('admin.show.product')}}>محصولات</a>
                            </div>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href="#">
                                <i class="fas fa-gift cms-sidebar__icon"></i> پیشنهادهای ویژه

                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href={{route('special.product')}}>
                                <i class="far fa-clone cms-sidebar__icon"></i>
                                <span>اسلایدر</span>

                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link cms-sidebar__icon" href="#">
                                <i class="fas fa-users"></i>
                               <span>کاربران</span>

                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href={{route('show.comments')}}>
                                <i class="far fa-comments cms-sidebar__icon"></i>نظرات

                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href="#">
                                <i class="far fa-chart-bar cms-sidebar__icon"></i>
                                <span>آمار</span>

                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href="{{route('show.store')}}">
                                <i class="fas fa-boxes cms-sidebar__icon"></i>انبار

                            </a>
                        </li>

                    </ul>

            </nav>
            <div class="col-lg-2 col-md-3"></div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 dashboard-main">

                <!-- content here -->
                @include('layouts.error')
                @yield('cms_content')
            </main>
        </div>
    </div>

    <script type="text/javascript">
        $('#cms-dropdown').on('click', function () {
            $('.cms-sidebar__dropdown').toggleClass('show');
            $('.cms-sidebar__item--dropdown').toggleClass('active');
        });
    </script>



@endsection