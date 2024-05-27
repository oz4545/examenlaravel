<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;
use App\Models\Camionero;

class AsignarPaquetesController extends Controller
{
    public function create()
    {
        $paquetes = Paquete::all();
        $camioneros = Camionero::all();
        return view('camioneros.asignar_paquetes', compact('paquetes', 'camioneros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paquete_id' => 'required|exists:paquetes,id',
            'camionero_id' => 'required|exists:camioneros,id',
        ]);

        $camionero = Camionero::find($request->camionero_id);
        $camionero->paquetes()->attach($request->paquete_id);

        return redirect()->route('asignar_paquetes.create')->with('success', 'Paquete asignado correctamente.');
    }
}
