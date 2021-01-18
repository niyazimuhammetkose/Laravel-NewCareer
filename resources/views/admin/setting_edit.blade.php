@extends('layouts.admin')

@section('title', 'Admin Panel - Site Ayarları Düzenleme')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links ml-auto">
                            <li><a href="{{ route('admin_home') }}">Anasayfa</a></li>
                            <li>Site Ayarları Düzenleme</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('admin_setting_update',['id'=>$data->id])}}"method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
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
                                <label class="col-sm-3 col-form-label">Company</label>
                                <div class="col-sm-9">
                                    <input type="text" name="company" value="{{ $data->company }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" value="{{ $data->address }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" value="{{ $data->phone }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fax</label>
                                <div class="col-sm-9">
                                    <input type="text" name="fax" value="{{ $data->fax }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" value="{{ $data->email }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smtpserver</label>
                                <div class="col-sm-9">
                                    <input type="text" name="smtpserver" value="{{ $data->smtpserver }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smtpemail</label>
                                <div class="col-sm-9">
                                    <input type="text" name="smtpemail" value="{{ $data->smtpemail }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Smtppassword</label>
                                <div class="col-sm-9">
                                    <input type="password" name="smtppassword" value="{{ $data->smtppassword }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">smtpport</label>
                                <div class="col-sm-9">
                                    <input type="number" name="smtpport" value="{{ $data->smtpport }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input type="text" name="facebook" value="{{ $data->facebook }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" name="instagram" value="{{ $data->instagram }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Twitter</label>
                                <div class="col-sm-9">
                                    <input type="text" name="twitter" value="{{ $data->twitter }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Youtube</label>
                                <div class="col-sm-9">
                                    <input type="text" name="youtube" value="{{ $data->youtube }}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">About Us</label>
                                <div class="col-sm-9">
                                    <textarea id="aboutus" name="aboutus" >{{ $data->aboutus }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Contact</label>
                                <div class="col-sm-9">
                                    <textarea id="contact" name="contact" >{{ $data->contact }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">References</label>
                                <div class="col-sm-9">
                                    <textarea id="references" name="references" >{{ $data->references }}</textarea>
                                    <script>
                                        $('#aboutus').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
                                        $('#contact').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
                                        $('#references').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
                                    </script>
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
                            <button type="submit" class="btn btn-success btn-fw"><i class="mdi mdi-check"></i>Site Ayarlarını Güncelle</button>
                            <a href="{{route('admin_home')}}" class="btn btn-secondary btn-fw">İptal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
