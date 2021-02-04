@extends('layouts.admin')

@section('title', 'Admin Panel - Kullanıcılar')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>Kullanıcılar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kullanıcılar</h4>
                        @include('home.message')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Roles</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        @if($rs->profile_photo_path)
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->profile_photo_path) }}" height="30" alt="" class="img-sm profile-pic">
                                        @endif
                                    </td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->phone}}</td>
                                    <td>
                                        @foreach($rs->roles as $role)
                                            {{ $role->name }},
                                        @endforeach
                                        <a href="{{route('admin_user_roles', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')">
                                            <i class="fa fa-plus-circle"></i>
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin_user_edit', ['id'=>$rs->id])}}"><i class="fa fa-pencil-square-o"></i></a></td>
                                    <td><a href="{{route('admin_user_delete', ['id'=>$rs->id])}}" onclick="return confirm('Kullanıcı silinecek! Emin misiniz?')"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
