<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiniaturaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProgramacionController;
use App\Http\Controllers\ProgramaController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/quienessomos', [HomeController::class, 'quienessomos'])->name('quienessomos');
Route::get('/programacion', [HomeController::class, 'programacion'])->name('programacion');
Route::get('/programas', [HomeController::class, 'programas'])->name('programas');
Route::get('/contactos', [HomeController::class, 'contactos'])->name('contactos');

/* Rutas del administrador*/
Route::get('/admin', function(){
    return view('admin.dashboard.index');
});

Route::prefix('/admin')->group(function(){
    Route::get('/programacion', [ProgramacionController::class, 'index'])->name('programacion.index');
    Route::get('/programacion/create', [ProgramacionController::class, 'create'])->name('programacion.create');
    Route::post('/programacion', [ProgramacionController::class, 'store'])->name('programacion.store');
    Route::get('/programacion/{programacion}/edit', [ProgramacionController::class, 'edit'])->name('programacion.edit');
    Route::patch('/programacion/{programacion}', [ProgramacionController::class, 'update'])->name('programacion.update');
    Route::delete('/programacion/{programacion}', [ProgramacionController::class, 'destroy'])->name('programacion.destroy');

    /*
    Route::get('/programas', [ProgramaController::class, 'index'])->name('programas.index');
    Route::get('/programas/create', [ProgramaController::class, 'create'])->name('programas.create');
    Route::post('/programas', [ProgramaController::class, 'store'])->name('programas.store');*/
    Route::resource('programas', ProgramaController::class);
    Route::resource('noticias', NoticiaController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('miniaturas', MiniaturaController::class);


});