@extends('principal')

@section('titulo', 'Editar Usuários')

@section('conteudo')

  <form method="post" action="{{ route('admin.update', $user->id) }}">

    @csrf
    @method('PATCH')

    <p>Id: <input type="text" name="id" value="{{$user->id}}"> </p>
    <p>Nome: <input type="text" name="name"value="{{$user->name}}"></p>
    <p>Email: <input type="text" name="email"value="{{$user->email}}"></p>
    <p>Senha: <input type="password" name = "password" value="{{$user->password}}"></p>
    <p>Tipo: <input type="text" name="type" value="{{$user->type}}" readonly="true"></p>



    <input type="submit" name="btnSalvar" value="Editar">

  </form>

@endsection
