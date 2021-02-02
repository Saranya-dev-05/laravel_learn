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

Route::view("login",'index5');

Route::view("add",'contact');

Route::resource('projec', ProductController::class);

Route::get('/contact', 'App\Http\Controllers\ProductController@createForm');

Route::post('/contact', 'App\Http\Controllers\ProductController@ContactUsForm')->name('contact.store');