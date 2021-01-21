<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
<link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/vendors/css/vendor.bundle.addons.css">
<!-- endinject -->
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/css/shared/style.css">
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="{{ asset('assets') }}/admin/assets/css/demo_1/style.css">
<!-- End Layout styles -->
<link rel="shortcut icon" href="{{ asset('assets') }}/admin/assets/images/favicon.ico" />

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">İletişim Mesajı Detayları</h4>
                @include('home.message')
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            {{ $data->name }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            {{ $data->email }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            {{ $data->phone }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-9">
                            {{ $data->subject }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-9">
                            {{ $data->message }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Admin Note</label>
                        <div class="col-sm-9">
                            <textarea id="note" name="note" >{{ $data->note }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-fw"><i class="mdi mdi-check"></i>İletişim Mesajı Güncelle</button>
                    <a href="{{route('admin_message')}}" class="btn btn-secondary btn-fw">İptal</a>
                </form>
            </div>
        </div>
    </div>
</div>

