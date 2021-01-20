@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp
@endsection

@section('title')
    {{$setting->title}} | Blank Page
@endsection

@section('content')

    <div class="container">
        <div class="container">
            <div class="row">

                İçerik Alanı

            </div>
        </div>
    </div>

@endsection
