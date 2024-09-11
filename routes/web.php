<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('store.pages.index');
});

Route::get('/single-product', function () {
    return view('store.pages.single-product');
});

Route::get('/cart', function () {
    return view('store.pages.cart');
});


Route::get('/checkout', function () {
    return view('store.pages.checkout');
});

Route::get('/about', function () {
    return view('store.pages.about');
});

Route::get('/my-account', function () {
    return view('store.pages.my-account');
});

Route::get('/contact', function () {
    return view('store.pages.contact');
});

Route::get('checkout/order/', function () {
    return view('store.pages.order');
});

Route::get('/shop', function () {
    return view('store.pages.shop');
});

Route::get('/login', function () {
    return view('store.pages.login');
});


Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/admin/login', function () {
    return view('admin.pages.login');
});

Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});
