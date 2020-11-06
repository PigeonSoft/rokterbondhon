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

Route::get('clear-cache', function () {

    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');

    dd("Cache is cleared");

});

Route::get('/profile', 'HomeController@index')->name('home');
Route::put('/profile-update/{id}', 'HomeController@update_profile')->name('profile.update');
