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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');

Route::get('/course', 'CourseController@index')->name('index_course');
Route::get('/course/create', 'CourseController@create')->name('create_course_form');
Route::post('/course/store', 'CourseController@store')->name('store_course');

Route::get('/course/edit/{id}', 'CourseController@show')->name('show_course');
Route::post('/course/edit/{id}', 'CourseController@update')->name('edit_course');

Route::get('/course/teacher', 'CourseController@view_teacher')->name('view_teacher');

// Route::get('/test/{id}', function ($id) {
//     $course = DB::table('course')->where('id', $id)->first();
//     echo $course->name;
// });
