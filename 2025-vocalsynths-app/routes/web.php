<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VSynthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/vsynths', [VSynthController::class, 'index'])->name('vsynths.index');
Route::get('/vsynths/create', [VSynthController::class, 'create'])->name('vsynths.create');
Route::get('/vsynths/{vsynth}', [VSynthController::class, 'show'])->name('vsynths.show');
Route::post('/vsynths', [VSynthController::class, 'store'])->name('vsynths.store');

Route::get('/vsynths/{vsynth}/edit', [VSynthController::class, 'edit'])->name('vsynths.edit');
Route::put('/vsynths/{vsynth}', [VSynthController::class, 'update'])->name('vsynths.update');
Route::delete('/vsynths/{vsynth}', [VSynthController::class, 'destroy'])->name('vsynths.destroy');

require __DIR__.'/auth.php';
