<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\Sektor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist = Job::all();
        return view('admin.job', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datalist = Category::with('children')->get();
        $sektorlist = Sektor::all();
        $context = [
            'datalist'=>$datalist,
            'sektorlist'=>$sektorlist,
        ];
        return view('admin.job_add', $context);
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
        $data = new Job;
        $data->title= $request->input('title');
        $data->keywords= $request->input('keywords');
        $data->description= $request->input('description');
        $data->category_id= $request->input('category_id');
        $data->image= Storage::putFile('images', $request->file('image'));
        $data->detail= $request->input('detail');
        $data->tecrube= $request->input('tecrube');
        $data->askerlik= $request->input('askerlik');
        $data->egitim= $request->input('egitim');
        $data->bolum= $request->input('bolüm');
        $data->yabanci_dil= $request->input('yabanci_dil');
        $data->firma_adi= $request->input('firma_adi');
        $data->sektor_id= $request->input('sektor_id');
        $data->departman= $request->input('departman');
        $data->calisma_sekli= $request->input('calisma_sekli');
        $data->pozisyon= $request->input('pozisyon');
        $data->sehir= $request->input('sehir');
        $data->user_id= Auth::id();
        $data->status= $request->input('status');
        $data->slug= $request->input('slug');
        $data->save();
        return redirect()->route('admin_jobs')->with('info', 'İş İlanı Eklendi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Job $job,$id)
    {
        //
        $data = Job::find($id);
        $datalist = Category::with('children')->get();
        $sektorlist = Sektor::all();
        $context = [
            'data'=>$data,
            'datalist'=>$datalist,
            'sektorlist'=>$sektorlist,
        ];
        return view('admin.job_edit', $context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Job $job,$id)
    {
        //
        $data = Job::find($id);
        $data->title= $request->input('title');
        $data->keywords= $request->input('keywords');
        $data->description= $request->input('description');
        $data->category_id= $request->input('category_id');
        $data->detail= $request->input('detail');
        $data->tecrube= $request->input('tecrube');
        $data->askerlik= $request->input('askerlik');
        $data->egitim= $request->input('egitim');
        $data->bolum= $request->input('bolum');
        $data->yabanci_dil= $request->input('yabanci_dil');
        $data->firma_adi= $request->input('firma_adi');
        $data->sektor_id= $request->input('sektor_id');
        $data->departman= $request->input('departman');
        $data->calisma_sekli= $request->input('calisma_sekli');
        $data->pozisyon= $request->input('pozisyon');
        $data->sehir= $request->input('sehir');
        $data->user_id= Auth::id();
        $data->status= $request->input('status');
        $data->slug= $request->input('slug');
        if($request->file('image')!=null){
            $data->image= Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_jobs')->with('info', 'İş İlanı Güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Job $job,$id)
    {
        //
        //DB::table('jobs')->where('id', '=', $id)->delete();
        $data = Job::find($id);
        $data->delete();
        return redirect()->route('admin_jobs')->with('info', 'İş İlanı Silindi!');

    }
}
