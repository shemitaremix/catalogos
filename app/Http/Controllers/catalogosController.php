<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class catalogosController extends Controller
{
    public function index(){
        $catalogo = Catalogo::all();
        return view('selects',['catalogo' => $catalogo]);
    }

    public function show($codigo){

        $codigos = Catalogo::where('codigo',$codigo)->get();

        return response()->json(['codigos' => $codigos]);

    }

    public function asentamientos($codigo, $asentamiento)
    {
        $codigos = Catalogo::where('codigo',$codigo)->where('asentamiento',$asentamiento)->get();

        return response()->json(['codigos' => $codigos]);
    }
}
