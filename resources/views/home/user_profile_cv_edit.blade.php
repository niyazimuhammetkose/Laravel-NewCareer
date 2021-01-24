@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_responsive.css">

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
                                <form class="forms-sample" action="{{route('user_cv_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" value="{{ $data->name }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" value="{{ $data->email }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="phone" value="{{ $data->phone }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" value="{{ $data->address }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cinsiyet</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="cinsiyet" value="{{ $data->cinsiyet }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Uyruk</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="uyruk" value="{{ $data->uyruk }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ehliyet</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ehliyet" value="{{ $data->ehliyet }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Askerlik</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="askerlik" value="{{ $data->askerlik }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Deneyim</label>
                                        <div class="col-sm-9">
                                            <textarea id="deneyim" name="deneyim" >{{ $data->deneyim }}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'deneyim' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Eğitim</label>
                                        <div class="col-sm-9">
                                            <textarea id="egitim" name="egitim" >{{ $data->egitim }}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'egitim' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Yabancı Dil</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="yabanci_dil" value="{{ $data->yabanci_dil }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Yetenekler</label>
                                        <div class="col-sm-9">
                                            <textarea id="yetenekler" name="yetenekler" >{{ $data->yetenekler }}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'yetenekler' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Hobiler</label>
                                        <div class="col-sm-9">
                                            <textarea id="hobiler" name="hobiler" >{{ $data->hobiler }}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'hobiler' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status">
                                                <option selected="selected">{{ $data->status }}</option>
                                                <option>New</option>
                                                <option>Old</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-fw"><i class="mdi mdi-check"></i>Özgeçmiş Güncelle</button>
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
