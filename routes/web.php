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
Route::get('/login2', function () {
    return view('login2');
});
Route::get('/login3', function () {
    return view('login3');
});

Route::get('/login4', function () {
    return view('login4');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/card', function () {
    return view('card');
});
Route::get('/ultra-lite', function () {
    return view('ultra-lite');
});
Route::get('/client-menu-slider', function () {
    return view('client-menu-slider');
});
Route::get('/customize-recipe', function () {
    return view('customize-recipe');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
