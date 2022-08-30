<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonstroController;

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

// Route::get('/', [MonstroController::class, 'index'], function () {
//     return view('monstros.index');
// });

// Route::get('/form', [MonstroController::class, 'create'], function () {
//     return view('monstros.form');
// });

Route::get('/', [ MonstroController::class, 'index'])->name('monstros.index');

Route::get('/create', [ MonstroController::class, 'create'])->name('monstros.create');

Route::post('/create', [ MonstroController::class, 'store'])->name('monstros.store');

// Route::match(array('PUT','PATCH'), '/update/{id}', [ MonstroController::class, 'update'])->name('monstros.update');

Route::put('/update/{id}', [ MonstroController::class, 'update'])->name('monstros.update');

Route::get('/show/{id}', [ MonstroController::class, 'show'])->name('monstros.show');

Route::get('/edit/{id}', [ MonstroController::class, 'edit'])->name('monstros.edit');

Route::delete('/destroy/{id}', [ MonstroController::class, 'destroy'])->name('monstros.destroy');
