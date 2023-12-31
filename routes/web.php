<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BelajarController;

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

Route::get('doni', [BelajarController::class, 'doni']);
Route::get('doni/create', [BelajarController::class, 'create']);
Route::post('doni', [BelajarController::class, 'store']);
Route::get('doni/{id}/edit', [BelajarController::class, 'edit']);
Route::put('doni/{id}', [BelajarController::class, 'update']);

// put, patch, delete

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/doni', function () {
//     return view('doni.doni');
// });
