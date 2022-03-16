<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catalogosController;

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

Route::get('/',[catalogosController::class, 'index'])->name('inicio');
Route::get('/codigos/codigo/{codigo?}',[catalogosController::class, 'show'])->name('codigos.show');
Route::get('/codigos/asentamiento/{codigo?}/{asentamiento?}',[catalogosController::class, 'asentamientos'])->name('codigos.asentamientos');
