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

Route::get('/user={username}', 'UserController@getUserByUserName');

Route::get('/disable-user={username}', 'UserController@disableUser');

Route::get('/enable-user={username}', 'UserController@enableUser');
