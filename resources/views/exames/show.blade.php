@extends('principal')

@section('titulo', 'Exibir Exame')

@section('conteudo')

<h1>Exame: {{ $test->procedure_id }}</h1>

<p>ID: {{ $test->id }}</p>
<p>User_id: {{ $test->user->name }}</p>
<p>Procedure_id: {{ $test->procedure->name}}</p>
<p>Data {{$test -> date }}</p>

  <br>
  <br>

<!-- Voltar para a lista de estados //-->
<a href="{{ route('exames.index') }}">Voltar</a>

<!-- Editar a cidade corrente //-->
<a href="{{ route('exames.edit', $test->id) }}">Editar</a>

<!-- Excluir a cidade corrente //-->
<form method="post" action="{{ route('exames.destroy', $test->id) }}" onsubmit="return confirm('Confirma exclusão do exame?');" >

  @csrf
  @method('DELETE')
  <br>
  <br>
  <input type="submit" value="Excluir">

</form>



@endsection
