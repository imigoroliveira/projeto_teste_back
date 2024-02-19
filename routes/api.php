<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutosController;

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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', 'AuthController@register');
Route::get('produtos/listar', [ProdutosController::class, 'index']);
Route::post('produtos/criar', [ProdutosController::class, 'create']);
Route::post('produtos/editar', [ProdutosController::class, 'update']);


Route::get('/api/documentation', function () {
    return redirect('/api/documentation/index.html');
});