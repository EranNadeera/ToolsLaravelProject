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
});



Route::get('/back', function () {
    return view('back');
});

Route::get('/','pagesContoller@index');
Route::get('/shop','pagesContoller@shop');
Route::get('/about','pagesContoller@about');
Route::get('/contact','pagesContoller@contact');
Route::get('/dashboard','pagesContoller@CustDashboard');
Route::get('/ad-dashboard','pagesContoller@adminDashboard');


// Route::get('/addtool','pagesController@addtool');
Route::get('/addtool', function () {
    return view('addtool');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
});


// Vendor routes
Route::prefix('customer')->group(function(){
    Route::get('/', 'Users\customer\CustomerController@index')->name('customer.dashboard');
    Route::get('/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.login');
    Route::post('/login', 'Auth\CustomerLoginController@login')->name('customer.login.submit');
    Route::get('/register', 'Auth\CustomerRegisterController@showRegisterForm')->name('customer.register');
    Route::post('/register', 'Auth\CustomerRegisterController@register')->name('customer.register.submit');
});