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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// where tipine göre sadece o tipin girilmesini sağlıyor.
//Route::get('/test/{id}/{name}', [HomeController::class, 'test']) ->where(['id' =>'[0-9]+', 'name' =>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test']) ->whereNumber('id')->whereAlpha('name') ->name('test');



//Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    #Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Job
    Route::prefix('job')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\JobController::class, 'index'])->name('admin_jobs');
        Route::get('create', [\App\Http\Controllers\Admin\JobController::class, 'create'])->name('admin_jobs_add');
        Route::post('store', [\App\Http\Controllers\Admin\JobController::class, 'store'])->name('admin_jobs_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\JobController::class, 'edit'])->name('admin_jobs_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\JobController::class, 'update'])->name('admin_jobs_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\JobController::class, 'destroy'])->name('admin_jobs_delete');
        Route::get('show', [\App\Http\Controllers\Admin\JobController::class, 'show'])->name('admin_show');
    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

});

Route::get('admin/login', [\App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::post('admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('logout');

//User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
