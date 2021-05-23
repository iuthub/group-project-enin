<?php

use App\Http\Controllers\API\AnnouncementController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    "middleware" => ["auth:sanctum"]
], function () {
    Route::get('/board/delete/{id}', [App\Http\Controllers\Api\AnnouncementController::class, 'delete'])->name('board.delete');
    Route::get('/board/reorder/{id}', [App\Http\Controllers\Api\AnnouncementController::class, 'reorder'])->name('board.reorder');
    Route::get('/board/approve/{id}', [App\Http\Controllers\Api\AnnouncementController::class, 'approve'])->name('board.approve');
});
