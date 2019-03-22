<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
Use Alert;
use App\Models\prestamos;
use App\Models\libros;
use App\Models\clientes;
use App\Models\carrito;
use Auth;

class prestamosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->middleware('permission:prestamos-list');
        $this->middleware('permission:prestamos-create', ['only' => ['create','store']]);
        $this->middleware('permission:prestamos-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:prestamos-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
      $libros = libros::has('ejemplares')->get();
      $libros = $libros->pluck('nombre','id');
      $clientes = clientes::pluck('nombre','id');
      //$prestamos = carrito::where('cliente', )
      $carrito = carrito::where('user_id',Auth::user()->id)->get();
      return view('prestamos.index')->with(compact('libros','clientes','carrito'));
    }
}