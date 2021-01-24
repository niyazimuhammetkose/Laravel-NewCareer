<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cv;
use App\Models\Faq;
use App\Models\Job;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    //
    public function index(){
        $sliderdata = Job::select('id', 'title', 'image', 'firma_adi', 'slug')->limit(6)->orderByDesc('id')->get();
        $picked = Job::select('id', 'title', 'image', 'firma_adi', 'slug')->limit(6)->inRandomOrder()->get();
        $context = [
            'sliderdata'=>$sliderdata,
            'picked'=>$picked,
        ];
        return view('home.index', $context);
    }

    //
    public function job($id, $slug){
        $data = Job::find($id);
        $context = [
            'data'=>$data,
        ];
        return view('home.job_detail', $context);
    }

    //
    public function getjobs(Request $request){
        $search = $request->input('search');
        $count = Job::where('title', 'like', '%'.$search.'%')->get()->count();
        if($count == 1){
            $data = Job::where('title', 'like', '%'.$search.'%')->first();
            return redirect()->route('job', ['id' => $data->id, 'slug' => $data->slug]);
        }
        else{
            return redirect()->route('joblist', ['search' => $search, 'count' => $count]);
        }
    }

    //
    public function joblist($search, $count){
        $datalist = Job::where('title', 'like', '%'.$search.'%')->get();
        return view('home.search_jobs', ['search' => $search, 'datalist' => $datalist, 'count' => $count]);
    }

    //
    public function jobapplication($id){
        $data = Job::find($id);
        $datalist = Cv::where('user_id', Auth::id())->get();
        $context = [
            'data'=>$data,
            'datalist'=>$datalist,
        ];
        return view('home.job_application', $context);
    }

    //
    public function categoryjobs($id, $slug){
        $datalist = Job::where('category_id', $id)->get();
        $data = Category::find($id);
        $count = Job::where('category_id', $id)->get()->count();
        $context = [
            'datalist'=>$datalist,
            'data'=>$data,
            'count' => $count,
        ];
        return view('home.category_jobs', $context);
    }

    //
    public function aboutus(){
        return view('home.about');
    }

    //
    public function references(){
        return view('home.references');
    }

    //
    public function contact(){
        return view('home.contact');
    }

    //
    public function faq(){
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq', ['datalist' => $datalist]);
    }

    //
    public function sendmessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('info','Mesajınız Kaydedilmiştir!');
    }


    //
    public function test($id, $name){

        $data['id']=$id;
        $data['name']=$name;
        return view('home.test', $data);
        //return view('home.test', ['id'=>$id, 'name'=>$name]);
        /*
        echo "ID Number : ", $id;
        echo "<br>Name : ", $name;
        for ($i=1;$i<=$id;$i++){
            echo "<br> $i - $name";
        }
        */
    }
}
