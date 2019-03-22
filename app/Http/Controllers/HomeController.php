<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipios;
use App\Models\libros;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $libros = libros::orderBy('nombre')->paginate(20);
        return view('home')->with(compact('libros'));
    }

}
