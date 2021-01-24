@extends('layouts.admin')

@section('title', 'Admin Panel - Sıkça Sorulan Soru Ekleme')

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>Sıkça Sorulan Soru Ekleme</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Question</label>
                                <div class="col-sm-9">
                                    <input type="text" name="question" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Answer</label>
                                <div class="col-sm-9">
                                    <textarea id="summernote" name="answer"></textarea>
                                    <script>
                                        $('#summernote').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-9">
                                    <input type="number" name="position" class="form-control">
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

                            <button type="submit" class="btn btn-success btn-fw"><i class="mdi mdi-check"></i>Sıkça Sorulan Soru Ekle</button>
                            <a href="{{route('admin_faq')}}" class="btn btn-secondary btn-fw">İptal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
