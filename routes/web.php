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
//User Routes
Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'IndexController@index')->name('home');
    Route::get('/about-us', 'PagesController@AboutUs')->name('about_us');
    Route::get('/contact', 'PagesController@ContactUs')->name('contact');
    Route::get('/out-products', 'PagesController@Products')->name('products');

});

//Admin Routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController@index')->name('admin.index');
    Route::resource('/product', 'ProductController');
    Route::resource('/media', 'MediaController');
    Route::resource('/about', 'AboutController');
    Route::resource('/user', 'UserController');
});