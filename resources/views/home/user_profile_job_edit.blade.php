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
                                <form class="forms-sample" action="{{route('user_jobs_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="category_id">
                                                @foreach( $datalist as $rs )
                                                    <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif ">
                                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" value="{{ $data->title }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Keywords</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="keywords" value="{{ $data->keywords }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="description" value="{{ $data->description }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" class="form-control">
                                            @if($data->image)
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}" height="120" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Detail</label>
                                        <div class="col-sm-9">
                                            <textarea id="detail" name="detail" >{{ $data->detail }}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'detail' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tecrübe</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tecrube" value="{{ $data->tecrube }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Askerlik</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="askerlik" value="{{ $data->askerlik }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Eğitim</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="egitim" value="{{ $data->egitim }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bölüm</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="bolum" value="{{ $data->bolum }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Yabancı Dil</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="yabanci_dil" value="{{ $data->yabanci_dil }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Firma Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="firma_adi" value="{{ $data->firma_adi }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sektör</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sektor" value="{{ $data->sektor }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Departman</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="departman" value="{{ $data->departman }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Çalışma Şekli</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="calisma_sekli" value="{{ $data->calisma_sekli }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pozisyon</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pozisyon" value="{{ $data->pozisyon }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Şehir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sehir" value="{{ $data->sehir }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="slug" value="{{ $data->slug }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status">
                                                <option selected="selected">{{ $data->status }}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-fw"><i class="mdi mdi-check"></i>İş İlanı Güncelle</button>
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
