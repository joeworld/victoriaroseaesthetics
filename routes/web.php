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

Route::get('/products', function () {
    return view('product-page');
});


// main

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/financing', function () {
    return view('financing');
});

Route::get('/procedures', function () {
    return view('procedures/botox-nuceiva');
});

// procedures

Route::get('/procedures/botox-nuceiva', function () {
    return view('procedures/botox-nuceiva');
});
Route::get('/procedures/brows-lashes', function () {
    return view('procedures/brows-lashes');
});
Route::get('/procedures/dermal-fillers', function () {
    return view('procedures/dermal-fillers');
});
Route::get('/procedures/facials', function () {
    return view('procedures/facials');
});
Route::get('/procedures/iv-therapy', function () {
    return view('procedures/iv-therapy');
});
Route::get('/procedures/lipolysis', function () {
    return view('procedures/lipolysis');
});
Route::get('/procedures/mani-pedi', function () {
    return view('procedures/mani-pedi');
});
Route::get('/procedures/massage-therapy', function () {
    return view('procedures/massage-therapy');
});
Route::get('/procedures/nathuropathic-medicines', function () {
    return view('procedures/nathuropathic-medicine');
});
Route::get('/procedures/packages', function () {
    return view('procedures/packages');
});
Route::get('/procedures/prp', function () {
    return view('procedures/prp');
});
Route::get('/procedures/sleep-apnea-snoring', function () {
    return view('procedures/sleep-apnea-snoring');
});
Route::get('/procedures/womens-health', function () {
    return view('procedures/womens-health');
});

// products

Route::get('/products/skinceuticals', function () {
    return view('products/skinceuticals');
});
Route::get('/products/zo-skin-health', function () {
    return view('products/zo-skin-health');
});
Route::get('/products/eyenvy', function () {
    return view('products/eyenvy');
});
Route::get('/products/colorescience', function () {
    return view('products/colorescience');
});
Route::get('/products/envy-pillows', function () {
    return view('products/envy-pillows');
});
Route::get('/products/teoxane-cosmeceuticals', function () {
    return view('products/teoxane-cosmeceuticals');
});


