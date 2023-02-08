<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoriasFacturas','App\Http\Controllers\CategoriasFacturasController@index');
Route::get('productos','App\Http\Controllers\ProductosController@index');
Route::get('almacenes','App\Http\Controllers\AlmacenesController@index');
Route::get('categoriasProductos','App\Http\Controllers\CategoriasProductosController@index');
Route::get('clientes','App\Http\Controllers\ClientesController@index');
Route::get('compras','App\Http\Controllers\ComprasController@index');
Route::get('descuentos','App\Http\Controllers\DescuentosController@index');
Route::get('egresos','App\Http\Controllers\EgresosController@index');
Route::get('ingresos','App\Http\Controllers\IngresosController@index');
