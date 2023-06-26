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
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/service',function() {
    return view('pages.service');
})->name('service');

Route::get('/expertise-it',function () {
    return view('pages.expertise-it');
})->name('expertise.it');

Route::get('/expertise-wood',function () {
    return view('pages.expertise-wood');
})->name('expertise.wood');

Route::get('/product',function() {
    return view('pages.product');
})->name('product');

Route::get('/detail-product', function () {
    return view('pages.detail-product');
})->name('product.detail');

Route::get('/contact',function(){
    return view('pages.contact');
})->name('contact');
Route::get('/navmobile',function(){
    return view('pages.navmobile');
})->name('navmobile');