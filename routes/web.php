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

//route::get (url,                                                   metedo en el controlador)
Route::get('/index', [App\Http\Controllers\librosController::class,'index']);
Route::get('/crear', [App\Http\Controllers\librosController::class,'crear']);
Route::get('/editar/{id}', [App\Http\Controllers\librosController::class,'editar']);

Route::post('/crear', [App\Http\Controllers\librosController::class,'crearLibro'])->name('crear.crearLibro');