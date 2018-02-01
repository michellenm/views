@extends('layouts.master')

@section('titulo', 'Listagem dos cursos')

@section('conteudo')
      <h1>Cursos</h1>
      <ul class="list-group">
        @foreach ($cursos as $curso)
          <li class="list-group-item">
            <a href="/cursos/{{ $loop->index }}">
            {{ $curso }}
            </a>
          </li>
        @endforeach
      </ul>
@endsection
