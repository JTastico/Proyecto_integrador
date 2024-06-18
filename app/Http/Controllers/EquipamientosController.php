<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipamientosController extends Controller
{
    public function index()
    {
        $equipments = Equipamiento::all();

        return view('equipamientos.index', ['equipments' => $equipments]);
    }

    public function create()
    {
        return view('equipamientos.create');
    }

    public function store(Request $request)
    {
        $equipment = Equipamiento::create($request->all());

        return redirect()->route('equipamientos.show', $equipment->id);
    }

    public function show($id)
    {
        $equipment = Equipamiento::find($id);

        return view('equipamientos.show', ['equipment' => $equipment]);
    }

    public function edit($id)
    {
        $equipment = Equipamiento::find($id);

        return view('equipamientos.edit', ['equipment' => $equipment]);
    }

    public function update(Request $request, $id)
    {
        $equipment = Equipamiento::find($id);
        $equipment->update($request->all());

        return redirect()->route('equipamientos.show', $equipment->id);
    }

    public function destroy($id)
    {
        $equipment = Equipamiento::find($id);
        $equipment->delete();

        return redirect()->route('equipamientos.index');
    }
}
