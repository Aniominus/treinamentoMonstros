<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/index', function () {
    $goblin = array(
        'nome' => 'Goblin',
        'desafio'  => '1/4',
        'tipo'  => 'Humanoide',
        'ataque' => '+5',
        'deslocamento' => '9 metros',
        'action' => 'Nada'
    );
    return view('monstros.index', ['goblin' => $goblin]);
});

// Route::get('/', [ TimeController::class, 'index'])->name('time.index');
//  // 'name of function'


