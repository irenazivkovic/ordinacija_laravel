<?php

use App\Http\Controllers\AutController;
use App\Http\Controllers\KlijentController;
use App\Http\Controllers\ZubarController;
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

Route::post('registracija',[AutController::class, 'register']);
Route::post('prijava',[AutController::class, 'login']);

Route::get('zubar', [ZubarController::class, 'index']);
Route::get('zubar/{zubar}', [ZubarController::class, 'show']);
Route::get('klijent', [KlijentController::class, 'index']);
Route::get('klijent/{klijent}', [KlijentController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('zubar', [ZubarController::class, 'store']);
    Route::delete('zubar/{zubar}', [ZubarController::class, 'destroy']);
    Route::post('odjava',[AutController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
