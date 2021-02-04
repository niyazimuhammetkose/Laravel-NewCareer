@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_responsive.css">
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

                        <div class="card">
                            <div class="card-body">
                                <form class="form-sample" action="{{route('user_jobs_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="category_id">
                                                @foreach( $datalist as $rs )
                                                    <option value="{{ $rs->id }}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Keywords</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="keywords" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Detail</label>
                                        <div class="col-sm-9">
                                            <textarea id="detail" name="detail" ></textarea>
                                            <script>
                                                CKEDITOR.replace( 'detail' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tecrübe</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tecrube" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Askerlik</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="askerlik" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Eğitim</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="egitim" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bölüm</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="bolum" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Yabancı Dil</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="yabanci_dil" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Firma Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="firma_adi" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sektör</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sektor" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Departman</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="departman" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Çalışma Şekli</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="calisma_sekli" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pozisyon</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pozisyon" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Şehir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sehir" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="slug" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-fw"><i class="mdi mdi-check"></i>İş İlanı Ekle</button>
                                    <a href="{{route('user_jobs')}}" class="btn btn-secondary btn-fw">İptal</a>
                                </form>
                            </div>
                        </div>

                    @show

                </div>
            </div>

        </div>
    </div>

@endsection
