<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content="Alex de Souza">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('assets') }}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/responsive.css">

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    @yield('css')
    @yield('headerjs')

</head>

<body>
<div class="super_container">
    @include('home._header')


    @section('content')
        İçerik Alanı
    @show

    @include('home._footer')
    @yield('footerjs')
</div>
</body>

</html>
