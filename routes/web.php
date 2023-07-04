<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\ContohController@index'); // routing untuk menampilkan view welcome.blade.php

// Route::get('/test', function () {
//     return view('heyo');                // routing untuk menampilkan view heyo.blade.php
// });
// Route::get('/spesial', function () {
//     return view('spesial.foru');        // routing untuk menampilkan view foru.blade.php
// });
Route::get('/data/anggota/', 'App\Http\Controllers\ContohController@anggota'); // routing untuk menampilkan view anggota.blade.php
Route::get('/data/dashboard/', 'App\Http\Controllers\ContohController@dashboard'); // routing untuk menampilkan view dashboard.blade.php

Route::get('/data/buku/', 'App\Http\Controllers\BukuController@buku');
Route::get('/data/buku/create', 'App\Http\Controllers\BukuController@create')->name('buku.create');
Route::post('/data/buku/', 'App\Http\Controllers\BukuController@store')->name('buku.store');
Route::post('/data/buku/delete/{id}', 'App\Http\Controllers\BukuController@destroy')->name('buku.destroy');
Route::get('/data/buku/edit/{id}', 'App\Http\Controllers\BukuController@edit')->name('buku.edit');
Route::post('/data/buku/update/{id}', 'App\Http\Controllers\BukuController@update')->name('buku.update');
Route::get('/data/buku/search', 'App\Http\Controllers\BukuController@search')->name('buku.search');

