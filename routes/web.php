<?php

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

// Route::get('/', function () {
//     return view('layouts.dashboard');
//  });

Route::get('firebase', 'FirebaseController@pushSet');
// Route::middleware('auth')->get('/','DashboardController@index');
Route::get('login','LoginController@login')->name('login');
Route::get('register','LoginController@register')->name('register');
Route::post('login','LoginController@loginAuth')->name('login');
Route::post('register','LoginController@registerAuth')->name('register');
Route::get('logout','LogoutController@logout')->name('logout');
Route::get('editprofil','EditProfilController@editprofil')->name('edit');
Route::post('editprofil','EditProfilController@editprofilAuth')->name('edit');

Route::get('/', 'SampahController@dashboard');

Route::get('dashboard2', 'SampahController@dashboard2');

Route::get('/afterlogin', 'SampahController@afterlogin');

Route::get('/formedit', 'editController@formedit')->name('subject');

Route::get('/profil', 'AkunController@profil')->name('subject');



Route::get('/header', 'headerController@header')->name('subject');





Route::get('/formedit/updateprofil', 'editController@updateprofil')->name('akun');






// Ini Coba firebase Buat Ngambil data antarsampah
Route::get('/statusantar', 'AntarsampahController@index')->name('subject');

Route::get('/antar', 'AntarsampahController@antar');

Route::get('/berhasilantar', 'AntarsampahController@berhasilantar');

Route::get('/antar2', 'AntarsampahController@antar2');

Route::get('/antar/addantar', 'AntarsampahController@addantar')->name('antar_add');




//Jemput Sampah
Route::get('/statusjemput', 'JemputsampahController@index')->name('subject');

Route::get('/jemput', 'JemputsampahController@jemput');

Route::get('/berhasiljemput', 'JemputsampahController@berhasiljemput');

Route::get('/jemput/addjemput', 'JemputsampahController@addjemput')->name('jemput_add');


//Tentang
Route::get('/tentang', 'SampahController@tentang');

Route::get('/event', 'SampahController@event');

//Reward
Route::get('/reward', 'RewardController@reward');