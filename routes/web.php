<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa','/home') ->name('anasayfa'); //yönlendirme

//Controller olmadan çağırma
Route::get('/', function () {
    // view'e değişken gönderme
    // return view('home.index', ['name' => 'Niyazi Muhammet KÖSE']);
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

// where tipine göre sadece o tipin girilmesini sağlıyor.
//Route::get('/test/{id}/{name}', [HomeController::class, 'test']) ->where(['id' =>'[0-9]+', 'name' =>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test']) ->whereNumber('id')->whereAlpha('name') ->name('test');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
