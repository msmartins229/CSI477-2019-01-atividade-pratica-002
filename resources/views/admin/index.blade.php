@extends('principal')

@section('titulo','Usuários')

@section('conteudo')

  <a href="{{ route('admin.create') }}">Inserir</a>

  <table>

    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Password</th>
      <th>Tipo</th>
    </tr>

    @foreach ($user as $u)

    <tr>
      <td><a href="{{ route('admin.show', $u->id) }}">{{$u->id}}</a></td>
      <td>{{$u->name}}</td>
      <td>{{$u->email}}</td>
      <td>{{$u->Password}}</td>
      <td>{{$u->type}}</td>
    </tr>

    @endforeach

</table>
@endsection
