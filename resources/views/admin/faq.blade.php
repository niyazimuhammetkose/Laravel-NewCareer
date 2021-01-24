@extends('layouts.admin')

@section('title', 'Admin Panel - Sıkça Sorulan Sorular')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links">
                            <li><a href="{{route('admin_faq_add')}}" type="button" class="btn btn-info btn-fw">Sıkça Sorulan Soru Ekle</a></li>
                        </ul>
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>Sıkça Sorulan Sorular</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sıkça Sorulan Sorular</h4>
                        @include('home.message')
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->question }}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{{ $rs->position }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a href="{{route('admin_faq_edit', ['id'=>$rs->id])}}"><i class="fa fa-pencil-square-o"></i></a></td>
                                    <td><a href="{{route('admin_faq_delete', ['id'=>$rs->id])}}" onclick="return confirm('Sıkça Sorulan Soru Silinecek! Emin misin?')"><i class="fa fa-trash-o"></i></a></td>
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

