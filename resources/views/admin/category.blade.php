@extends('layouts.admin')

@section('title', 'Admin Panel - Kategori')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links">
                            <li><a href="{{route('admin_category_add')}}" type="button" class="btn btn-info btn-fw">Kategori Ekle</a></li>
                        </ul>
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>Kategoriler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategoriler</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Status</th>>
                                <th>Edit</th>>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->parent_id }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a href="{{route('admin_category_edit', ['id'=>$rs->id])}}">Düzenle</a></td>
                                    <td><a href="{{route('admin_category_delete', ['id'=>$rs->id])}}" onclick="return confirm('Kategori Silinecek! Emin misin?')">Sil</a></td>
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

