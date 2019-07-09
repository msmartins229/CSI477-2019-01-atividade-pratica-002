@extends('principal')

@section('titulo','Exames')

@section('conteudo')

  <table>

    <tr>
      <th>ID</th>
      <th>Usuário</th>
      <th>Procedimento</th>
      <th>Data</th>
    </tr>

    @foreach ($tests as $t)

    <tr>
      <td><a href="{{ route('exames.show', $t->id) }}">{{$t->id}}</a></td>
      <td>{{$t->user->name}}</td>
      <td>{{$t->procedure->name}}</td>
      <td>{{$t->date}}</td>
    </tr>

    @endforeach


@endsection
