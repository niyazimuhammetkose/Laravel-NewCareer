@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_responsive.css">
@endsection

@section('title')
    {{$setting->title}} | Contact
@endsection

@section('content')

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 offset-1">
                    {!! $setting->contact !!}
                </div>

                <div class="col-lg-5">

                    <!-- Shop Content -->

                    <div class="shop_content">
                        <div class="sidebar_title">İletişim Formu</div>
                        <div>
                            Form Elemanları
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
