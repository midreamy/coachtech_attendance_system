<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RestController;

Route::middleware('auth')->group(function () {
    Route::get('/', [AttendanceController::class, 'index']);
});

Route::get('/attendance', [AttendanceController::class, 'show']);
Route::post('/attendance/start', [AttendanceController::class, 'startAttendance']);
Route::post('/attendance/end', [AttendanceController::class, 'endAttendance']);
Route::post('/attendance/rest/start', [RestController::class, 'startRest']);
Route::post('/attendance/rest/end', [RestController::class, 'endRest']);

require __DIR__ . '/auth.php';
