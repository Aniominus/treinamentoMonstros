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



Route::get('/', function () {

    $monstros = array(

    'goblin' => array(
        'nome' => 'Goblin',
        'desafio'  => '1/4',
        'defesa' => '13',
        'tipo'  => 'Humanoide',
        'ataque' => '+5',
        'deslocamento' => '9 metros',
    ),

    'esqueleto' => array(
        'nome' => 'Esqueleto',
        'desafio'  => '1/2',
        'defesa' => '15',
        'tipo'  => 'Morto-Vivo',
        'ataque' => '+7',
        'deslocamento' => '12 metros',
    ),

    'gnoll' => array(
        'nome' => 'Gnoll',
        'desafio'  => '1',
        'defesa' => '16',
        'tipo'  => 'Humanoide',
        'ataque' => '+9',
        'deslocamento' => '15 metros',
    )

);

    return view('monstros.index', ['monstros' => $monstros]);
});



Route::get('/form', function () {
    return view('monstros.form');
});
