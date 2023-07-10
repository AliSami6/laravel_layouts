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
    return view('website.pages.home');
});

Route::get('/contact', function () {
    return view('website.pages.contact');
});

Route::get('/cart', function () {
    return view('website.pages.cart');
});
Route::get('/home', function () {
    return view('backend.pages.home');
});

Route::get('/checkout', function () {
    return view('website.pages.checkout');
});