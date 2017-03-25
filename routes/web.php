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

Route::get('docs/{file?}', 'DocsController@show');

//admin
Route::group(['middleware' => 'auth'], function() {

    Route::get('/admin', 'AdminController@index');

    Route::resource('/admin/list', 'MenuController');
    Route::get('/admin/list', 'MenuController@index')->name('menuList');



    Route::get('/admin/list/create', 'MenuController@create')->name('menuCreate');
    Route::post('/admin/list/create', 'MenuController@store')->name('menuStore');

    Route::get('/admin/list/{$id}', 'MenuController@show')->name('menuShow');

    Route::get('/admin/list/{$id}/edit', 'MenuController@edit')->name('menuEdit');
    Route::post('/admin/list/{$id}/edit', 'MenuController@update')->name('menuUpdate');

    Route::post('/admin/list/{$id}', 'MenuController@destroy')->name('menuDestroy');

});

Route::get('/{id}', 'HomeController@show')->name('show');


Route::get('/home', 'HomeController@index');



