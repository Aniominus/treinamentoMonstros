<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monstro;
use App\Models\Stat;
use App\Models\Tamanho;
use App\Models\Tipo;
use App\Models\Ataque;

class MonstroController extends Controller
{
    /**
     * Global private declarations.
     */
    private $monstros, $stats, $ataques, $tamanhos, $tipos;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Monstro $monstros){

        $this->tipos = Tipo::all()->pluck('nome', 'id');
        $this->tamanhos = Tamanho::all()->pluck('nome', 'id');
        $this->ataques = Ataque::all()->pluck('nome', 'id');
        $this->stats = new Stat();
        $this->monstros = $monstros;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monstros = $this->monstros->all();
        return view('monstros.index', compact('monstros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monstros = $this->monstros;
        $tamanhos = $this->tamanhos;
        $tipos = $this->tipos;
        $ataques = $this->ataques;
        return view('monstros.form', compact('monstros','tamanhos','tipos', 'ataques'));
    }

    


}
