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

Route::get('/', 'WelcomeController@index');

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
Route::get('/password/update', 'Auth\UpdatePasswordController@showRequestForm')->name('password.update.request');
Route::post('/password/update', 'Auth\UpdatePasswordController@updatePassword')->name('password.update');

Route::get('/superAdmin', 'SuperAdminController@index')->name('superAdmin');
Route::get('/detail_user', 'SuperAdminController@detail_infor_user')->name('detail_user');
Route::post('/superAdmin/update_info_user', 'SuperAdminController@update_info_user')->name('update_info_user');
Route::post('/superAdmin/create-new-account', 'SuperAdminController@create_new_account')->name('create_new_account');


Route::get('/user/show', 'Users\UserController@show')->middleware('auth')->name('user.showinfo');
Route::post('user/update','Users\UserController@update')->middleware('auth')->name('user.updateInfo');

Route::get('/course', 'CourseController@index')->name('index_course');
Route::get('/course/create', 'CourseController@create')->name('create_course_form');
Route::post('/course/store', 'CourseController@store')->name('store_course');
Route::get('/course/edit/{id}', 'CourseController@show')->name('show_course');
Route::post('/course/edit/{id}', 'CourseController@update')->name('edit_course');

Route::get('/course/teacher/{id}', 'CourseController@view_teacher')->name('view_teacher');
Route::post('/teacher/store/{id}', 'CourseController@store_teacher')->name('store_teacher');
Route::get('/teacher/delete/{id}', 'CourseController@delete_teacher')->name('delete_teacher');

Route::get('/course/student/{id}', 'CourseController@view_student')->name('view_student');
Route::post('/student/store/{id}', 'CourseController@store_student')->name('store_student');
Route::get('/student/delete/{id}', 'CourseController@delete_student')->name('delete_student');

Route::get('/program', 'ProgramController@index')->name('index_program');
Route::get('/program/create', 'ProgramController@create')->name('create_program_form');
Route::post('/program/store', 'ProgramController@store')->name('store_program');
Route::get('/program/edit/{id}', 'ProgramController@show')->name('show_program');
Route::post('/program/edit/{id}', 'ProgramController@update')->name('edit_program');
Route::get('/program/courses/{id}', 'ProgramController@view_course')->name('view_course');

// Route::get('/course', 'SuperAdminController@detail_infor_user')->name('index_course');

// Route::get('/course/edit/{id}', 'CourseController@show')->name('show_course');
// Route::post('/course/edit/{id}', 'CourseController@update')->name('edit_course');
