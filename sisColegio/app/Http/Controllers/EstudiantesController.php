<?php

namespace sisColegio\Http\Controllers;

use Illuminate\Http\Request;
use sisColegio\Http\Requests;
use sisColegio\Articulo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;//para subir imagen desde la pc del usuario
use sisColegio\Http\Requests\EstudianteFormRequest;
use DB;

class EstudiantesController extends Controller
{
  public function index(Request $request){
    return view('estudiantes.index');
  }
}
