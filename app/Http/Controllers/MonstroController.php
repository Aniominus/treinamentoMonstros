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
        $tamanhos = $this->tamanhos;
        $tipos = $this->tipos;
        $ataques = $this->ataques;
        return view('monstros.form', compact('tamanhos','tipos', 'ataques'));
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Solicita que a model crie um novo registro com as informações do request -?-
        //e atribui o valor de cada atributo do request ao registro de referência
        $monstros = $this->monstros->create([
            'nome' => $request->nome,
            'desafio' => $request->desafio,
            'stats_id' => $this->stats->create([
                'forca' => $request->forca,
                'destreza' => $request->destreza,
                'constituicao' => $request->constituicao,
                'inteligencia' => $request->inteligencia,
                'sabedoria' => $request->sabedoria,
                'carisma' => $request->carisma,
                'deslocamento' => $request->deslocamento,
                'pontosdevida' => $request->pontosdevida,
                'pontosdemana' => $request->pontosdemana,
                'defesa' => $request->defesa
            ])->id,
            'tamanho_id' => $request->tamanho,
            'tipo_id' => $request->tipo,
        ]);
        $monstros->ataques = $request->ataques;
        //retorna a view index, onde as informações que a model time extrai do banco são exibidas
        return redirect()->route('monstros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monstro = $this->monstros->find($id);

        $stats = $this->stats;
        $tamanhos = $this->tamanhos;
        $tipos = $this->tipos;
        $ataques  = $this->ataques;
        return view('monstros.form', compact('stats','tamanhos','tipos','ataques','monstro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monstro = $this->monstros->find($id);

        $stats = $this->stats;
        $tamanhos = $this->tamanhos;
        $tipos = $this->tipos;
        $ataques  = $this->ataques;
        return view('monstros.form', compact('stats','tamanhos','tipos','ataques','monstro'));
    }





}
