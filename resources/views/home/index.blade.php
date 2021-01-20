@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp
@endsection

@section('title', $setting->title)

@section('description', $setting->description)

@section('keywords', $setting->keywords)

@section('content')
    @include('home._content')
@endsection
