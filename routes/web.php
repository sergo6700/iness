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

//Auth::routes();
Route::get('/login','Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout');

Route::get('/', "AppController@home")->name('home');
Route::get('/about', "AppController@about")->name('about');
Route::get('/work', "AppController@work")->name('work');
Route::get('/contact', "AppController@contact")->name('contact');
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::resource('','Admin\HomeController');
});
