<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

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

/**
 * get /items -> untuk membaca item yang telah dibuat
 * post /items -> untuk membuat item baru
 * put /items/[item_id] -> untuk mengedit item
 * delete /item/[item_id] -> untuk menghapus item
 */

Route::post('/items', [ItemController::class, 'addItems']);
Route::put('/items', [ItemController::class, 'editItems']);
Route::delete('/items/{id}', [ItemController::class, 'deleteItems']);
Route::get('/items/{id}', [ItemController::class, 'getItems']);