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

Route::get('/', 'MainController@getMaskIndex');
#Route::get('gallery', 'MainController@getGallery');
Route::get('contact', 'MainController@getContact');
Route::post('contact', 'MainController@postContact');
Route::get('zohoverify/{url}', 'MainController@getZoho');
