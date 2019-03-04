<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipios;

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
        return view('home');
    }
    public function GetMunicipios($id)
    {
      $municipios = municipios::where('id_edo',$id)->select('id','nombre')->get();
      return $municipios;
    }
}
