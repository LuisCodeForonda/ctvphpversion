<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\MiniaturaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProgramacionController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\UserController;
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

//rutas publicas
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/noticias/{slug}', [HomeController::class, 'detallenoticia'])->name('detallenoticia');
Route::get('/quienessomos', [HomeController::class, 'quienessomos'])->name('quienessomos');
Route::get('/programacion', [HomeController::class, 'programacion'])->name('programacion');
Route::get('/programas', [HomeController::class, 'programas'])->name('programas');
Route::get('/contactos', [HomeController::class, 'contactos'])->name('contactos');

//envio de correos
Route::post('/contactos', [MessagesController::class, 'store'])->name('contactos');

//rutas del login
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

/* Rutas del administrador*/
Route::get('/admin', function(){
    return view('admin.dashboard.index');
})->middleware('auth')->name('admin');

Route::prefix('/admin')->group(function(){
    Route::get('/programacion', [ProgramacionController::class, 'index'])->middleware(['auth', 'can:programacion.index'])->name('programacion.index');
    Route::get('/programacion/create', [ProgramacionController::class, 'create'])->middleware('auth')->name('programacion.create');
    Route::post('/programacion', [ProgramacionController::class, 'store'])->middleware('auth')->name('programacion.store');
    Route::get('/programacion/{programacion}/edit', [ProgramacionController::class, 'edit'])->middleware('auth')->name('programacion.edit');
    Route::patch('/programacion/{programacion}', [ProgramacionController::class, 'update'])->middleware('auth')->name('programacion.update');
    Route::delete('/programacion/{programacion}', [ProgramacionController::class, 'destroy'])->middleware('auth')->name('programacion.destroy');

    /*
    Route::get('/programas', [ProgramaController::class, 'index'])->name('programas.index');
    Route::get('/programas/create', [ProgramaController::class, 'create'])->name('programas.create');
    Route::post('/programas', [ProgramaController::class, 'store'])->name('programas.store');*/
    Route::resource('programas', ProgramaController::class)->middleware(['auth', 'can:programas.index']);
    Route::resource('noticias', NoticiaController::class)->middleware(['auth', 'can:noticias.index']);
    Route::resource('banners', BannerController::class)->middleware(['auth', 'can:banners.index']);
    Route::resource('miniaturas', MiniaturaController::class)->middleware(['auth', 'can:miniaturas.index']);

    Route::get('users', [UserController::class, 'index'])->middleware(['auth', 'can:users.index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->middleware(['auth', 'can:users.create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->middleware('auth')->name('users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->middleware(['auth', 'can:users.edit'])->name('users.edit');
    Route::patch('users/{user}', [UserController::class, 'update'])->middleware('auth')->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware(['auth', 'can:users.destroy'])->name('users.destroy');
    
});