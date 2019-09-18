<?php

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

Auth::routes(['register'=>false, 'password.reset'=>false]);

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@showDashboard');

Route::get('/notifikasi', 'NotificationController@index');
Route::get('/profil', 'ProfileController@index');

Route::get('/task-list', 'OrderController@index_task');
Route::get('/confirm/{no_badge}/{id}', 'OrderController@confirm_task')->name('confirm');
Route::get('/on-progress-task', 'OrderController@index_onprogress')->name('progress');
Route::post('/close-task', 'OrderController@close_task')->name('close_task');
Route::get('/finished-task', 'OrderController@index_finished');
Route::get('/executor/{category}','OrderController@get_executor');
Route::get('/detail-order/{id}', 'OrderController@detail_order');
Route::get('/approval', 'OrderController@index_approv')->name('approval');
Route::get('/approve/{id}', 'OrderController@approve')->name('approve');
Route::post('/reject', 'OrderController@reject_order')->name('reject');
Route::resource('/order', 'OrderController');

Route::get('/pdf/{id}', 'PdfController@index')->name('pdf');