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

    public function buscar(Request $request){
   
      $text = $request->text;
      // Haces tu consulta para eloquent en este caso para el ejemplo
      $data = Catalogo::where('municipio', 'LIKE', '%'.$text.'%')->get();
      // resultados es una vista que crearas para reemplazar el contenido de tu tabla. 
      $view = view('selects', compact('data'))->render();
      return response()->json($view);
   
    }
}
