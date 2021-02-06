<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departman;
use Illuminate\Http\Request;

class DepartmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist = Departman::all();
        $context = [
            'datalist'=>$datalist,
        ];
        return view('admin.departman', $context);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.departman_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Departman;
        $data->title = $request->input('title');
        $data->save();
        return redirect()->route('admin_departman')->with('info', 'Departman Eklendi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departman $departman
     * @return \Illuminate\Http\Response
     */
    public function show(Departman $departman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departman $departman
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Departman $departman,$id)
    {
        //
        $data = Departman::find($id);
        $context = [
            'data'=>$data,
        ];
        return view('admin.departman_edit', $context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departman $departman
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Departman $departman,$id)
    {
        //
        $data = Departman::find($id);
        $data->title = $request->input('title');
        $data->save();
        return redirect()->route('admin_departman')->with('info', 'Departman Güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departman $departman
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Departman $departman,$id)
    {
        //
        $data = Departman::find($id);
        $data->delete();
        return redirect()->route('admin_departman')->with('info', 'Departman Silindi!');
    }
}
