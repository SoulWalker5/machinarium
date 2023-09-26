<?php

use App\Http\Controllers\Api\MachineController;
use App\Http\Controllers\Api\MachineHistoryController;
use App\Http\Controllers\Api\MachineWorkerController;
use App\Http\Controllers\Api\WorkerController;
use App\Http\Controllers\Api\WorkerHistoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('worker/{worker}/history', WorkerHistoryController::class)->name('worker.history');
Route::resource('worker', WorkerController::class)->only(['index', 'show']);
Route::prefix('worker/{worker}/machine')->as('worker.machine.')->group(function () {
    Route::post('attach', [MachineWorkerController::class, 'attach'])->name('attach');
    Route::post('detach', [MachineWorkerController::class, 'detach'])->name('detach');
});

Route::get('machine/{machine}/history', MachineHistoryController::class)->name('machine.history');
Route::resource('machine', MachineController::class)->only(['index', 'show']);
