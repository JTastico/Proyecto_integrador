<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndicadoresController extends Controller
{
    public function index()
    {
        return view('indicadores.index', [
            
        ]);
    }

    public function create()
    {
        return view('indicadores.create');
    }

    public function store(Request $request)
    {
        $indicador = new Indicador();
        $indicador->nombre = $request->input('indicador');
        $indicador->save();

        return redirect()->route('indicadores.index');
    }

    public function edit($id)
    {
        $indicador = Indicador::find($id);

        return view('indicadores.edit', [
            'indicador' => $indicador,
        ]);
    }

    public function update(Request $request, $id)
    {
        $indicador = Indicador::find($id);
        $indicador->nombre = $request->input('indicador');
        $indicador->save();

        return redirect()->route('indicadores.index');
    }
}

