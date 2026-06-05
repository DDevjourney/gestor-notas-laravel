<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index()
    {
        $notas = Notas::all();
        return view('notas', ['notas' => $notas]);
    }

    public function create()
    {
        return view('crear_nota');
    }

}