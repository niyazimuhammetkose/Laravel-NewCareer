<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        return view('home.index');
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
