<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

Route::resource('infouser', 'infoUserController');
Route::resource('salary', 'SalaryController');
Route::resource('personnel', 'PersonnelController');
Route::resource('workdays', 'WorkdayController');
Route::resource('role', 'RoleController');
Route::resource('bominus', 'BominusController');

Route::get('/showcustomer', 'UserController@showcustomer')->name('show_customer');

Route::get('/user', 'UserController@show_user')->name('show_user');

//Route::get('/show_comments/{id}', 'CommentController@showComments')->name('show_comments');
