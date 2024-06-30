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
        return view('indicadores.create');
    }

    public function store(Request $request)
    {
            $indicador = new Indicador;
            $indicador->denominacion = $request->input('denominacion');
            $indicador->cargar_datos = $request->input('cargar_datos');
            $indicador->indicadores_creados = $request->input('indicadores_creados');
            $indicador->organizacion = $request->input('organizacion');
            $indicador->sede = $request->input('sede');
            $indicador->normas = $request->input('normas');
            $indicador->resultado_min = $request->input('resultado_min');
            $indicador->resultado_max = $request->input('resultado_max');
            $indicador->unidad_valor = $request->input('unidad_valor');
            $indicador->frecuencia = $request->input('frecuencia');
            $indicador->fecha_inicio = $request->input('fecha_inicio');
            $indicador->fecha_fin = $request->input('fecha_fin');
            $indicador->responsable_seguimiento = $request->input('responsable_seguimiento');
            $indicador->responsable_medicion = $request->input('responsable_medicion');
            $indicador->resultados_visibles = $request->input('resultados_visibles');
            $indicador->save();
            return redirect()->route('indicadores.index')->with('success', 'Indicador creado exitosamente.');
    }
}