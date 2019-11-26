<?php

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
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});

// === UNTUK LOGIN / AUTH === //

Route::get('/login','authController@index');

Route::post('/postlogin','authController@postlogin');

Route::get('/logout','authController@logout');

Route::get('/daftar','authController@registerIndex');

Route::post('/postregister','authController@registrasi');


//===||login SEMUA||===// 

Route::group(['middleware' => ['auth','checkRole:admin,kasir']], function(){

Route::get('/index','authController@role');

Route::get('/produk','ProdukController@index');
});

// === UNTUK LOGIN / AUTH === //

Route::group(['middleware' => ['auth','checkRole:admin']], function(){

Route::get('/karyawan','KaryawanController@index');

Route::post('/tambah-karyawan','KaryawanController@create');

});

// === LOGIN SEBAGAI KASIR === //

Route::group(['middleware' => ['auth','checkRole:kasir']], function(){

Route::post('/tambah-barang','ProdukController@create');

Route::get('/kasir','KasirController@index');
});	