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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');

});


Route::get('categoriasFacturas', 'App\Http\Controllers\CategoriasFacturasController@index');
Route::get('productos', 'App\Http\Controllers\ProductosController@index');
Route::get('almacenes', 'App\Http\Controllers\AlmacenesController@index');
Route::get('categoriasProductos', 'App\Http\Controllers\CategoriasProductosController@index');
Route::get('clientes', 'App\Http\Controllers\ClientesController@index');
Route::get('compras', 'App\Http\Controllers\ComprasController@index');
Route::get('descuentos', 'App\Http\Controllers\DescuentosController@index');
Route::get('egresos', 'App\Http\Controllers\EgresosController@index');

Route::get('ingresos','App\Http\Controllers\IngresosController@index');
Route::get('inventarios','App\Http\Controllers\InventariosController@index');
Route::get('ordenesCompras','App\Http\Controllers\OrdenesCompraController@index');
Route::get('ordenesVentas','App\Http\Controllers\OrdenesVentaController@index');
Route::get('proveedores','App\Http\Controllers\ProveedoresController@index');
Route::get('roles','App\Http\Controllers\RolesController@index');
Route::get('utilidades','App\Http\Controllers\UtilidadesController@index');
Route::get('ventas','App\Http\Controllers\VentasController@index');
