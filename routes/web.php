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

Route::get('/','pagesContoller@index');
Route::get('/shop','pagesContoller@shop');
Route::get('/about','pagesContoller@about');
Route::get('/contact','pagesContoller@contact');


// Route::get('/addtool','pagesController@addtool');
Route::get('/addtool', function () {
    return view('addtool');
});
Route::get('/temp', function () {
    return view('temp');
});