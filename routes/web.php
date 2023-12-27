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

/*======================================================
**********************Front Routes**********************
======================================================*/
Route::get('/', 'Front\FrontController@index')->name('front.index');
Route::get('/blog', 'Front\FrontController@blog')->name('front.blog');
Route::get('/contact', 'Front\FrontController@contact')->name('front.contact');
Route::get('/event', 'Front\FrontController@event')->name('front.event');
Route::get('/program', 'Front\FrontController@program')->name('front.program');
Route::get('/donate', 'Front\FrontController@donate')->name('front.donate');
