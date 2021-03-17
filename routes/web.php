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
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/how-to-order', 'HomeController@howToOrder')->name('how-to-order');
Route::get('/about-us','HomeController@aboutUs')->name('about_us');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/credits', 'HomeController@credits')->name('credits');
Route::get('/page/{slug}', 'HomeController@page_detail')->name('page_detail');
Route::get('/locations', 'HomeController@locations')->name('locations');
Route::get('location/{id}', 'HomeController@location')->name('location');

Route::get('/login', function () {return view('login');});
Route::get('/forgot', function () {return view('forgot');});
Route::get('/register', function () {return view('register');});
Route::get('/signup', function () {return view('signup');});



Auth::routes();

Route::post('/post-register','Auth\RegisterController@postRegister')->name('postRegister');
Route::post('/reset-password','Auth\ResetPasswordController@reset_password')->name('resetPassword');
Route::match(['get','post'],'/change-password','Auth\ResetPasswordController@change_password')->name('changePassword');

Route::get('/verify-account','Auth\RegisterController@verifyAccount')->name('verifyAccount');

Route::group(['middleware' => 'customer'],function (){
    Route::group(['prefix' => 'profile','as' => 'profile.'],function (){
        Route::match(['get','post'],'/','ProfileController@profile')->name('profile');
        Route::match(['get','post'],'/change-password','ProfileController@changePassword')->name('changePassword');
    });
    Route::get('my-orders','ProfileController@myOrder')->name('myOrder');
    Route::get('order-detail/{id}','ProfileController@orderDetail')->name('orderDetail');

    Route::group(['prefix' => 'cart','as' => 'cart.'],function (){
        Route::post('add','CartController@add')->name('add');
        Route::post('addMultiple','CartController@addMultiple')->name('addMultiple');
        Route::get('view','CartController@view')->name('view');
        Route::post('update','CartController@update')->name('update');
        Route::post('delete','CartController@delete')->name('delete');
        Route::get('/checkout', 'CheckoutController@view')->name('checkout');
        Route::post('/checkoutProceed', 'CheckoutController@checkoutProceed')->name('checkoutProceed');
    });

    Route::get('/order-success/{id?}/{sendMail?}','CheckoutController@orderSuccess')->name('order-success');
    Route::get('findOldInfoByNickname','CheckoutController@findOldInfoByNickname')->name('findOldInfoByNickname');
    Route::get('drAddTests','CheckoutController@drAddTests')->name('drAddTests');
    Route::get('downloadRequisitionOrder/{id}','ProfileController@downloadRequisitionOrder')->name('downloadRequisitionOrder');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => 'admin','namespace' => 'Admin','as' => 'admin.','middleware' => ['auth']], function () {
    Route::group(['prefix' => 'orders','as' => 'orders.',],function (){
        Route::get('/','OrderController@index')->name('index');
        Route::match(['get','post'],'detail/{id}','OrderController@detail')->name('detail');
        Route::delete('destroy/{id}','OrderController@destroy')->name('destroy');
        Route::post('updateOrderStatus/{id}','OrderController@updateOrderStatus')->name('updateOrderStatus');
        Route::post('updatePaymentStatus/{id}','OrderController@updatePaymentStatus')->name('updatePaymentStatus');
    });

    Route::group(['prefix' => 'page-static','as' => 'page-static.',],function (){
        Route::get('/','PageStaticController@index')->name('index');
        Route::match(['get','post'],'detail/{code?}','PageStaticController@detail')->name('detail');
    });
});


