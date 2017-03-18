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


Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/blog', 'HomeController@blog');

//admin
Route::group(['middleware' => 'auth'], function() {

    Route::get('/admin', 'AdminController@index');

    Route::resource('/admin/menuList', 'MenuController');
    Route::get('/admin/menuList', 'MenuController@index')->name('menuList');
    Route::get('/admin/menuList/create', 'MenuController@create')->name('menuCreate');
    Route::post('/admin/menuList/create', 'MenuController@store')->name('menuStore');

    Route::post('/admin/menuList/{$id}', 'MenuController@destroy')->name('menuDestroy');
});

Route::get('/{id}', 'HomeController@show')->name('show');


Route::get('/home', 'HomeController@index');



