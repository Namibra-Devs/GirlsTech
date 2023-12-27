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
Route::get('/', 'Front\FrontController@blog')->name('front.blog');
Route::get('/', 'Front\FrontController@contact')->name('front.contact');
Route::get('/', 'Front\FrontController@event')->name('front.event');
Route::get('/', 'Front\FrontController@program')->name('front.program');
Route::get('/', 'Front\FrontController@donate')->name('front.donate');
