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
//     return view('welcome');
// });
// Route::get('/pengguna', "PenggunaController@index");

// Route::get('/pengguna/create', "PenggunaController@create");
// Route::get('/pengguna/{pengguna}', "PenggunaController@show");

// Route::post('/pengguna', "PenggunaController@store");

// Route::delete('/pengguna/{pengguna}', "PenggunaController@destroy");

// Route::get('/pengguna/{pengguna}/edit', "PenggunaController@edit");

// Route::patch('/pengguna/{pengguna}', "PenggunaController@update");

Route::resource("/pengguna","PenggunaController");
