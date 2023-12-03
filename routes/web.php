<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GymProgramController;
use App\Http\Controllers\WeeklyRoutineController;
use App\Http\Controllers\DailySessionController;
use App\Http\Controllers\ExerciseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
    ]);
});

Route::get('/useraccses', function () {
    return Inertia::render('Auth/UserAccess', [
    ]);
})->middleware('guest')->name('useraccses');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/gymprogram', [GymProgramController::class, 'index'])->name('gymprogram.index');
    Route::post('/gymprogram/store', [GymProgramController::class, 'store'])->name('gymprogram.store');
    Route::get('/gymprogram/{id}', [GymProgramController::class, 'show'])->name('program.show');

    Route::get('/weeklyroutine', [WeeklyRoutineController::class, 'index'])->name('weeklyroutine.index');
    Route::post('/weeklyroutine/store', [WeeklyRoutineController::class, 'store'])->name('weeklyroutine.store');
    Route::get('/weeklyroutine/{id}', [WeeklyRoutineController::class, 'show'])->name('weeklyroutine.show');

    Route::post('/daiylysession/store', [DailySessionController::class, 'store'])->name('daiylysession.store');
    Route::get('/daiylysession/{id}', [DailySessionController::class, 'show'])->name('daiylysession.show');

    Route::post('/exercise/store', [ExerciseController::class, 'store'])->name('exercise.store');
    Route::get('/exercise/{id}', [ExerciseController::class, 'show'])->name('exercise.show');
});

Route::post('/test', function () { dd('Test route reached'); });

require __DIR__.'/auth.php';
