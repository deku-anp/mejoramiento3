<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    //
    
    public function create(){
        return view('travel.create');
    }

    public function store(Request $request){
        $travel= new Travel();

        $travel->codigo=$request->codigo;
        $travel->num_plazas=$request->num_plazas;
        $travel->fecha=$request->fecha;
        $travel->otros_datos=$request->otros_datos;

        $travel->save();
        return $travel;
    }

    public function listar(){
        
        $travels = Travel::orderBy('id', 'desc')->get();
        return view('travel.listar', compact('travels'));

    }

    public function edit(Travel $travel){//Encuentro el Curso
        
        return view('travel.edit',compact('travel'));
    }

    //Update
    public function update(Request $request,Travel $travel){
        
        $travel->codigo=$request->codigo;
        $travel->num_plazas=$request->num_plazas;
        $travel->fecha=$request->fecha;
        $travel->otros_datos=$request->otros_datos;
        $travel->save();
        return redirect()->route('travel.listar');
    }

    public function show($id){
        
        //$id
        $travel = Travel::find($id);
        return view('travel.show',compact('travel'));
    }

    public function destroy(Travel $travel){
        
        $travel->delete();
        return redirect()->route('travel.listar');
    }
}
