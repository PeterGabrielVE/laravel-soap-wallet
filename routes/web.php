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

Route::group(['prefix' => 'api'], function () {
    Route::post('/clientes', 'ClientController@create');
    Route::post('/clientes/{id}/billetera/cargar', 'BilleteraController@charge');
    Route::post('/clientes/{id}/billetera/comprar', 'BilleteraController@purchase');
    Route::get('/clientes/{id}/billetera/saldo', 'BilleteraController@balance');
});