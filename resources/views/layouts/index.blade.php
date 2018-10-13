<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sirco</title>

    <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap4.css') }}">
    <!--script src="{{asset('jquery-3.2.1.js')}}"></script-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<br>
<br>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@include('layouts.error')
@yield('content')

<script>
    $('.handle').on('click', function () {
       $('nav ul').toggleClass('showing');
       $('nav').toggleClass('showing');
    });
</script>
</div>
</body>
</html>