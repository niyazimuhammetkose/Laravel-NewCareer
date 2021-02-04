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
                <h4 class="card-title">Kullanıcı Rolleri</h4>
                @include('home.message')
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Name</th>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            <table>
                                @foreach($data->roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete', ['userid'=>$data->id, 'roleid'=>$role->id])}}" onclick="return confirm('User Role is going to delete! Are you sure?')"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th>Add Role</th>
                        <td>
                            <form role="form" action="{{route('admin_user_role_add', ['id'=>$data->id])}}" method="post">
                                @csrf
                                <select name="roleid">
                                    @foreach($datalist as $rolelist)
                                        <option value="{{ $rolelist->id }}">{{ $rolelist->name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-success mr-2">Add Role</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
