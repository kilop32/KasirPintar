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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin/login', 'adminlogin@login')->name('admin.login');
Route::get('/admin/register', 'adminlogin@registerform')->name('admin.registerform');
Route::get('/admin/login', 'adminlogin@loginform')->name('admin.loginform');
Route::post('/admin/register', 'adminlogin@register')->name('admin.register');
Route::get('/admin/home', 'adminlogin@index')->middleware('auth:admin');
Route::get('/admin/logout', 'adminlogin@logout')->name('admin.logout');
