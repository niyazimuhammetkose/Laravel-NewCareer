<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sehir;
use Illuminate\Http\Request;

class SehirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist = Sehir::all();
        $context = [
            'datalist'=>$datalist,
        ];
        return view('admin.sehir', $context);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sehir_add');
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
        $data = new Sehir;
        $data->title = $request->input('title');
        $data->save();
        return redirect()->route('admin_sehir')->with('info', 'Şehir Eklendi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sehir  $sehir
     * @return \Illuminate\Http\Response
     */
    public function show(Sehir $sehir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sehir  $sehir
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Sehir $sehir,$id)
    {
        //
        $data = Sehir::find($id);
        $context = [
            'data'=>$data,
        ];
        return view('admin.sehir_edit', $context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sehir  $sehir
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Sehir $sehir, $id)
    {
        //
        $data = Sehir::find($id);
        $data->title = $request->input('title');
        $data->save();
        return redirect()->route('admin_sehir')->with('info', 'Şehir Güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sehir  $sehir
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Sehir $sehir,$id)
    {
        //
        $data = Sehir::find($id);
        $data->delete();
        return redirect()->route('admin_sehir')->with('info', 'Şehir Silindi!');
    }
}
