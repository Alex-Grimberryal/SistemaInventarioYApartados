<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use Illuminate\Http\Request;

class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ambientes = Ambiente::all();
        return view('ambientes.index', compact('ambientes'));
    }

    public function create()
    {
        return view('ambientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ambiente = new Ambiente();
        $ambiente->ambiente = $request->input('ambiente');
        $ambiente->pabellon = $request->input('pabellon');
        $ambiente->piso = $request->input('piso');
        $ambiente->save();

        return redirect()->route('ambientes.index')->with('success', 'Ambiente creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ambiente = Ambiente::findOrFail($id);
        return view('ambientes.show', compact('ambiente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ambiente = Ambiente::findOrFail($id);
        return view('ambientes.edit', compact('ambiente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ambiente = Ambiente::findOrFail($id);
        $ambiente->ambiente = $request->input('ambiente');
        $ambiente->pabellon = $request->input('pabellon');
        $ambiente->piso = $request->input('piso');
        $ambiente->save();

        return redirect()->route('ambientes.index')->with('success', 'Ambiente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ambiente = Ambiente::findOrFail($id);
        $ambiente->delete();

        return redirect()->route('ambientes.index')->with('success', 'Ambiente eliminado exitosamente');
    }
}
