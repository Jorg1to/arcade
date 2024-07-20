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
    return view('/home');
});

Route::resource('reservas', 'App\Http\Controllers\ReservaController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/bebidas', function () {
    return view('bebidas');
});Route::get('/juegos', function () {
    return view('juegos');
});Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/politica-privacidad', function () {
    return view('politica-privacidad');
});

Route::get('/aviso-legal', function () {
    return view('aviso-legal');
});

