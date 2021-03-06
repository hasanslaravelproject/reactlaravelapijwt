<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\ClientReportsController;



Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);

        Route::apiResource('clients', ClientController::class);

        // Client Reports
        Route::get('/clients/{client}/reports', [
            ClientReportsController::class,
            'index',
        ])->name('clients.reports.index');
        Route::post('/clients/{client}/reports', [
            ClientReportsController::class,
            'store',
        ])->name('clients.reports.store');

        Route::apiResource('users', UserController::class);

        Route::apiResource('reports', ReportController::class);
    });
