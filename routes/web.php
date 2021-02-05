<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
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
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/job/{id}/{slug}', [HomeController::class, 'job'])->name('job');
Route::get('/categoryjobs/{id}/{slug}', [HomeController::class, 'categoryjobs'])->name('categoryjobs');
Route::post('/getjobs', [HomeController::class, 'getjobs'])->name('getjobs');
Route::get('/joblist/{search}/{count}', [HomeController::class, 'joblist'])->name('joblist');
Route::get('/pozisyon/{pozisyon}', [HomeController::class, 'pozisyon'])->name('pozisyon');
Route::get('/parttime', [HomeController::class, 'parttime'])->name('parttime');
Route::get('/bugunyayinlanan', [HomeController::class, 'bugunyayinlanan'])->name('bugunyayinlanan');

// where tipine göre sadece o tipin girilmesini sağlıyor.
//Route::get('/test/{id}/{name}', [HomeController::class, 'test']) ->where(['id' =>'[0-9]+', 'name' =>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test']) ->whereNumber('id')->whereAlpha('name') ->name('test');



//Admin
Route::middleware('admin')->prefix('admin')->group(function (){

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
        Route::get('show', [\App\Http\Controllers\Admin\JobController::class, 'show'])->name('admin_job_show');
    });

    #Message
    Route::prefix('message')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    #Faq
    Route::prefix('faq')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
    });

    #User
    Route::prefix('user')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
        Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
        Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');

        Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
        Route::post('userroleadd/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_add'])->name('admin_user_role_add');
        Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
    });

    #CV
    Route::prefix('cv')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\CvController::class, 'index'])->name('admin_cv');
        Route::get('create', [\App\Http\Controllers\Admin\CvController::class, 'create'])->name('admin_cv_add');
        Route::post('store', [\App\Http\Controllers\Admin\CvController::class, 'store'])->name('admin_cv_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\CvController::class, 'edit'])->name('admin_cv_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\CvController::class, 'update'])->name('admin_cv_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\CvController::class, 'destroy'])->name('admin_cv_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\CvController::class, 'show'])->name('admin_cv_show');
    });

    #Job Application
    Route::prefix('app')->group(function (){
        Route::get('/', [\App\Http\Controllers\Admin\ApplicationController::class, 'index'])->name('admin_app');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'update'])->name('admin_app_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'destroy'])->name('admin_app_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\ApplicationController::class, 'show'])->name('admin_app_show');
    });
});

Route::get('admin/login', [\App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::post('admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('logout');

//User
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

    #Job
    Route::prefix('job')->group(function (){
        Route::get('/', [JobController::class, 'index'])->name('user_jobs');
        Route::get('create', [JobController::class, 'create'])->name('user_jobs_add');
        Route::post('store', [JobController::class, 'store'])->name('user_jobs_store');
        Route::get('edit/{id}', [JobController::class, 'edit'])->name('user_jobs_edit');
        Route::post('update/{id}', [JobController::class, 'update'])->name('user_jobs_update');
        Route::get('delete/{id}', [JobController::class, 'destroy'])->name('user_jobs_delete');
        Route::get('show', [JobController::class, 'show'])->name('user_jobs_show');
    });

    #CV
    Route::prefix('cv')->group(function (){
        Route::get('/', [CvController::class, 'index'])->name('user_cv');
        Route::get('create', [CvController::class, 'create'])->name('user_cv_add');
        Route::post('store', [CvController::class, 'store'])->name('user_cv_store');
        Route::get('edit/{id}', [CvController::class, 'edit'])->name('user_cv_edit');
        Route::post('update/{id}', [CvController::class, 'update'])->name('user_cv_update');
        Route::get('delete/{id}', [CvController::class, 'destroy'])->name('user_cv_delete');
        Route::get('show', [CvController::class, 'show'])->name('user_cv_show');
    });

    #Job Application
    Route::prefix('app')->group(function (){
        Route::get('/', [ApplicationController::class, 'index'])->name('user_apps');
        Route::get('create/{id}', [ApplicationController::class, 'create'])->name('user_app');
        Route::post('store/{id}', [ApplicationController::class, 'store'])->name('user_app_store');
        Route::get('show/{id}', [ApplicationController::class, 'show'])->name('user_app_show');
    });

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
