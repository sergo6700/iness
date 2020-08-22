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
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout');

Route::get('/', "AppController@home")->name('home');
Route::get('/about', "AppController@about")->name('about');
Route::get('/work', "AppController@work")->name('work');
Route::get('/contact', "AppController@contact")->name('contact');
Route::get('/project/{id}',"AppController@template")->name('template');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact')->name('contact-us');

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::resource('','Admin\HomeController');
    Route::resource('category', 'Admin\CategoryController');
//    Route::resource('post', 'Admin\PostController');
    Route::get('post', 'Admin\PostController@index')->name('post.index');
    Route::get('post/create/{templateName}', 'Admin\PostController@create');
    Route::post('post/store', 'Admin\PostController@store')->name('post.store');
    Route::get('post/edit/{name}/{id}', 'Admin\PostController@edit')->name('post.edit');
    Route::post('post/update/{id}', 'Admin\PostController@update')->name('post.update');
    Route::delete('post/{id}', 'Admin\PostController@destroy')->name('post.destroy');
    Route::resource('team','Admin\TeamController');
    Route::resource('feedback','Admin\FeedbackController');
    Route::resource('client','Admin\ClientController');
});
