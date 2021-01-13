<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\UpdatePasswordController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/list-all-user', [UserController::class, 'listAllUser']);
Route::get('/user/{username}', [UserController::class, 'getUserByUserName']);
Route::get('/disable-user/{username}', [UserController::class, 'disableUser']);
Route::get('/enable-user/{username}', [UserController::class, 'enableUser']);
Route::put('/create-new_account/{$data}', [UserController::class, 'creatNewAccount']);
Route::get('/set-role', [UserController::class, 'setRoleUser']);
Route::get('/set-info', [UserController::class, 'setInfoUser']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/password/reset', [ForgotPasswordController::class, 'showRequestForm'])->name('password.request');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.reset');
Route::get('/password/update', [UpdatePasswordController::class, 'showRequestForm'])->name('password.update.request');
Route::post('/password/update', [UpdatePasswordController::class, 'updatePassword'])->name('password.update');

Route::get('/superAdmin', [SuperAdminController::class, 'index'])->name('superAdmin');
Route::get('/detail_user', [SuperAdminController::class, 'detail_infor_user'])->name('detail_user');
Route::post('/superAdmin/update_info_user', [SuperAdminController::class, 'update_info_user'])->name('update_info_user');
Route::post('/superAdmin/create-new-account', [SuperAdminController::class, 'create_new_account'])->name('create_new_account');


Route::get('/user/show', [UserController::class, 'show'])->middleware('auth')->name('user.showinfo');
Route::post('user/update',[UserController::class, 'update'])->middleware('auth')->name('user.updateInfo');

Route::get('/course', [CourseController::class, 'index'])->name('index_course');
Route::get('/course/create', [CourseController::class, 'create'])->name('create_course_form');
Route::post('/course/store', [CourseController::class, 'store'])->name('store_course');
Route::get('/course/edit/{id}', [CourseController::class, 'show'])->name('show_course');
Route::post('/course/edit/{id}', [CourseController::class, 'update'])->name('edit_course');

Route::get('/course/teacher/{id}', [CourseController::class, 'view_teacher'])->name('view_teacher');
Route::post('/teacher/store/{id}', [CourseController::class, 'store_teacher'])->name('store_teacher');
Route::get('/teacher/delete/{id}', [CourseController::class, 'delete_teacher'])->name('delete_teacher');

Route::get('/course/student/{id}', [CourseController::class, 'view_student'])->name('view_student');
Route::post('/student/store/{id}', [CourseController::class, 'store_student'])->name('store_student');
Route::get('/student/delete/{id}', [CourseController::class, 'delete_student'])->name('delete_student');

Route::get('/program', [ProgramController::class, 'index'])->name('index_program');
Route::get('/program/create', [ProgramController::class, 'create'])->name('create_program_form');
Route::post('/program/store', [ProgramController::class, 'store'])->name('store_program');
Route::get('/program/edit/{id}', [ProgramController::class, 'show'])->name('show_program');
Route::post('/program/edit/{id}', [ProgramController::class, 'update'])->name('edit_program');
Route::get('/program/courses/{id}', [ProgramController::class, 'view_course'])->name('view_course');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/register/{id}', [HomeController::class, 'register_course'])->name('register_course');

Route::get('/detail_user', [UserController::class, 'showDetailForm'])->name('showDetailForm');
Route::post('/detail_user', [UserController::class, 'update'])->name('updateDetailUser');

Route::get('/plot', [\App\Http\Controllers\PlotController::class, 'index'])->name('plot');

