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
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/product/{slug}', 'HomeController@product_detail')->name('product_detail');
Route::get('/bundle', 'HomeController@bundle')->name('bundle');
Route::get('/testlistbydisease/{id}', 'HomeController@testlistbydisease')->name('testlistbydisease');
Route::get('/testbydisease', 'HomeController@testbydisease')->name('testbydisease');
Route::get('/blog/{slug?}', 'HomeController@blog')->name('blog');
Route::get('/post/{slug}', 'HomeController@post_detail')->name('post_detail');

Route::get('/how-to-order', function () {return view('how-to-order');});
Route::get('/about-us', function () {return view('about-us');});
Route::get('/locations', function () {return view('locations');});
//Route::get('/blog', function () {return view('blog');});
Route::get('/login', function () {return view('login');});
Route::get('/faq', function () {return view('faq');});
Route::get('/forgot', function () {return view('forgot');});
Route::get('/register', function () {return view('register');});
Route::get('/signup', function () {return view('signup');});
Route::get('/privacy', function () {return view('privacy');});
Route::get('/terms', function () {return view('terms');});
Route::get('/cart', function () {return view('cart');});
Route::get('/blog-detail', function () {return view('blog-detail');});
Route::get('/product-detail', function () {return view('product-detail');});

Auth::routes();

Route::post('/post-register','Auth\RegisterController@postRegister')->name('postRegister');
Route::post('/reset-password','Auth\ResetPasswordController@reset_password')->name('resetPassword');
Route::match(['get','post'],'/change-password','Auth\ResetPasswordController@change_password')->name('changePassword');

Route::group(['middleware' => 'customer'],function (){
    Route::group(['prefix' => 'profile','as' => 'profile.'],function (){
        Route::match(['get','post'],'/','ProfileController@profile')->name('profile');
        Route::match(['get','post'],'/change-password','ProfileController@changePassword')->name('changePassword');
    });

    Route::group(['prefix' => 'cart','as' => 'cart.'],function (){
        Route::post('add','CartController@add')->name('add');
        Route::get('view','CartController@view')->name('view');
        Route::post('update','CartController@update')->name('update');
        Route::post('delete','CartController@delete')->name('delete');
        Route::get('/checkout', 'CheckoutController@view')->name('checkout');
        Route::post('/checkoutProceed', 'CheckoutController@checkoutProceed')->name('checkoutProceed');
    });

    Route::get('/order-success/{id?}','CheckoutController@orderSuccess')->name('order-success');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => 'admin','namespace' => 'Admin','as' => 'admin.'], function () {
    Route::group(['prefix' => 'orders','as' => 'orders.',],function (){
        Route::get('/','OrderController@index')->name('index');
        Route::match(['get','post'],'detail/{id}','OrderController@detail')->name('detail');
        Route::delete('destroy/{id}','OrderController@destroy')->name('destroy');
        Route::post('updateOrderStatus/{id}','OrderController@updateOrderStatus')->name('updateOrderStatus');
        Route::post('updatePaymentStatus/{id}','OrderController@updatePaymentStatus')->name('updatePaymentStatus');
    });
});


