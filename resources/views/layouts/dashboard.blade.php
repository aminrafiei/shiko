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

        <div class="col-md-3 col-lg-2" style="padding: 0;">
            <a class="navbar-brand  mr-0 cms-nav__company-name" style="display: inline-block;width: 100%;" href="#">نام
                شرکت</a>
        </div>
        <div class="col-md-3 col-lg-2" style="text-align: right">
            <a href="#" style="color: white;text-decoration: none"><i class="fas fa-user-tie mx-1"></i>{{ Auth::getUser()->name}} </a>
        </div>
        <div class="col-lg-6 col-md-3"></div>
        <ul class="navbar-nav px-3 col-md-3 col-lg-2 cms-nav__list">
            <li class="nav-item text-nowrap cms-nav__item">
                <a class="nav-link cms-nav__link" href="#">خروج</a>
            </li>
        </ul>

    </nav>

    <div class="container-fluid">
        <div class="row cms">
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar cms-sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column cms-sidebar__list">
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link active cms-sidebar__link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>پیشخوان</span>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>سفارشات</span>
                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item cms-sidebar__item--dropdown">
                            <a class="nav-link cms-sidebar__link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span>محصولات</span>

                            </a>
                            <div class="cms-sidebar__dropdown">
                                <a class="dropdown-item main-dropdown__item" href="{{route('add.product')}}">اضافه کردن محصول</a>
                                <a class="dropdown-item main-dropdown__item" href={{route('admin.show.product')}}>محصولات</a>
                            </div>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href="#">
                                <i class="fas fa-gift cms-sidebar__icon"></i> پیشنهادهای ویژه

                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href={{route('special.product')}}>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span>اسلایدر</span>

                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-bar-chart-2">
                                    <line x1="18" y1="20" x2="18" y2="10"></line>
                                    <line x1="12" y1="20" x2="12" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="14"></line>
                                </svg>
                                <span>آمار</span>

                            </a>
                        </li>
                        <li class="nav-item cms-sidebar__item">
                            <a class="nav-link cms-sidebar__link" href="{{route('show.store')}}">
                                <i class="fas fa-boxes cms-sidebar__icon"></i>انبار

                            </a>
                        </li>

                    </ul>


                </div>
            </nav>
            <div class="col-lg-2 col-md-3"></div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

                <!-- content here -->
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('warning') }}
                    </div>
                @endif
                @include('layouts.error')
                @yield('cms_content')
            </main>
        </div>
    </div>

    <script type="text/javascript">
        $('.cms-sidebar__link').on('click', function () {
            $('.cms-sidebar__dropdown').toggleClass('show');
            $('.cms-sidebar__item--dropdown').toggleClass('active');
        });
    </script>



@endsection