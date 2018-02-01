<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
  private  $cursos = ['TDD', 'Front End', 'Java','Scrum'];// atributo private para poder usar 'cursos' em td pgm
    // action = metodo que trata uma reqisição
    public function index(){
      $cursos = $this->cursos;
      return view ('cursos.index', compact('cursos'));
    }

    public function show($x){ // x é a posicao do array
      $curso = $this->cursos[$x];
      return View('cursos.show', compact('curso'));// poderia ser cursos/show

    }
}
