<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/','LihatController');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('anggota','AnggotaController');
Route::get('carianggota','AnggotaController@search');

Route::resource('penerbit','PenerbitController');
Route::resource('caripenerbit','PenerbitController@search');

Route::resource('pengarang','PengarangController');
Route::get('caripengarang','PengarangController@search');

Route::resource('rak','RakController');
Route::get('carirak','RakController@search');

Route::resource('buku','BukuController');
Route::get('caribuku','BukuController@search');

Route::resource('pinjam','PinjamController');
Route::get('caripinjam','PinjamController@search');
Route::get('kembali','PinjamController@kembali');

Route::resource('kembali','KembaliController');
Route::resource('daftar','DaftarController');