<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestamos;
use App\Models\libros;
use App\Models\clientes;

class prestamosController extends Controller
{
    //
    public function index()
    {
      $libros = libros::has('ejemplares')->get();
      $libros = $libros->pluck('nombre','id');
      $clientes = clientes::pluck('nombre','id');
      return view('prestamos.index')->with(compact('libros','clientes'));
    }
}
