<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist = User::all();
        return view('admin.user', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        //
        $data = User::find($id);
        $datalist = Role::all()->sortBy('name');
        $context = [
            'data' => $data,
            'datalist' => $datalist,
        ];
        return view('admin.user_show', $context);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        //
        $data = User::find($id);
        return view('admin.user_edit', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        //
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        if($request->file('image')!=null){
            $data->profile_photo_path = Storage::putFile('profile_photos', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_users')->with('info', 'Kullanıcı Bilgileri Güncellendi!');
    }

    public function user_roles(User $user, $id)
    {
        //
        $data = User::find($id);
        $datalist = Role::all()->sortBy('name');
        $context = [
            'data' => $data,
            'datalist' => $datalist,
        ];
        return view('admin.user_roles', $context);
    }

    public function user_role_add(Request $request, User $user, $id)
    {
        //
        $user = User::find($id);
        $roleid = $request->input('roleid');
        $user->roles()->attach($roleid);
        return back()->with('info', 'Role Added To User!');
    }

    public function user_role_delete(Request $request, User $user, $userid, $roleid)
    {
        //
        $user = User::find($userid);
        $user->roles()->detach($roleid);
        return back()->with('info', 'Rol Kullanıcıdan Silindi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
