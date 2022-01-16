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
    return view('welcome');
});


Route::get('/qrcode/{id}', 'QRController@generateQrCode');
Route::resource('tracings','TracingController');
Route::get('/today', 'TracingController@today')->name('today');
Route::get('/scanned', 'TracingController@scanned')->name('scanned');


// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
