<?php

namespace App\Http\Controllers;
use App\Models\Equipamiento;
use Illuminate\Http\Request;

class EquipamientosController extends Controller
{
    public function index()
    {

        return view('equipamientos.index');
    }

    public function create()
    {
        return view('equipamientos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        // Save the data to the database
        $equipment = new Equipment();
        $equipment->name = $validatedData['name'];
        $equipment->description = $validatedData['description'];
        $equipment->save();
        // Redirect to the index page after successful submission
        
        return redirect()->route('equipamientos.index')->with('success', 'Equipment added successfully.');
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
