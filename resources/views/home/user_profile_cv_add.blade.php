@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_responsive.css">
@endsection

@section('title')
    {{$setting->title}} | User Profile Cv
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

                        <div class="card">
                            <div class="card-body">
                                <form class="form-sample" action="{{route('user_cv_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cinsiyet</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="cinsiyet" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Uyruk</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="uyruk" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ehliyet</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ehliyet" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Askerlik</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="askerlik" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Deneyim</label>
                                        <div class="col-sm-9">
                                            <textarea id="deneyim" name="deneyim" ></textarea>
                                            <script>
                                                CKEDITOR.replace( 'deneyim' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Eğitim</label>
                                        <div class="col-sm-9">
                                            <textarea id="egitim" name="egitim" ></textarea>
                                            <script>
                                                CKEDITOR.replace( 'egitim' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Yabancı Dil</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="yabanci_dil" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Yetenekler</label>
                                        <div class="col-sm-9">
                                            <textarea id="yetenekler" name="yetenekler" ></textarea>
                                            <script>
                                                CKEDITOR.replace( 'yetenekler' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Hobiler</label>
                                        <div class="col-sm-9">
                                            <textarea id="hobiler" name="hobiler" ></textarea>
                                            <script>
                                                CKEDITOR.replace( 'hobiler' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status">
                                                <option selected="selected">New</option>
                                                <option>Old</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-fw"><i class="mdi mdi-check"></i>Özgeçmiş Ekle</button>
                                    <a href="{{route('user_cv')}}" class="btn btn-secondary btn-fw">İptal</a>
                                </form>
                            </div>
                        </div>

                    @show

                </div>
            </div>

        </div>
    </div>

@endsection
