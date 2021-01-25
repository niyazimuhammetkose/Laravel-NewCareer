@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_responsive.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection

@section('title')
    {{$setting->title}} | User Profile Application Detail
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
                                        <form class="forms-sample">
                                            @foreach($datalist as $rs)
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"><h6>Firma</h6></label>
                                                    <div class="col-sm-9">
                                                        <a>{{ $rs->job->firma_adi }}</a>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"><h6>İlan</h6></label>
                                                    <div class="col-sm-9">
                                                        <a href="{{ route('job', ['id' => $rs->job_id, 'slug' => $rs->job->slug]) }}">{{ $rs->job->title }}</a>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"><h6>Özgeçmiş</h6></label>
                                                    <div class="col-sm-9">
                                                        <a href="{{ route('user_cv_edit', ['id' => $rs->cv_id]) }}">{{ $rs->cv->created_at }}</a>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"><h6>Status</h6></label>
                                                    <div class="col-sm-9">
                                                        <a>{{ $rs->status }}</a>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"><h6>Başvuru Tarihi</h6></label>
                                                    <div class="col-sm-9">
                                                        <a>{{ $rs->created_at }}</a>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"><h6>Not</h6></label>
                                                    <div class="col-sm-9">
                                                        <a>{{ $rs->note }}</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </form>
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
