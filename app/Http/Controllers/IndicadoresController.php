<?php

namespace App\Http\Controllers;

use App\Models\Indicador;
use Illuminate\Http\Request;

class IndicadoresController extends Controller
{
    public function index(Request $request)
    {
        $query = Riesgo::query();

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->filled('empresa')) {
            $query->where('empresa', $request->empresa);
        }

        if ($request->filled('norma')) {
            $query->where('norma', $request->norma);
        }

        $riesgos = $query->get();

        return view('riesgos.index', compact('riesgos'));
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




    public function edit(Request $request, $id)
    {
        $request->validate([
            'denominacion_indicador' => 'required|string|max:255',
            'organizacion' => 'required|string|max:255',
            'sede' => 'required|string|max:255',
            'frecuencia_medicion' => 'required|string|max:255',
            'fecha_inicio_medicion' => 'required|date',
            'fecha_fin_medicion' => 'required|date',
            'responsable_seguimiento' => 'required|string|max:255',
            'responsable_medicion' => 'required|string|max:255',
        ]);

        $indicador = Indicador::find($id);
        $indicador->denominacion_indicador = $request->input('denominacion_indicador');
        $indicador->organizacion = $request->input('organizacion');
        $indicador->sede = $request->input('sede');
        $indicador->frecuencia_medicion = $request->input('frecuencia_medicion');
        $indicador->fecha_inicio_medicion = $request->input('fecha_inicio_medicion');
        $indicador->fecha_fin_medicion = $request->input('fecha_fin_medicion');
        $indicador->responsable_seguimiento = $request->input('responsable_seguimiento');
        $indicador->responsable_medicion = $request->input('responsable_medicion');
        $indicador->save();

        return redirect()->route('indicadores.index')->with('success', 'Indicador actualizado exitosamente.');
    }




    
    public function destroy($id)
    {
        $riesgo = Riesgo::findOrFail($id);
        $riesgo->delete();

        return redirect()->route('riesgos.index')->with('success', 'Riesgo eliminado con éxito');
    }
}