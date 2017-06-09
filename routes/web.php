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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home1');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tambah','tokoController@tambah');   //nampilne form insert
Route::post('/tambah','tokoController@order');   //post : nyimpen data ng database. table order
Route::get('/detail/{id}', 'tokoController@detail');
Route::post('/detail/{id}', 'tokoController@beli');
Route::any('/hapus/{table}/{no}','tokoController@hapus');


Route::get('/profile/{id}','UserController@profilku');
Route::post('/profile/{id}','UserController@simpan');
Route::get('/iklanbaru','tokoController@iklanbaru');
Route::post('/iklan')
Route::get('/dashboard','tokoController@dashboard');

// Route::get('/detail/{id}', 'tokoController@jajal');


// Route::get('/hometoko', 'tokoController@homeToko'); //jolali iki engko lek wes mari didadekne / "root"
