@extends('layouts.admin')

@section('title', 'Admin Panel - İş İlanı Düzenleme')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>İş İlanı Düzenleme</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('admin_jobs_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
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
                                    <select class="form-control" name="sektor_id">
                                        @foreach( $sektorlist as $rs )
                                            <option value="{{ $rs->id }}" @if ($rs->id == $data->sektor_id) selected="selected" @endif >
                                            {{ $rs->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Departman</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="departman_id">
                                        @foreach( $departmanlist as $rs )
                                            <option value="{{ $rs->id }}" @if ($rs->id == $data->departman_id) selected="selected" @endif >
                                                {{ $rs->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Çalışma Şekli</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="calisma_sekli">
                                        <option selected="selected">{{ $data->calisma_sekli }}</option>
                                        <option>Sürekli / Tam Zamanlı</option>
                                        <option>Part Time</option>
                                    </select>
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
                                    <select class="form-control" name="sehir_id">
                                        @foreach( $sehirlist as $rs )
                                            <option value="{{ $rs->id }}" @if ($rs->id == $data->sehir_id) selected="selected" @endif >
                                                {{ $rs->title }}
                                            </option>
                                        @endforeach
                                    </select>
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
                            <a href="{{route('admin_jobs')}}" class="btn btn-secondary btn-fw">İptal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
