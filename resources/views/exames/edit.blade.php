@extends('principal')

@section('titulo', 'Editar Exames')

@section('conteudo')

  <form method="post" action="{{ route('exames.update', $test->id) }}">

    @csrf
    @method('PATCH')

    <p>Usuário: <input type = "text" name = "user_id" value="{{$test->user->name}}"></p>
    <p>Procedimento: <input type="text" name="procedure_id" value="{{$test->procedure->name}}"></p>
    <p>Data: <input type="date" name="date" value="{{$test->date}}"></p>


    <input type="submit" name="btnSalvar" value="Editar">

  </form>

</table>
  <!-- Editar o exame atual //-->
  <a href="{{ route('exames.edit', $test->id) }}">Editar</a>

  <!-- Excluir o exame atual //-->
  <form method="post" action="{{ route('exames.destroy', $test->id) }}" onsubmit="return confirm('Confirma exclusão do exame?');" >

    @csrf
    @method('DELETE')
    <br>
    <br>
    <input type="submit" value="Excluir">

</form>

@endsection
