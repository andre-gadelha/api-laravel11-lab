<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividade;

class AtividadeController extends Controller
{
    //
    public function index(Request $request)
    {
        return Atividade::all();
    }


    public function store(Request $request)
    {
        //dd($request->all());
        return response()->json(Atividade::create($request->all()), status:201);
  
    }

    public function show($id)
    {
        return Atividade::find($id);
    }

    public function update($id, Request $request)
    {
        //dd($request)->all();
        $atividade = Atividade::find($id);
        
        $atividade->update($request->all());
        
        return $atividade;
    }

    public function destroy($id)
    {
        //dd($request)->all();
        Atividade::destroy($id);
        
        return response()->noContent();
    }

}
