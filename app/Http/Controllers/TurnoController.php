<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
class TurnoController extends Controller
{
    public function index(){
        $turno =  Turno::all();
       //return $turno;
         return view('turno.inicio', compact('turno'));
    }
    public function consulta(){
       return view('turno.consulta');
    }
    public function store(Request $request){
        $turno = new Turno;

        $turno->name=$request->name;
        $turno->tipo=$request->tipo;
        $turno->juez="patricia";
        $turno->save();
       /* if('tipo =oder de aprencion'){

        $turno->juez="patricia";
        $turno->save();
       }

 if('tipo =sin detenido'){

             $turno->name=$request->name;
        $turno->tipo=$request->tipo;
        $turno->juez="patricia";
        $turno->save();
       }

       */
        return redirect()->route('turno.inicio');
     }
}
