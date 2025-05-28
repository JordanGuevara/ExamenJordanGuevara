<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use Illuminate\Http\Request;

class ComputadorController extends Controller
{
    public function index()
    {
        $computadores = Computador::all();
        return view('computador.index', compact('computadores'));
    }

    public function create()
    {
        return view('computador.create');
    }

    public function store(Request $request)
    {
        Computador::create($request->all());
        return redirect()->route('computador.index');
    }

    public function show($id)
    {
        $computador = Computador::findOrFail($id);
        return view('computador.edit', compact('computador'));
    }

    public function update(Request $request, $id)
    {
        $computador = Computador::findOrFail($id);
        $computador->update($request->all());
        return redirect()->route('computador.index');
    }

    public function destroy($id)
    {
        Computador::destroy($id);
        return redirect()->route('computador.index');
    }

    public function buscar(Request $request)
    {
        $computador = Computador::find($request->id);
        return view('computador.edit', compact('computador'));
    }
    
}
