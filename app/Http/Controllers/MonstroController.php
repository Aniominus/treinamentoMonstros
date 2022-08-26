<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monstro;

class MonstroController extends Controller
{
    /**
     * Global private declarations.
     */
    private $monstros;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Monstro $monstros){

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



}
