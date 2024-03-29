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

Route::get('/', function () {return view('faq.index');});
Route::get('/checkout', function () {return view('faq.checkout');});
Route::get('/blog', function () {return view('faq.blog');});
Route::get('/faq', function () {return view('faq.isi');});