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

/* Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'BoeApps\indexController@index')->name('home');
Route::get('/download/{id}', 'BoeApps\DownloadController@index')->name('download');
Route::get('/getFile/{id}', 'BoeApps\DownloadController@downloadFile')->name('getFile');
