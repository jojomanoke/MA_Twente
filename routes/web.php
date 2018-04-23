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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/overview', 'ErrorController@overview')->name('overview');
Route::get('/create', 'ErrorController@create')->name('create');
Route::get('/saveError', 'ErrorController@saveError')->name('saveError');
Route::get('/edit', 'ErrorController@edit')->name('edit');



Route::prefix('/workspace')->group(function(){
    Route::get('/', 'WorkspaceController@overview')->name('workspace');
});
