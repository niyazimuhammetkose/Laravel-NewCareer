@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp
@endsection

@section('footerjs')
    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/styles/bootstrap4/popper.js"></script>
    <script src="{{ asset('assets') }}/styles/bootstrap4/bootstrap.min.js"></script>
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
    @include('home._content')
@endsection
