<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GymProgramController;
use App\Http\Controllers\WeeklyRoutineController;

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

Route::get('/LogReg', function () {
    return Inertia::render('LogReg', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->middleware('guest');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/gymprogram', [GymProgramController::class, 'index'])->name('gymprogram.index');
    Route::post('/gymprogram/store', [GymProgramController::class, 'store'])->name('gymprogram.store');
    Route::get('/gymprogram/{id}', [GymProgramController::class, 'show'])->name('program.show');
    
    Route::post('/weeklyroutine/store', [WeeklyRoutineController::class, 'store'])->name('weeklyroutine.store');
});


Route::post('/test', function () { dd('Test route reached'); });

require __DIR__.'/auth.php';
