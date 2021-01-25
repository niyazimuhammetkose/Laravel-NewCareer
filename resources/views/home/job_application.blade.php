@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/blog_single_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/blog_single_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/contact_responsive.css">
    <script src="{{ asset('assets') }}/js/blog_single_custom.js"></script>
@endsection

@section('title')
    {{$setting->title}} | {{$data->title}} Application
@endsection

@section('content')

    <!-- Single Blog Post -->

    <div class="single_post">
        <div class="container">
            <div class="row">

                <!-- İlan Bilgileri -->

                <div class="col-lg-8 offset-lg-2">

                    @include('home.message')

                    <div class="single_post_text">
                        <div class="single_post_quote text-center">
                            <div class="quote_text"><h6>{{ $data->firma_adi }}</h6></div>
                            <div class="quote_name"><a href="{{route('job',['id' => $data->id, 'slug' => $data->slug])}}">{{ $data->title }}</a></div>
                            <div class="quote_image"><a>{{ $data->sehir }}</a></div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">

                <!-- Özgeçmiş Bilgileri -->

                <div class="col-lg-8 offset-lg-2">

                    <div class="single_post_text">
                        <div class="single_post_quote text-center">
                            <form class="form-sample" action="{{route('user_app_store', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><a class="quote_name">Özgeçmiş Seçiniz</a></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="cv_id">
                                            @foreach( $datalist as $rs )
                                                <option value="{{ $rs->id }}">{{ $rs->created_at }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Başvuru Buton -->
                                <div class="contact_form_button">
                                    <button type="submit" class="button contact_submit_button">
                                        Başvuruyu Tamamla
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
