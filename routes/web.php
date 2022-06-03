<?php

use Illuminate\Support\Facades\Route;
use App\Course;
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


Auth::routes();
Route::get('/', 'RegistrationController@create');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('registrations','RegistrationController');
Route::get('/status', 'RegistrationController@status')->name('status');
Route::resource('departments','DepartmentController');
Route::resource('courses','CourseController');
Route::resource('academicyears','AcademicYearController');
Route::get('/qrcode/{id}', 'QRController@generateQrCode');
