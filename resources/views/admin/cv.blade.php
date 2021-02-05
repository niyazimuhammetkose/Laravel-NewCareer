@extends('layouts.admin')

@section('title', 'Admin Panel - Özgeçmişler')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>Özgeçmişler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Özgeçmişler</h4>
                        @include('home.message')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Create Date</th>
                                <th>Update Date</th>
                                <th>Status</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td><a href="{{route('admin_user_show',['id'=>$rs->user->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')">{{ $rs->user->name}}</a></td>
                                    <td>{{ $rs->created_at }}</td>
                                    <td>{{ $rs->updated_at }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a href="{{route('admin_cv_show', ['id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')"><i class="fa fa-pencil-square-o"></i></a></td>
                                    <td><a href="{{route('admin_cv_delete', ['id'=>$rs->id])}}" onclick="return confirm('Cv Silinecek! Emin misin?')"><i class="fa fa-trash-o"></i></a></td>
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
