<?php

Route::get('/ ola', function () { //get é uma requisição do tipo que assim q digitasa devolve uma pagina
                              // '/' = usuario digita /na barra do  navegador
                              // function = vai executar a funão
$nome = "Mimi, amor da minha vida !!!!!";
  return view('ola', compact('nome')); //compact nome = 'nome'=>$nome
                            // return = retorna algo
                            // view  = é nao uma pagina, e deve ser criada na pasta views
});
/*Route::get('/cursos', function(){
$cursos = ['TDD', 'Front End', 'Java','Scrum'];
return view('cursos', compact ('cursos'));
});*/

Route::get('/cursos', 'CursosController@index');

// exercicio 11
// os mones das classes e metodos devem ser iguais ex:Cursos
// entre colchete coloca o id ... ex x
// /cursos/1 = x= TDD
Route::get('/cursos/{x}' , 'CursosController@show');
