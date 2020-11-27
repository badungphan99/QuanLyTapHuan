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

Route::get('/list-all-user', 'UserController@listAllUser');

Route::get('/user/{username}', 'UserController@getUserByUserName');

Route::get('/disable-user/{username}', 'UserController@disableUser');

Route::get('/enable-user/{username}', 'UserController@enableUser');

Route::put('/create-new_account/{$data}', 'UserController@creatNewAccount');

Route::get('/set-role', 'UserController@setRoleUser');

Route::get('/set-info', 'UserController@setInfoUser');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');

Route::get('/superAdmin', 'SuperAdminController@index')->name('superAdmin');
Route::get('/detail_user', 'SuperAdminController@detail_infor_user')->name('detail_user');

Route::get('/user/show', 'Users\UserController@show')->middleware('auth')->name('user.showinfo');
Route::post('user/update','Users\UserController@update')->middleware('auth')->name('user.updateInfo');

Route::get('/course', 'CourseController@index')->name('index_course');
Route::get('/course/create', 'CourseController@create')->name('create_course_form');
Route::post('/course/store', 'CourseController@store')->name('store_course');

Route::get('/course/edit/{id}', 'CourseController@show')->name('show_course');
Route::post('/course/edit/{id}', 'CourseController@update')->name('edit_course');
Route::get('/course/teacher/{id}', 'CourseController@view_teacher')->name('view_teacher');

Route::get('/program', 'ProgramController@index')->name('index_program');
Route::get('/program/create', 'ProgramController@create')->name('create_program_form');
Route::post('/program/store', 'ProgramController@store')->name('store_program');
Route::get('/program/edit/{id}', 'ProgramController@show')->name('show_program');
Route::post('/program/edit/{id}', 'ProgramController@update')->name('edit_program');
Route::get('/program/courses/{id}', 'ProgramController@view_course')->name('view_course');

