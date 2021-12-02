<?php

use App\Http\Controllers\TodoController;
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

Route::get('/todos', [TodoController::class, 'list']);
Route::get('/todos/{id}', [TodoController::class, 'detail']);
Route::post('/todos/create', [TodoController::class, 'create']);
Route::post('/todos/tick/{id}', [TodoController::class, 'tick']);
Route::post('/todos/edit/{id}', [TodoController::class, 'edit']);
Route::delete('/todos/{id}', [TodoController::class, 'delete']);