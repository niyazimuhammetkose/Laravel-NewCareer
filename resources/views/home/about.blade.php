@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp
@endsection

@section('title')
    {{$setting->title}} | About Us
@endsection

@section('content')
    <div class="col-sm-12">
        <h1>About Us</h1>
        aaaaaaaaaaaaaaaaaaaaaaaaaaa
        <br>
        bbbbbbbbbbbbbbbbbbbbbbbbbb
        <br>
        ccccccccccccccccccccccccc<br>
        ddddddddddddddddddddddddd<br>
        kkkkkkkkkkkkkkkkkkkkkkkkkkk
        <br>
        <br>
    </div>
@endsection
