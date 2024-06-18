<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index()
    {
        $documents = Documento::all();

        return view('documentos.index', ['documents' => $documents]);
    }

    public function create()
{
    return view('documentos.create');
}

public function store(Request $request)
{
    $document = Documento::create($request->all());

    return redirect()->route('documentos.show', $document->id);
}

public function show($id)
{
    $document = Documento::find($id);

    return view('documentos.show', ['document' => $document]);
}

public function edit($id)
{
    $document = Documento::find($id);

    return view('documentos.edit', ['document' => $document]);
}

public function update(Request $request, $id)
{
    $document = Documento::find($id);
    $document->update($request->all());

    return redirect()->route('documentos.show', $document->id);
}

public function destroy($id)
{
    $document = Documento::find($id);
    $document->delete();

    return redirect()->route('documentos.index');
}
}