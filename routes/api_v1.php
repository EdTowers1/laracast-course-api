<?php

use App\Http\Controllers\Api\v1\TicketController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::middleware('api')->prefix('V1')->group(function () {
    // Aquí van las rutas principales de la API v1

    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('tickets', TicketController::class);
    });

});
