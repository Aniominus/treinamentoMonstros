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

Route::get('/', [ MonstroController::class, 'index'], function () {
    return view('monstros.index');
});

Route::get('/form', function () {
    return view('monstros.form');
});

// Route::get('/test', [ TimeController::class, 'test'])->name('time.test'); // 'name of function'
