@extends('layouts.index')

<link href="{{asset('icomoon/style.css')}}" rel="stylesheet">


{{--
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>
--}}

@section('content')


    <div  id="main-container-product">


        {{--start side bar filtering--}}


        <div class="container" id="sid-bar-container-product">

            <div class="side-shape" id="side-category">


                dv,ls;

            </div>


        </div>

        {{--end side bar filtering --}}




        {{-- start main product --}}


        <div class="container" id="products-container-product">

            <div class="container-filter">



            </div>

            <div class="products-container-product-main">



                <div class="products-container-product-shape">

                    sss

                </div>

            </div>


        </div>





    </div>


@endsection