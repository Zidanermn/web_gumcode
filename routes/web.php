<?php

use App\Http\Controllers\Portofolio_Controller;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $about = DB::table('about')->where('about_id',1)->first();
    $header = DB::table('header')->limit(1)->get();
    $video = DB::table('video')->limit(3)->get();
    $layanan = DB::table('layanan')->limit(12)->get();
    $sosmed = DB::table('sosmed')->limit(3)->get();
    $portofolio = DB::table('portofolio')->limit(6)->get();
    
    return view('main',compact('about','header','video','layanan','sosmed','portofolio'));
});


Route::post('contact_us','Dashboard_Controller@mail');
Route::post('subs','Subs_Controller@subs');
Route::get('keluar','Beranda_controller@keluar');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/admin/beranda','Beranda_Controller@index');

    // Header =====================================
    Route::get('/admin/header','Header_Controller@index');
    Route::post('/admin/header','Header_Controller@store');
    Route::get('/admin/header/{id}','Header_Controller@edit');
    Route::post('/admin/header/{id}','Header_Controller@update');

    // Layanan ====================================
    Route::get('/admin/layanan','Layanan_Controller@index');
    Route::post('/admin/layanan','Layanan_Controller@store');
    Route::get('/admin/layanan/{id}','Layanan_Controller@edit');
    Route::post('/admin/layanan/{id}','Layanan_Controller@update');

    // Video ======================================
    Route::get('/admin/video','Video_Controller@index');
    Route::post('/admin/video','Video_Controller@store');
    Route::get('/admin/video/{id}','Video_Controller@edit');
    Route::post('/admin/video/{id}','Video_Controller@update');

    // Sosmed ======================================
    Route::get('/admin/sosmed','Sosmed_Controller@index');
    Route::post('/admin/sosmed','Sosmed_Controller@store');
    Route::get('/admin/sosmed/{id}','Sosmed_Controller@edit');
    Route::post('/admin/sosmed/{id}','Sosmed_Controller@update');

    // Tentang Kami ===============================
	Route::get('/admin/about','About_Controller@index');
    Route::post('/admin/about','About_Controller@store');
    
    // Portofolio =================================
    Route::get('/admin/portofolio','Portofolio_Controller@index');
    Route::post('/admin/portofolio','Portofolio_Controller@store');
    Route::get('/admin/portofolio/{id}','Portofolio_Controller@edit');
    Route::post('/admin/portofolio/{id}','Portofolio_Controller@update');
    Route::get('/admin/portofolio/delete/{id}','Portofolio_Controller@destroy');
    
    // Pesan =======================================
    Route::get('/admin/mail','Mail_controller@index');

    // Subscribe ===================================
    Route::get('/admin/subscribe','Subscribe_controller@index');
    
});


Auth::routes();
Route::get('/home', function(){
	return redirect('/admin/beranda');
});

