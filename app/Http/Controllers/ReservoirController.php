<?php

namespace App\Http\Controllers;

use App\Reservoir;
use Illuminate\Http\Request;

class ReservoirController extends Controller
{
    
    public function index(){
       return view('reservoirs.index', ['reservoirs' => \App\Reservoir::all()]);
    }
    public function create(){
        return view('reservoirs.create');
    }

    public function store(Request $request){
        $reservoir= new Reservoir();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        $reservoir->fill($request->all());
        $reservoir->save();
        return redirect()->route('reservoirs.index');

    }
    
    public function edit(Reservoir $reservoir){
        return view('reservoirs.edit', ['reservoir' => $reservoir]);
    }

    
    public function update(Request $request, Reservoir $reservoir){
        $reservoir->fill($request->all());
        $reservoir->save();
        return redirect()->route('reservoirs.index');
    }

   
    public function destroy(Reservoir $reservoir){
        $reservoir->delete();
        return redirect()->route('reservoirs.index');

    }
}
