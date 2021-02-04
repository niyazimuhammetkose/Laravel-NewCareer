@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_responsive.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
@endsection

@section('title')
    {{$setting->title}} | User Profile Application
@endsection

@section('content')

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 offset-1">
                    @include('home.user_menu')
                </div>

                <div class="col-lg-9">


                    @section('user_profile_content')

                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Başvurularım</h4>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Job</th>
                                                <th>Cv</th>
                                                <th>Status</th>
                                                <th>Note</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $datalist as $rs )
                                                <tr>
                                                    <td>{{ $rs->id }}</td>
                                                    <td>{{ $rs->job->title}}</td>
                                                    <td>{{ $rs->cv->created_at }}</td>
                                                    <td>{{ $rs->status }}</td>
                                                    <td>{{ $rs->note }}</td>
                                                    <td><a href="{{route('user_app_show', ['id'=>$rs->id])}}"><i class="fa fa-pencil-square-o"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @show

                </div>
            </div>

        </div>
    </div>

@endsection
