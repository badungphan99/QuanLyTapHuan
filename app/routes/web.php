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
// Route::get('/superAdmin', function () {
//     return view('superAdmin');
// });

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


Route::get('/detail_user', 'SuperAdminController@detail_infor_user')->name('detail_user');

Route::get('/superAdmin', 'SuperAdminController@index')->name('superAdmin');

Route::get('/user/show', 'Users\UserController@show')->middleware('auth')->name('user.showinfo');
Route::post('user/update','Users\UserController@update')->middleware('auth')->name('user.updateInfo');

Route::get('/course', 'SuperAdminController @detail_infor_user')->name('index_course');

// Route::get('/course/edit/{id}', 'CourseController@show')->name('show_course');
// Route::post('/course/edit/{id}', 'CourseController@update')->name('edit_course');