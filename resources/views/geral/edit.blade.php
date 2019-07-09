@extends('principal')

@section('titulo', 'Editar Procedimentos')

@section('conteudo')

  <form action="{{route('geral.update',$procedure->id)}}" method="post">
    @csrf
    @method('PATCH')

    <p>ID: <input type="text" name="id" value="{{$procedure->id}}"></p>
    <p>Nome: <input type="text" name="name" value="{{$procedure->name}}"></p>
    <p>Preço: <input type="text" name="price" value="{{$procedure->price}}"></p>
    <p>Usuário: <input type="text" name="user_id" value="{{$procedure->user_id}}"></p>

    <input type="submit" name="btnSalvar" value="Editar">

  </form>

  @endsection
