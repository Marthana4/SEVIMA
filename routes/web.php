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
    return view('home');
});
Route::view('/beranda','admin.beranda');
// Route::get('/users', 'UserController@index')->name('users');
Route::get('/add-user', 'UserController@create')->name('add-user');
Route::post('/submit-user', 'UserController@store')->name('submit-user');
Route::resource('users', UserController::class);
Route::resource('courses', CourseController::class);
Route::get('/add-course', 'CourseController@create')->name('add-course');
Route::post('/submit-course', 'CourseController@store')->name('submit-course');
