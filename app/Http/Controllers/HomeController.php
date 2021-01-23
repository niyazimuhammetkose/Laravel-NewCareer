<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        print_r($data);
        exit();
    }

    //
    public function jobapplication($id){
        echo "Job Application <br>";
        $data = Job::find($id);
        print_r($data);
        exit();
    }

    //
    public function categoryjobs($id, $slug){
        $datalist = Job::where('category_id', $id)->get();
        $data = Category::find($id);
        $context = [
            'datalist'=>$datalist,
            'data'=>$data,
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
