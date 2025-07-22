<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\v1\TicketController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::middleware('api')
//     ->group(function () {
//         // Aquí van las rutas principales de la API

//         Route::get('/', function () {
//             return response()->json(['message' => 'Hello World!'], 200);
//         });


//     });


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::apiResource('tickets', TicketController::class);
