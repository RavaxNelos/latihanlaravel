<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * get /items -> untuk membaca item yang telah dibuat
 * post /items -> untuk membuat item baru
 * put /items/[item_id] -> untuk mengedit item
 * delete /item/[item_id] -> untuk menghapus item
 */

 Route::post('/itempost', [ItemController::class, 'addItems']);
 Route::put('/items/{id}', [ItemController::class, 'editItems']);
 Route::delete('/items/{id}', [ItemController::class, 'deleteItems']);
 Route::get('/items-1', [ItemController::class, 'getItems']);