<?php

namespace App\Http\Controllers;

use App\Models\Camionero;
use Illuminate\Http\Request;

class CamioneroController extends Controller
{
    public function index()
    {
        $camioneros = Camionero::all();
        return view('camioneros.index', compact('camioneros'));
    }

    public function create()
    {
        return view('camioneros.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'dni' => 'required|unique:camioneros',
            'poblacion' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'salario' => 'required|numeric',
        ]);

        Camionero::create($validated);

        return redirect()->route('camioneros.index');
    }

    public function show(Camionero $camionero)
    {
        return view('camioneros.show', compact('camionero'));
    }

    public function edit(Camionero $camionero)
    {
        return view('camioneros.edit', compact('camionero'));
    }

    public function update(Request $request, Camionero $camionero)
    {
        $validated = $request->validate([
            'dni' => 'required|unique:camioneros,dni,' . $camionero->id,
            'poblacion' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'salario' => 'required|numeric',
        ]);

        $camionero->update($validated);

        return redirect()->route('camioneros.index');
    }

    public function destroy(Camionero $camionero)
    {
        $camionero->delete();
        return redirect()->route('camioneros.index');
    }
}

