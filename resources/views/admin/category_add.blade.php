@extends('layouts.admin')

@section('title', 'Admin Panel - Kategori Ekleme')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>Kategori Ekleme</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('admin_category_create')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Parent Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="parent_id">
                                        <option value="0" selected="selected">Ana Kategori</option>
                                        @foreach( $datalist as $rs )
                                            <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
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
                            <button type="submit" class="btn btn-success btn-fw"><i class="mdi mdi-check"></i>Kategori Ekle</button>
                            <a href="{{route('admin_category')}}" class="btn btn-secondary btn-fw">İptal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
