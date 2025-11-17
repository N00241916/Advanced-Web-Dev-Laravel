<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TuningController;
use App\Http\Controllers\VSynthController;
use App\Http\Controllers\SongController;
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

Route::resource('vsynths.tunings', TuningController::class)
    ->only(['create', 'store']);

Route::get('/tunings', [TuningController::class, 'index'])->name('tunings.index');
Route::get('/tunings/{tuning}/edit', [TuningController::class, 'edit'])->name('tunings.edit');
Route::put('/tunings/{tuning}', [TuningController::class, 'update'])->name('tunings.update');
Route::delete('/tunings/{tuning}', [TuningController::class, 'destroy'])->name('tunings.destroy');

Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');

Route::get('/songs/{song}/edit', [SongController::class, 'edit'])->name('songs.edit');
Route::put('/songs/{song}', [SongController::class, 'update'])->name('songs.update');
Route::delete('/songs/{song}', [SongController::class, 'destroy'])->name('songs.destroy');

// Route::post('vsynths/{vsynth}/tunings', [TuningController::class, 'store'])->name('tunings.store');
// Route::get('/tunings/{vsynth}/create', [TuningController::class, 'create'])->name('tunings.create');

require __DIR__.'/auth.php';
