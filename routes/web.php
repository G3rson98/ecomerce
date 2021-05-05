<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
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

//vista inicio welcome
Route::get('/', [ProductoController::class, 'index'])->name('/');
//vista producto americano
Route::get('/americano', [ProductoController::class, 'indexAMERICANO'])->name('americano');
////vista producto brasilero
Route::get('/brasilero', [ProductoController::class, 'indexBRASILERO'])->name('brasilero');
//vista producto ninos
Route::get('/product_N', [ProductoController::class, 'indexN'])->name('N');
////vista producto hombre
Route::get('/product_H', [ProductoController::class, 'indexH'])->name('H');
Route::get('/product_M', [ProductoController::class, 'indexM'])->name('M');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('descripcion');
//buscador
Route::POST('/buscar', [ProductoController::class, 'indexbuscar'])->name('buscar');