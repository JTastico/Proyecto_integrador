<?php

namespace App\Http\Controllers;

use App\Models\Riesgos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RiesgosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riesgos = Riesgos::all();
        return view('riesgos.index', compact('riesgos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riesgos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            // otros campos de validación
        ]);

        Riesgos::create($request->all());
        return redirect()->route('riesgos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Riesgos  $riesgos
     * @return \Illuminate\Http\Response
     */
    public function show(Riesgos $riesgos)
    {
        return view('riesgos.show', compact('riesgo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Riesgos  $riesgos
     * @return \Illuminate\Http\Response
     */
    public function edit(Riesgos $riesgos)
    {
        return view('riesgos.edit', compact('riesgo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Riesgos  $riesgos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riesgos $riesgos)
    {
        $request->validate([
            'nombre' => 'required',
            // otros campos de validación
        ]);

        $riesgo->update($request->all());
        return redirect()->route('riesgos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Riesgos  $riesgos
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
    }
}