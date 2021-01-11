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
//
Route::get('/', 'HomeController@index')->name('home');
Route::get('/how-to-order', function () {return view('how-to-order');});
Route::get('/about-us', function () {return view('about-us');});
Route::get('/locations', function () {return view('locations');});
Route::get('/blog', function () {return view('blog');});
Route::get('/login', function () {return view('login');});
Route::get('/shop', function () {return view('shop');});
Route::get('/bundle', function () {return view('bundle');});
Route::get('/faq', function () {return view('faq');});
Route::get('/forgot', function () {return view('forgot');});
Route::get('/register', function () {return view('register');});
Route::get('/signup', function () {return view('signup');});
Route::get('/privacy', function () {return view('privacy');});
Route::get('/terms', function () {return view('terms');});
Route::get('/cart', function () {return view('cart');});
Route::get('/blog-detail', function () {return view('blog-detail');});
Route::get('/product-detail', function () {return view('product-detail');});
Route::get('/testlistbydisease', function () {return view('testlistbydisease');});


Auth::routes();
Route::post('/post-register','Auth\RegisterController@postRegister')->name('postRegister');
Route::post('/reset-password','Auth\ResetPasswordController@reset_password')->name('resetPassword');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


