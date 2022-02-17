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
  return view('home');
})->name("home");

Route::get('/perfil', function () {
    return view('profile');
})->name("profile");

/*
Route::get('/contacto', function () {
  return view('contact');
})->name("contact");
*/
Route::view('/contacto','contact')->name('contact');
Route::post('contacto', 'App\Http\Controllers\MessagesController@store');

//Route::get('/contacto', 'ContactController')->name('contact');
