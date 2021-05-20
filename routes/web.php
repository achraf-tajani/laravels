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

Route::get('/', function () {
    return view('pages/commandes');
});


Route::get('/commandes', function () {
    return view('pages/commandes');
});

Route::get('/ramassages', function () {
    return view('pages/ramassages');
});
