<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title> @yield('title') </title>
    <meta charset="UTF-8">
    <meta name="description" content=@yield('description')>
    <meta name="keywords" content=@yield('keywords')>
    <meta name="author" content="Ersin Topcu" )>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('assets')}}images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets')}}images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
    @yield('headerjs')
</head>

<body>
@include('home._header')

@include(('home._slider'))

@include('home._welcome')

@include('home._products')

@include('home._gallery')

@include('home._ announcement')

@include('home._contact')

@include('home._footer')
@yield('footerjs')


</body>
</html>
