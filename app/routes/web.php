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

Route::get('/password/reset', 'Auth\ForgotPasswordController@showRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
Route::get('/superAdmin', 'SuperAdminController@index')->name('superAdmin');