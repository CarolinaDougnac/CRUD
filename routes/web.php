<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class);
Route::resource('facturas', App\Http\Controllers\FacturaController::class);
Route::resource('tiendas', App\Http\Controllers\TiendaController::class);
Route::resource('bodegas', App\Http\Controllers\BodegaController::class);
Route::resource('estados', App\Http\Controllers\EstadoController::class);
Route::resource('marcas', App\Http\Controllers\MarcaController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('facturaProductos', App\Http\Controllers\FacturaProductoController::class);
Route::resource('inventarios', App\Http\Controllers\InventarioController::class);
Route::resource('recepcions', App\Http\Controllers\RecepcionController::class);
