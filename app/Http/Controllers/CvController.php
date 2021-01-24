<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist = Cv::where('user_id', Auth::id())->get();
        return view('home.user_profile_cv', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.user_profile_cv_add');
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
        $data = new Cv;
        $data->user_id= Auth::id();
        $data->name= $request->input('name');
        $data->email= $request->input('email');
        $data->phone= $request->input('phone');
        $data->address= $request->input('address');
        $data->cinsiyet= $request->input('cinsiyet');
        $data->uyruk= $request->input('uyruk');
        $data->ehliyet= $request->input('ehliyet');
        $data->askerlik= $request->input('askerlik');
        $data->deneyim= $request->input('deneyim');
        $data->egitim= $request->input('egitim');
        $data->yabanci_dil= $request->input('yabanci_dil');
        $data->yetenekler= $request->input('yetenekler');
        $data->hobiler= $request->input('hobiler');
        $data->status= $request->input('status');
        $data->save();
        return redirect()->route('user_cv')->with('info', 'Özgeçmiş Eklendi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Cv $cv,$id)
    {
        //
        $data = Cv::find($id);
        return view('home.user_profile_cv_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Cv $cv,$id)
    {
        //
        $data = Cv::find($id);
        $data->user_id= Auth::id();
        $data->name= $request->input('name');
        $data->email= $request->input('email');
        $data->phone= $request->input('phone');
        $data->address= $request->input('address');
        $data->cinsiyet= $request->input('cinsiyet');
        $data->uyruk= $request->input('uyruk');
        $data->ehliyet= $request->input('ehliyet');
        $data->askerlik= $request->input('askerlik');
        $data->deneyim= $request->input('deneyim');
        $data->egitim= $request->input('egitim');
        $data->yabanci_dil= $request->input('yabanci_dil');
        $data->yetenekler= $request->input('yetenekler');
        $data->hobiler= $request->input('hobiler');
        $data->status= $request->input('status');
        $data->save();
        return redirect()->route('user_cv')->with('info', 'Özgeçmiş Güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Cv $cv,$id)
    {
        $data = Cv::find($id);
        $data->delete();
        return redirect()->route('user_cv')->with('info', 'Özgeçmiş Silindi!');

    }
}
