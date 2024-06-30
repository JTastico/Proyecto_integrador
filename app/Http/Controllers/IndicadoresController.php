<?php

namespace App\Http\Controllers;

use App\Models\Indicador;
use Illuminate\Http\Request;

class IndicadoresController extends Controller
{
    public function index()
    {
        $indicadores = Indicador::all();
        return view('indicadores.index', compact('indicadores'));
    }

    public function create()
    {
        $indicadores = Indicador::all();
        return view('indicadores.create', compact('indicadores'));
    }

    public function store(Request $request)
    {
            $indicador = new Indicador;
            $indicador->denominacion = $request->input('denominacion');
            $indicador->cargar_datos = $request->input('cargar_datos') == 'no' ? 0 : 1;
            $indicador->indicadores_creados = $request->input('indicadores_creados');
            $indicador->organizacion = $request->input('organizacion');
            $indicador->sede = $request->input('sede');
            $indicador->frecuencia = $request->input('frecuencia');
            $indicador->fecha_inicio = $request->input('fecha_inicio');
            $indicador->fecha_fin = $request->input('fecha_fin');
            $indicador->responsable_seguimiento = $request->input('responsable_seguimiento');
            $indicador->responsable_medicion = $request->input('responsable_medicion');
            $indicador->resultados_visibles = $request->input('resultados_visibles');
            $indicador->save();
            return redirect()->route('indicadores.index')->with('success', 'Indicador creado exitosamente.');
    }

    public function show($id)
    {
        $indicador = Indicador::find($id);
        return view('indicadores.show', ['indicador' => $indicador]);
    }

    public function edit($id)
    {
        $indicador = Indicador::find($id);
        return view('indicadores.edit', ['indicador' => $indicador]);

    }
}