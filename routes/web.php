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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'HomeController@profile')->name('profile');

Route::resource('posts', 'PostController'); 

Route::resource('users', 'UserController'); 

Route::resource('courses', 'CourseController'); 

Route::resource('tags', 'TagController'); 

Route::get('/search', 'TagController@search')->name('search');

//Route::get('/show', 'TagController@show')->name('show');

Route::get('/tags/{tag}','TagController@show')->name('show'); 