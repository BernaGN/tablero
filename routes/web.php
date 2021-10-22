<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\EstatuController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ComentarioController;

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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('/tareas', TareaController::class)->except('index', 'create', 'edit');
Route::resource('/estatus', EstatuCesontroller::class)->only('store');
Route::resource('/comentarios', ComentarioController::class)->only('store');
Route::resource('/agenda', AgendaController::class)->except('create', 'edit', 'show');
Route::resource('/proyectos', ProyectoController::class)->only('store', 'update', 'destroy');
