<?php

namespace App\Http\Controllers;
use App\Http\Controllers\NotasController;
use Illuminate\Http\Request;
use App\Models\Notas;

abstract class Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required'
        ]);
        Notas::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);
        return redirect('/notas');
    }
    public function destroy($id)
    {
        Notas::destroy($id);
        return redirect('/notas');
    }
    public function edit($id)
    {
        $nota = Notas::find($id);
        return view('editar_nota', compact('nota'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required'
        ]);
        $nota = Notas::find($id);
        $nota->titulo = $request->titulo;
        $nota->contenido = $request->contenido;
        $nota->save();
        return redirect('/notas');
    }
}
