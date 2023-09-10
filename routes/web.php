<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'inicio'])->name('inicio');
Route::get('/vender/imoveis', [FrontController::class, 'vender'])->name('vender');
Route::get('/comprar/imoveis', [FrontController::class, 'comprar'])->name('comprar');
