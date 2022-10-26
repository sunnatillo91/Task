<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ProfileController as ApiProfileController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resources([
    '/companies' => CompanyController::class
]);

Route::resources([
    '/profiles' => ApiProfileController::class
]);