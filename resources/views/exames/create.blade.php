@extends('principal')

@section('titulo', 'Solicitar Exame')

@section('conteudo')
  <br>
  <form  action="{{route('exames.store')}}" method="post">

    @csrf

    <!-- <p>Paciente: <input type="text" name="user_id"></p>
    <p>Id do procedimento: <input type="text" name="procedure_id"></p> -->
    <select name="user_id">

          @foreach($user as $u)
              @if ($u->type == 3){
                  <option value="{{$u->id}}">{{$u->name}}</option>
              }@endif
          @endforeach

    </select>
    <br>
    <br>
    <select name="procedure_id">
      @foreach($procedure as $p)
      <option value="{{$p->id}}">{{$p->name}}</option>
      @endforeach
    </select>

    <p>Data: <input type="date" name="date"></p>

    <input type="submit" name="btnSalvar" value="Incluir">

  </form>



@endsection
