<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExemploController;
use App\Http\Controllers\PlayerController;





Route::get('/',[ExemploController::class ,'index']);


// Route::group(['middleware' => ['JWTToken']], function () {

//   Route::post('/',[AgendaController::class ,'cadastrar']);

// });

// Route::get('/player',[ExemploController::class ,'index']);
Route::get('/', [PlayerController::class, 'index']);
Route::get('/musicas/{id}', [PlayerController::class, 'buscarId']);
Route::post('/musicas', [PlayerController::class, 'salvar']);
Route::put('/musicas/{id}', [PlayerController::class, 'atualizar']);
Route::delete('/musicas/{id}', [PlayerController::class, 'deletar']);





