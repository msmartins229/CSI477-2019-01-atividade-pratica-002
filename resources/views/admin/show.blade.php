@extends('principal')

@section('titulo', 'Exibir Usuário')

@section('conteudo')

<h1>Usuário: {{ $user->id }}</h1>

<p>ID: {{ $user->id }}</p>
<p>Nome: {{ $user->name }}</p>
<p>Email: {{ $user->email}}</p>
<p>Password: {{$user -> password }}</p>
<p>Tipo: {{$user -> type}}</p>

  <br>
  <br>

<!-- Voltar para a lista de estados //-->
<a href="{{ route('admin.index') }}">Voltar</a>

<!-- Editar a cidade corrente //-->
<a href="{{ route('admin.edit', $user->id) }}">Editar</a>

<!-- Excluir a cidade corrente //-->
<form method="post" action="{{ route('admin.destroy', $user->id) }}" onsubmit="return confirm('Confirma exclusão do usuário?');" >

  @csrf
  @method('DELETE')
  
  <input type="submit" value="Excluir">

</form>



@endsection
