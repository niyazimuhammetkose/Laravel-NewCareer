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
<title> {{ $data->user->name }} Özgeçmiş</title>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Özgeçmiş Detayı</h4>
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
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $data->phone }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $data->address }}</td>
                    </tr>
                    <tr>
                        <th>Cinsiyet</th>
                        <td>{{ $data->cinsiyet }}</td>
                    </tr>
                    <tr>
                        <th>Uyruk</th>
                        <td>{{ $data->uyruk }}</td>
                    </tr>
                    <tr>
                        <th>Ehliyet</th>
                        <td>{{ $data->ehliyet }}</td>
                    </tr>
                    <tr>
                        <th>Askerlik</th>
                        <td>{{ $data->askerlik }}</td>
                    </tr>
                    <tr>
                        <th>Deneyim</th>
                        <td>{!! $data->deneyim !!}</td>
                    </tr>
                    <tr>
                        <th>Eğitim</th>
                        <td>{!! $data->egitim !!}</td>
                    </tr>
                    <tr>
                        <th>Yabancı Dil</th>
                        <td>{{ $data->yabanci_dil }}</td>
                    </tr>
                    <tr>
                        <th>Yetenekler</th>
                        <td>{!! $data->yetenekler !!}</td>
                    </tr>
                    <tr>
                        <th>Hobiler</th>
                        <td>{!! $data->hobiler !!}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <form role="form" action="{{route('admin_cv_update', ['id'=>$data->id])}}" method="post">
                                @csrf
                                <select name="status">
                                    <option selected="selected" value="{{ $data->id }}">{{ $data->status }}</option>
                                    <option>New</option>
                                    <option>Old</option>
                                </select>
                                <button type="submit" class="btn btn-success mr-2">Özgeçmiş Güncelle</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
