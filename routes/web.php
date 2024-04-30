<?php

use App\Http\Controllers\MarcheController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

Route::get('index', [MarcheController::class, 'index'])->name('marche.index');
Route::get('create', [MarcheController::class, 'create'])->name('marche.create');
Route::post('store', [MarcheController::class, 'store'])->name('marche.store');
Route::get('/marche/{id}/edit', [MarcheController::class, 'edit'])->name('edit.marche');
Route::put('/marche/{id}', [MarcheController::class, 'update'])->name('update.marche');
Route::delete('/marche/{id}', [MarcheController::class, 'destroy'])->name('delete.marche');




require __DIR__.'/auth.php';
