<?php

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

Route::get('/station', [\App\Http\Controllers\API\StationController::class, 'getAll']);
Route::get('/station/{id}', [\App\Http\Controllers\API\StationController::class, 'getStation']);

Route::get('/measurements/toppolluted', [\App\Http\Controllers\API\MeasurementController::class, 'getTopPollutedLocations']);
Route::get('/measurements/leastpolluted', [\App\Http\Controllers\API\MeasurementController::class, 'getTopClearLocations']);

Route::get('/measurements/archive/{id}', [\App\Http\Controllers\API\MeasurementController::class, 'getArchiveStationData']);
Route::get('/measurements/station/{id}', [\App\Http\Controllers\API\MeasurementController::class, 'getMeasurementsForStation']);



