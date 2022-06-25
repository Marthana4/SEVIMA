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
Route::resource('users', UserController::class);
Route::get('/show-user/{id}', 'UserController@show')->name('show-user');
Route::get('/add-user', 'UserController@create')->name('add-user');
Route::post('/submit-user', 'UserController@store')->name('submit-user');
Route::get('/edit-user/{id}', 'UserController@edit')->name('edit-user');
Route::post('/update-user/{id}', 'UserController@update')->name('update-user');
Route::delete('/delete-user/{id}', 'UserController@destroy')->name('delete-user');
Route::resource('courses', CourseController::class);
Route::get('/show-course/{id}', 'CourseController@show')->name('show-course');
Route::get('/add-course', 'CourseController@create')->name('add-course');
Route::post('/submit-course', 'CourseController@store')->name('submit-course');
Route::get('/edit-course/{id}', 'CourseController@edit')->name('edit-course');
Route::post('/update-course/{id}', 'CourseController@update')->name('update-course');
Route::delete('/delete-course/{id}', 'CourseController@destroy')->name('delete-course');
Route::resource('categories', CategoryController::class);
Route::get('/show-category/{id}', 'CategoryController@show')->name('show-category');
Route::get('/add-category', 'CategoryController@create')->name('add-category');
Route::post('/submit-category', 'CategoryController@store')->name('submit-category');
Route::delete('/delete-category/{id}', 'CategoryController@destroy')->name('delete-category');
