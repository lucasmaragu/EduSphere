<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;

// Rutas públicas (No requieren token)
Route::post('/register', [AuthController::class, 'register']); //

Route::post('/login', [AuthController::class, 'login']); // Login
// Rutas protegidas (Requieren token)
Route::middleware('auth:sanctum')->group(function () {
    // CRUD de asignaturas
    Route::get('/subjects', [SubjectController::class, 'index']);
    Route::post('/subjects', [SubjectController::class, 'store']);
    Route::get('/subjects/{id}', [SubjectController::class, 'show']);
    Route::put('/subjects/{id}', [SubjectController::class, 'update']);
    Route::delete('/subjects/{id}', [SubjectController::class,
    'destroy']);
    });