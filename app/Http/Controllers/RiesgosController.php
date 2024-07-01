<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riesgo;

class RiesgosController extends Controller
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
        return view('riesgos.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'denominacion' => 'required|string|max:255',
            'organizacion' => 'required|string|max:255',
            'dimensiones_seguridad' => 'required|string|max:255',
            'criterio_evaluacion' => 'required|string|max:255',
            'normas_objetivos' => 'required|array',
            'sedes' => 'required|array',
            'procesos' => 'required|array',
            'cuestionario' => 'required|string',
        ]);

        $riesgo = Riesgo::create([
            'denominacion' => $request->denominacion,
            'organizacion' => $request->organizacion,
            'dimensiones_seguridad' => $request->dimensiones_seguridad,
            'criterio_evaluacion' => $request->criterio_evaluacion,
            'normas_objetivos' => $request->normas_objetivos,
            'sedes' => $request->sedes,
            'procesos' => $request->procesos,
            'cuestionario' => $request->cuestionario,
        ]);

        return redirect()->route('riesgos.index')->with('success', 'Riesgo creado exitosamente.');
    }



    public function show(Riesgo $riesgo)
    {
        return view('riesgos.show', compact('riesgo'));
    }


    public function destroy($id)
    {
        $riesgo = Riesgo::find($id);
        $riesgo->delete();
        return redirect()->route('riesgos.index')->with('success', 'Riesgo eliminado exitosamente.');
    }

}