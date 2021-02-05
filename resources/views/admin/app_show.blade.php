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
<title> {{ $data->user->name }} İş Başvurusu</title>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">İş Başvurusu Detayı</h4>
                @include('home.message')
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Profile Photo</th>
                        <td>
                            @if($data->user->profile_photo_path)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($data->user->profile_photo_path) }}" height="300" style="border-radius: 10px" alt="">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $data->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Job</th>
                        <td>{{ $data->job->title }}</td>
                    </tr>
                    <tr>
                        <th>Company</th>
                        <td>{{ $data->job->firma_adi }}</td>
                    </tr>
                    <tr>
                        <th>Cv</th>
                        <td>{{ $data->cv->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Ip</th>
                        <td>{{ $data->ip }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                    <form role="form" action="{{route('admin_app_update', ['id'=>$data->id])}}" method="post">
                        @csrf
                        <tr>
                            <th>Note</th>
                            <td>
                                <textarea name="note" rows="2">{{ $data->note }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <select name="status">
                                    <option selected="selected" value="{{ $data->id }}">{{ $data->status }}</option>
                                    <option>New</option>
                                    <option>Old</option>
                                </select>
                                <button type="submit" class="btn btn-success mr-2">İş Başvurusunu Güncelle</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
