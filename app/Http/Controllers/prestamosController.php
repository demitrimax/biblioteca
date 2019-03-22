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
      $carrito = carrito::where('user_id',Auth::user()->id)
                          ->where('estatus', null)
                        ->get();
      return view('prestamos.index')->with(compact('libros','clientes','carrito'));
    }

    public function asignar(Request $request)
    {

      $rules = [
        'cliente'   => 'required',
      ];

      $messages = [
          'cliente.required'    => 'Seleccione un cliente.',

      ];

      $this->validate($request, $rules, $messages);

      $input = $request->all();

      $carrito = carrito::where('user_id',Auth::user()->id)
                          ->where('estatus', null)
                          ->get();
      if($carrito->count()==0)
      {
        Alert::error('Carrito Vacio');
        return back();
      }
      else {
        foreach($carrito as $carr)
        {
          $carr->cliente_id = $input['cliente'];
          $carr->estatus = 1;
          $carr->save();
        }
        Alert::success('Prestamos Asignados');
      }

      return back();
    }

    public function devolver($id)
    {
      $carrito = carrito::find($id);
      if (!empty($carrito))
      {
        $carrito->estatus = 2;
        $carrito->save();
        $carrito->delete();
        Alert::success('Libro devuelto correctamente');
      }
      else
      {
        Alert::error('Libro no encontrado para devolución');
      }

      return back();
    }
}
