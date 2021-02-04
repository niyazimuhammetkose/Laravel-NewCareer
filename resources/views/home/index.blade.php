@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp
@endsection

@section('footerjs')
    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/styles/bootstrap4/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/plugins/greensock/TweenMax.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/greensock/TimelineMax.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/greensock/animation.gsap.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{ asset('assets') }}/plugins/slick-1.8.0/slick.js"></script>
    <script src="{{ asset('assets') }}/plugins/easing/easing.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
@endsection

@section('title', $setting->title)

@section('description', $setting->description)

@section('keywords', $setting->keywords)

@section('content')

    @include('home._slider')

    @include('home._content')

@endsection
