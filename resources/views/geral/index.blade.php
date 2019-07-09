@extends('principal')

@section('titulo','Procedimentos')

@section('conteudo')

  <a href="{{ route('geral.create') }}">Inserir</a>

  <table>

    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Usuário</th>
    </tr>

    @foreach ($procedures as $p)

    <tr>
      <td>{{$p->id}}</td>
      <td><a href="{{route('geral.show', $p->id)}}">{{$p->name}}</a></td>
      <td>{{$p->price}}</td>
      <td>{{$p->user->name}}</td>
      <td><a href="{{route('geral.show', $p->id)}}">Exibir</a></td>
    </tr>

    @endforeach

  </table>

@endsection
