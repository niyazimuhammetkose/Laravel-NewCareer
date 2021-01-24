@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/blog_single_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/blog_single_responsive.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function (){
            $( '#accordion' ).accordion();
        } );
    </script>
@endsection

@section('title')
    {{$setting->title}} | Sıkça Sorulan Sorular
@endsection

@section('content')

    <div class="single_post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-2">
                    <div id="accordion">
                        @foreach($datalist as $rs)
                            <h3>{{ $rs->question }}</h3>
                            <div>
                                <p>{!! $rs->answer !!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
