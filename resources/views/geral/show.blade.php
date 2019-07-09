@extends('principal')

@section('titulo', 'Exibir Procedimentos')

@section('conteudo')

  <h1>Procedimento: {{$procedure->nome}}</h1>

  <p>Id: {{$procedure->id}}</p>
  <p>Nome: {{$procedure->name}}</p>
  <p>Preço: {{$procedure->price}}</p>
  <p>Usuário: {{$procedure->user_id}}</p>

  <!-- Voltar para a lista de procedimentos //-->
  <a href="{{ route('geral.index') }}">Voltar</a>

  <!-- Editar o procedimentos corrente //-->
  <a href="{{ route('geral.edit', $procedure->id) }}">Editar</a>

  <!-- Excluir o procedimento corrente //-->
  <form method="post" action="{{ route('geral.destroy', $procedure->id) }}" onsubmit="return confirm('Confirma exclusão do estado?');" >

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

  </form>

@endsection
