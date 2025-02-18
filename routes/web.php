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

Route::get('/home', function () {
    return view('home');
});

Route::get('/recent', function () {
    return view('home');
});

Route::get('/history', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('home');
});


Route::get('/term_of_service', function () {
    return view('hamburger_menu/term_of_service');
});

Route::get('/policy', function () {
    return view('hamburger_menu/policy');
});

Route::get('/change_password', function () {
    return view('hamburger_menu/change_password');
});
