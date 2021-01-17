@extends('layouts.admin')

@section('title', 'Admin Panel - İş İlanları')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links">
                            <li><a href="{{route('admin_jobs_add')}}" type="button" class="btn btn-info btn-fw">İş İlanı Ekle</a></li>
                        </ul>
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>İş İlanları</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">İş İlanları</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Company</th>
                                <th>Status</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->category_id }}</td>
                                    <td>{{ $rs->firma_adi }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a href="{{route('admin_jobs_edit', ['id'=>$rs->id])}}"><i class="fa fa-pencil-square-o"></i></a></td>
                                    <td><a href="{{route('admin_jobs_delete', ['id'=>$rs->id])}}" onclick="return confirm('İlan Silinecek! Emin misin?')"><i class="fa fa-trash-o"></i></a></td>
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

