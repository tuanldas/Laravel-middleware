<?php

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

Route::get('/check', function () {
    return view('check');
})->name('check');

Route::middleware('check.age')->get('/confirm', function () {
    return view('confirmed');
})->name('confirm');

Route::get('/deny', function () {
    return view('checkerr');
})->name('deny');