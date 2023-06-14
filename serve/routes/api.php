<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\PostsController;

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

Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::post('/usuarios', [UsuariosController::class, 'store']);
Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);

Route::get('/comentarios', [ComentariosController::class, 'index']);
Route::post('/comentarios', [ComentariosController::class, 'store']);
Route::delete('/comentarios/{id}', [ComentariosController::class, 'destroy']);

Route::get('/post', [PostsController::class, 'index']);
Route::post('/post', [PostsController::class, 'store']);
Route::delete('/post/{id}', [PostsController::class, 'destroy']);