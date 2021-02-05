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
    {{$setting->title}} | {{$data->title}}
@endsection

@section('content')

    <!-- Single Blog Post -->

    <div class="single_post">
        <div class="container">
            <div class="row">

                <!-- İlan Bilgileri -->

                <div class="col-lg-6 offset-lg-2">
                    <div class="single_post_title">{{$data->title}}</div>

                    <div class="single_post_title">
                        <div class="quote_image"><img src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}" width="550" alt=""></div>
                    </div>

                    <div class="single_post_text">
                        <strong>GENEL NİTELİKLER VE İŞ TANIMI</strong>
                        <p>{!! $data->detail !!}</p>

                        <!-- Aday Kriterleri -->
                        <div class="single_post_quote">
                            <div class="quote_image"><img src="{{ asset('assets') }}/images/char_4.png" alt=""><strong>ADAY KRİTERLERİ</strong></div>
                            <div class="quote_text">

                                <div class="card-body">
                                    <form class="forms-sample">
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Tecrübe:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->tecrube }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Askerlik:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->askerlik }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Eğitim Seviyesi:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->egitim }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Üniversite Bölümü:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->bolum }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Yabancı Dil:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->yabanci_dil }}
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <!-- Pozisyon Bilgileri -->
                        <div class="single_post_quote">
                            <div class="quote_image"><img src="{{ asset('assets') }}/images/quote.png" alt=""><strong>POZİSYON BİLGİLERİ</strong></div>
                            <div class="quote_text">

                                <div class="card-body">
                                    <form class="forms-sample">
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Sektör:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->sektor->title }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Departman:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->departman }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Çalışma Şekli:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->calisma_sekli }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Pozisyon Seviyesi:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->pozisyon }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3"><a class="quote_name">Şehir:</a></label>
                                            <div class="col-sm-9">
                                                {{ $data->sehir }}
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>


                <!-- Firma Bilgileri -->

                <div class="col-lg-3 offset-1">

                    <div class="card">
                        <div class="quote">

                            <div class="card-header align-content-center justify-content-center">
                                <div class="quote_image"><img src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}" width="100" alt=""></div>
                                <div class="center-block">
                                    {{ $data->firma_adi }}
                                </div>
                            </div>

                            <div class="card-body">
                                <form class="forms-sample">
                                    <div class="row">
                                        <strong>Firma sektörü:</strong>
                                        {{ $data->sektor->title }}
                                    </div>
                                    <div class="row">
                                        <strong>Çalışma Şekli:</strong>
                                        {{ $data->calisma_sekli }}
                                    </div>
                                    <div class="row">
                                        <strong>Sosyal Haklar:</strong>
                                    </div>
                                    <div class="row">
                                        <strong>Çalışan Sayısı:</strong>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- Başvuru Buton -->
                    <div class="contact_form_button">
                        <button type="submit" class="button contact_submit_button">
                            <a href="{{route('user_app', ['id' => $data->id])}}">Başvuru Yap</a>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
