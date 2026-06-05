<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Notas::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required'
        ]);
        $nota = Notas::create($request->all());
        return response()->json($nota->fresh(), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nota = Notas::findOrFail($id);
        return response()->json($nota);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required'
        ]);

        $nota = Notas::findOrFail($id);
        $nota->update($request->all());
        return response()->json($nota->fresh());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nota = Notas::findOrFail($id);
        $nota->delete();
        return response()->json(null, 204);
    }
}
