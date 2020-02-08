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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','PostsController@index' );
//Route::get('/','PagesController@index' );
Route::get('/contact','PagesController@contact' );
Route::get('/visitus','PagesController@visit' );
Route::get('/about','PagesController@services' );


Route::get('/slider','PagesController@slider' );
Route::get('/slider2','PagesController@slider2' );
Route::get('/about', function () {
    return view('pages.about');
});


Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/Dashboard', 'DashboardController@index')->name('Dashboard');
