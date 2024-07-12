<?php

namespace App\Http\Controllers;

use App\Models\Traveler;
use Illuminate\Http\Request;

class TravelerController extends Controller
{
    //

    public function create(){
        return view('traveler.create');
    }

    public function store(Request $request){
        $traveler= new Traveler();

        $traveler->dni=$request->dni;
        $traveler->nombre=$request->nombre;
        $traveler->direccion=$request->direccion;
        $traveler->tfno=$request->tfno;

        $traveler->save();
        return $traveler;
    }

    public function listar(){
        
        $travelers = Traveler::orderBy('id', 'desc')->get();
        return view('traveler.listar', compact('travelers'));

    }

    public function edit(Traveler $traveler){//Encuentro el Curso
        
        return view('traveler.edit',compact('traveler'));
    }

    //Update
    public function update(Request $request,Traveler $traveler){
        
        $traveler->dni=$request->dni;
        $traveler->nombre=$request->nombre;
        $traveler->direccion=$request->direccion;
        $traveler->tfno=$request->tfno;
        $traveler->save();
        return redirect()->route('traveler.listar');
    }

    public function show($id){
        
        //$id
        $traveler = Traveler::find($id);
        return view('traveler.show',compact('traveler'));
    }

    public function destroy(Traveler $traveler){
        
        $traveler->delete();
        return redirect()->route('traveler.listar');
    }
}
