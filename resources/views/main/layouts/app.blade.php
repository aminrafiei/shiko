<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap4.css') }}">

    <title>Document</title>
</head>
<body>
<div class="container">
@yield('content')
</div>

<script src="{{ asset('/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('/js/bootstrap4.js') }}"></script>

@stack('scripts')


</body>
</html>