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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/quienessomos', function () {
    return view('quienessomos');
})->name('quienessomos');

Route::get('/programacion', function () {
    return view('programacion');
})->name('programacion');

Route::get('/programas', function () {
    return view('programas');
})->name('programas');

Route::get('/contactos', function () {
    return view('contactos');
})->name('contactos');

Route::get('/admin', function () {
    return view('login');
})->name('login');




