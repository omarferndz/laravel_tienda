<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('My Laravel - Dashboaard')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">    
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>
<body>

    @if(\Session::has('message'))
        @include('admin.partials.message')
    @endif

    @include('admin.partials.nav')

    @yield('content')

    @include('admin.partials.footer')  

    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset( 'admin/js/main.js') }}"></script>   
    
</body>
</html>