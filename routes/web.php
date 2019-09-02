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
Route::get('/barang', function () {
    return view('barang');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin/login', 'adminlogin@login')->name('login');
Route::post('register', 'adminlogin@register');
Route::get('/public/register', 'formcontroller@registerform')->name('registerform');
Route::get('/{roles}/login', 'formcontroller@loginview')->name('loginform');

Route::get('/admin/home', 'adminlogin@index')->middleware('auth:admin');
Route::get('/admin/logout', 'adminlogin@logout')->name('admin.logout');
