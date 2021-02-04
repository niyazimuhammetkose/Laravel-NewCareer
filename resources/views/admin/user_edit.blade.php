@extends('layouts.admin')

@section('title', 'Admin Panel - Kullanıcı Düzenleme')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>Kullanıcı Düzenleme</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
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
                                <label class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control">
                                    @if($data->profile_photo_path)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($data->profile_photo_path) }}" height="120" alt="">
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Kullanıcı Güncelle</button>
                            <a href="{{route('admin_users')}}" class="btn btn-light">İptal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
