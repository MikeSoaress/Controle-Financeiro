<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\SpentController;
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

Route::get('/', [IndexController::class, 'index']);

Route::post('/insert-category', [CategoryController::class, 'store']);
Route::post('/update-category', [CategoryController::class, 'update']);

Route::post('/insert-input', [InputController::class, 'store']);
Route::post('/update-input', [InputController::class, 'update']);
Route::post('/delete-input', [InputController::class, 'delete']);

Route::post('/insert-spent', [SpentController::class, 'store']);
Route::post('/update-spent', [SpentController::class, 'update']);
Route::post('/delete-spent', [SpentController::class, 'delete']);
