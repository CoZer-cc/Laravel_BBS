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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('admin', 'StaticPagesController@admin')->name('admin');
Route::delete('admin', 'StaticPagesController@destory')->name('admin.destory');

//Route::get('/login', 'UsersController@login')->name('login');
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');


//session controller
Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store')->name('login');
Route::delete('logout', 'SessionController@destroy')->name('logout');

//comment controller
Route::get('comments', 'CommentsController@create')->name('comments');
Route::resource('comments', 'CommentsController', ['only' => ['store', 'destory']]);