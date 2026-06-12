<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotasController extends Controller
{
    public function index()
    {
        $notas = Nota::orderBy('created_at')->paginate(10);
        return view('notas', ['notas' => $notas]); /* Es un array asociativo con la clave 'notas' y el valor de la variable $notas,
que contiene todas las notas recogidas por Notas:all(); De esta forma, se envían todas las notas a la vista 'notas' a través de $notas. 
La clave del array ('notas') es el nombre con el que la vista podrá acceder a los datos. El valor ($notas) son los datos en sí.*/
    }

    public function create()
    {
        return view('crear_nota');
    }
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required'
        ]);
        Nota::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);
        return redirect('/notas');
    }
    public function destroy($id)
    {
        Nota::destroy($id);
        return redirect('/notas');
    }
    public function edit($id)
    {
        $nota = Nota::find($id);
        return view('editar_nota', compact('nota'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required'
        ]);
        $nota = Nota::find($id);
        $nota->titulo = $request->titulo;
        $nota->contenido = $request->contenido;
        $nota->save();
        return redirect('/notas');
    }

}