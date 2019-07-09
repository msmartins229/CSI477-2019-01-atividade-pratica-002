@extends('principal')

@section('titulo','Área do Paciente')

@section('conteudo')

<br>
<br>
<p><a href="{{route('nPaciente')}}">Novo Paciente:  </a></p>
<p><a href="{{route('exames.create')}}">Incluir Exames:  </a></p>
<p><a href="{{route('exames.index')}}">Listar Exames: </a></p>

@endsection
