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

Route::post('/add-categoria', [CategoryController::class, 'store']);
Route::post('/update-categoria', [CategoryController::class, 'update']);

Route::post('/add-entrada', [InputController::class, 'store']);
Route::post('/update-entrada', [InputController::class, 'update']);
Route::post('/delete-entrada', [InputController::class, 'delete']);

Route::post('/add-spent', [SpentController::class, 'store']);
Route::post('/update-spent', [SpentController::class, 'update']);
Route::post('/delete-spent', [SpentController::class, 'delete']);
