<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TratamientosController extends Controller
{
    public function index()
    {
        // Code to list all tratamientos
    }

    public function create()
    {
        // Code to show form for creating a new tratamiento
    }

    public function store(Request $request)
    {
        // Code to store a new tratamiento
    }

    public function show($id)
    {
        // Code to display a specific tratamiento
    }

    public function edit($id)
    {
        // Code to show form for editing a specific tratamiento
    }

    public function update(Request $request, $id)
    {
        // Code to update a specific tratamiento
    }

    public function destroy($id)
    {
        // Code to delete a specific tratamiento
    }

    public function planesTratamiento()
    {
        return view('tratamientos.planes-tratamiento');
    }

    public function seguimiento()
    {
        return view('tratamientos.seguimiento');
    }
}