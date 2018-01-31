<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    // action = metodo que trata uma reqisição
    public function index(){
      $cursos = ['TDD', 'Front End', 'Java','Scrum'];
      return view ('cursos', compact('cursos'));
    }
}
