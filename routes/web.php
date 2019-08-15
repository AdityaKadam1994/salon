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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','PagesController@index');
Route::get('/contact','PagesController@contact');
Route::get('/features','PagesController@features');
Route::get('/news','PagesController@news');
Route::get('/styleGuide','PagesController@styleGuide');
Route::get('/serviceList','PagesController@serviceList');
Route::get('/serviceDetail','PagesController@serviceDetail');
Route::get('/blogDefault','PagesController@blogDefault');
Route::get('/blogSingle','PagesController@blogSingle');
Route::get('/testimonial','PagesController@testimonial');
Route::get('/about','PagesController@about');
Route::get('/demo','PagesController@demo');
Route::resource('/admin','ServicesController');


