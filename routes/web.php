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
    // Route::get('/our-products', 'ProductController@index')->name('products');
    Route::get('/product/{slug}', 'ProductController@product');
});

Route::get('/our-products', function () {
    return view('front.our_products');
})->name('products');

Route::get('/lorem', function () {
    return view('front.products.layout');
});

Route::group(['prefix' => 'our-products'], function () {
    Route::get('/zxmco-big-bull', function () {
        return view('front.products.big_bull');
    })->name('big-bull');
    Route::get('/zxmco-bull', function () {
        return view('front.products.bull');
    })->name('bull');
    Route::get('/zxmco-peppa', function () {
        return view('front.products.peppa');
    })->name('peppa');
    Route::get('/zxmco-lexus', function () {
        return view('front.products.lexus');
    })->name('lexus');
    Route::get('/jbv-e5', function () {
        return view('front.products.jbve5');
    })->name('jbve5');
    Route::get('/zxmco-hungarian', function () {
        return view('front.products.hungarian');
    })->name('hungarian');
    Route::get('/kkd-ebike-1', function () {
        return view('front.products.kkd-ebike1');
    })->name('kkd-ebike-1');
    Route::get('/kkd-ebike-2', function () {
        return view('front.products.kkd-ebike2');
    })->name('kkd-ebike-2');
    Route::get('/kkd-ebike-3', function () {
        return view('front.products.kkd-ebike3');
    })->name('kkd-ebike-3');
    Route::get('/kkd-ebike-4', function () {
        return view('front.products.kkd-ebike4');
    })->name('kkd-ebike-4');
    Route::get('/kkd-ebike-5', function () {
        return view('front.products.kkd-ebike5');
    })->name('kkd-ebike-5');
});

//Admin Routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController@index')->name('admin.index');
    Route::resource('/product', 'ProductController');
    Route::resource('/media', 'MediaController');
    Route::resource('/about', 'AboutController');
    Route::resource('/user', 'UserController');
});