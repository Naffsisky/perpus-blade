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

Route::get('/', function () {
    return view('index');
});
Route::get('/test', function () {
    return view('heyo');                // routing untuk menampilkan view heyo.blade.php
});
Route::get('/spesial', function () {
    return view('spesial.foru');        // routing untuk menampilkan view foru.blade.php
});
Route::get('/page/', function () {
    return view('page.anggota');        // routing untuk menampilkan view anggota.blade.php
});
