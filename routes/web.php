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
/*
Route::get('/', function () {
  return view('home');
})->name("home");
*/

Route::get('/','App\Http\Controllers\ProductController@index')->name("home");
Route::get('productos/{id}','App\Http\Controllers\ProductController@show')->name("products.show");

Route::view('/contacto','contact')->name('contact');
Route::post('contacto', 'App\Http\Controllers\MessageController@store')->name('messages.store');



Route::get('/perfil', function () {
    return view('profile');
})->name("profile");


Route::get('/registro', function () {
  return view('signin');
})->name("signin");





//Route::get('/contacto', 'ContactController')->name('contact');
