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
    {{$setting->title}} | User Profile Jobs
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

                        <a href="{{route('user_jobs_add')}}" type="button" class="btn btn-info btn-fw">İş İlanı Ekle</a>

                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">İş İlanları</h4>
                                        @include('home.message')
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $datalist as $rs )
                                                <tr>
                                                    <td>{{ $rs->id }}</td>
                                                    <td>{{ $rs->title }}</td>
                                                    <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                                    <td>{{ $rs->firma_adi }}</td>
                                                    <td>{{ $rs->status }}</td>
                                                    <td><a href="{{route('user_jobs_edit', ['id'=>$rs->id])}}"><i class="fa fa-pencil-square-o"></i></a></td>
                                                    <td><a href="{{route('user_jobs_delete', ['id'=>$rs->id])}}" onclick="return confirm('İlan Silinecek! Emin misin?')"><i class="fa fa-trash-o"></i></a></td>
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
