<?php

namespace App\Http\Controllers;

use App\Models\origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    public function index(){
        $origins = origin::orderby('id','asc')->get();
        return view('origen.listar', compact('origins'));
    }

    public function create(){
        return view('origen.create');
    }

    public function store(Request $request){
        $origins = new origin();
        $origins->nombre = $request->nombre;
        $origins->otros_datos = $request->otros_datos;
        $origins->save();
        return redirect()->route('origin.index');
    }

    public function show(origin $origins){
        return view('origen.show',compact('origins'));
    }

    public function destroy (origin $origins){
        $origins->delete();
        return redirect()->route('origin.index');
    }

      //Edit
    public function edit(origin $origins){
        return view('origen.editar', compact('origins'));
    }

      //Update
    public function update(Request $request, origin $origins){
        $origins->nombre = $request->nombre;
        $origins->otros_datos = $request->otros_datos;
        $origins->save();
        return redirect()->route('origin.index');
    }
}
