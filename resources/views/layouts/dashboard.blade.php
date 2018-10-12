@extends('layouts.index')

<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
</head>

@extends('layouts.app')

@section('content')

<div class="container-dashboard">

    <div class="main">

        <div class="dashboard-content">

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

            @yield('content2')


        </div>


    </div>


    <div class="panel" id="navbar">

        <div class="panel-lists">

            <ul class="lists">


                <li class="panel-item-size panel-item-shape dropdown-position-product">
                    <a class="dropdown-link" href="#" onclick="myFunction1()" style="color: #FFFFFF">محصولات<i class="fas fa-plus cms-panel-icon"></i></a>

                    <div class="dropdown-content-pannel" id="myDropdown1" >
                        <a href={{route('add.product')}}>اضافه کردن محصول</a>
                        <a href={{route('admin.show.product')}}>محصولات</a>
                        <a href={{route('special.product')}}>پیشنهاد ویژه</a>
                    </div>
                </li>
                <li class="panel-item-size panel-item-shape"><a href="#">سفارشات <i class="fas fa-truck-loading cms-panel-icon"></i></a>


                <li class="panel-item-size panel-item-shape dropdown-position-offer"><a class="dropdown-link" href="#" onclick="myFunction2()" style="color: #FFFFFF;background-color: unset;" >پیشنهادهای ویژه
                        <i class="fas fa-piggy-bank cms-panel-icon"></i></a>

                    <div class="dropdown-content-pannel" id="myDropdown2">
                        <a href="#">اضافه کردن پیشنهاد</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>

                <li class="panel-item-size panel-item-shape"><a href={{route('show.store')}}>انبار <i class="fas fa-boxes cms-panel-icon"></i></a></li>
                <li class="panel-item-size panel-item-shape"><a href={{route('show.comments')}}>نظرات <i class="far fa-comment cms-panel-icon"></i> </a></li>
                <li class="panel-item-size panel-item-shape"><a href="#">  کاربران<i class="far fa-user cms-panel-icon"></i></a></li>
                <li class="panel-item-size panel-item-shape"><a href="#"> تنظیمات<i class="fas fa-wrench cms-panel-icon"></i></a></li>


            </ul>

        </div>

    </div>


</div>

</body>



<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show");

    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show2");

    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content-panel");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show2')) {
                    openDropdown.classList.remove('show2');
                }
            }
        }
    }
</script>


<script type="text/javascript">

    $("#uploadFile").change(function () {
        $('#image_preview').html("");
        var total_file = document.getElementById("uploadFile").files.length;
        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");

        }
    });

    function openFrame() {
        var elem = document.getElementById("sliderFrame");
        if (elem.style.display === 'none') {
            elem.style.display = 'block';
        }
    }

    function closeFrame() {
        var elem = document.getElementById("sliderFrame");
        if (elem.style.display === 'block') {
            elem.style.display = 'none';
        }
    }
</script>

@endsection