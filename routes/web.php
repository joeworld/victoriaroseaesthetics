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

Route::get('/services/botox-nuceiva', function () {
    return view('procedures/botox-nuceiva');
});
Route::get('/services/brows-lashes', function () {
    return view('procedures/brows-lashes');
});
Route::get('/services/brows-lashes-comingsoon', function () {
    return view('procedures/brows-lashes-comingsoon');
});
Route::get('/services/brows-lashes-all', function () {
    return view('procedures/brows-lashes-all');
});
Route::get('/services/dermal-fillers', function () {
    return view('procedures/dermal-fillers');
});
Route::get('/services/facials', function () {
    return view('procedures/facials');
});
Route::get('/services/microneedling', function () {
    return view('procedures/microneedling');
});
Route::get('/services/iv-therapy', function () {
    return view('procedures/iv-therapy');
});
Route::get('/services/lipolysis', function () {
    return view('procedures/lipolysis');
});
Route::get('/services/mani-pedi', function () {
    return view('procedures/mani-pedi');
});
Route::get('/services/mani-pedis', function () {
    return view('procedures/mani-pedi-pedi');
});
Route::get('/services/mani-pedi-all', function () {
    return view('procedures/mani-pedi-all');
});
Route::get('/services/mani-pedi-add-ons', function () {
    return view('procedures/mani-pedi-addons');
});
Route::get('/services/massage-therapy', function () {
    return view('procedures/massage-therapy');
});
Route::get('/services/nathuropathic-medicines', function () {
    return view('procedures/nathuropathic-medicine');
});
Route::get('/services/packages', function () {
    return view('procedures/packages');
});
Route::get('/services/prp', function () {
    return view('procedures/prp');
});
Route::get('/services/weight-loss-energy', function () {
    return view('procedures/weight-loss-energy');
});
Route::get('/services/sleep-apnea-snoring', function () {
    return view('procedures/sleep-apnea-snoring');
});
Route::get('/services/womens-health', function () {
    return view('procedures/womens-health');
});
Route::get('/services/sculptra-butt-lift', function () {
    return view('procedures/sculptra-butt-lift');
});
Route::get('/services/acne-scar-revision', function () {
    return view('procedures/acne-scar-revision');
});
Route::get('/services/laser-hair-removal', function () {
    return view('procedures/laser-hair-removal');
});
Route::get('/services/skin-resurfacing', function () {
    return view('procedures/skin-resurfacing');
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


