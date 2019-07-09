@extends('principal')

@section('titulo','Novo Usuário')

@section('conteudo')

<form method="post" action="{{ route('admin.store')}}">

  @csrf

  <!-- <p>Id: <input type="text" name="id"> </p> -->
  <p>Nome: <input type="text" name="name"></p>
  <p>Email: <input type="text" name="email"></p>
  <p>Senha: <input type="password" name = "password"></p>
  <p>Tipo: <input type="text" name="type"></p>

  <input type="submit" name="btnSalvar" value="Incluir">

</form>
@endsection
