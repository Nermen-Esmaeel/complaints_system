<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\RequestTypeController;
use App\Http\Controllers\RequestStatusController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

//applicants
Route::apiResource('applicants', ApplicantController::class);

//categories
Route::apiResource('categories', CategoryController::class);

//Branch
Route::apiResource('branches', BranchController::class);

//RequestTypes
Route::apiResource('requestTypes', RequestTypeController::class);


//RequestStatus
Route::apiResource('requestStatus', RequestStatusController::class);
