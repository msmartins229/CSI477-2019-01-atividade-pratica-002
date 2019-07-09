@extends('principal')

@section('titulo','Procedimentos')

@section('conteudo')

    <h1>Inserir Procedimentos</h1>

    <form action="{{route('geral.store')}}" method="post">
        @csrf
        <p>Nome: <input type="text" name = "name"></p>
        <p>Preço:<input type="text" name = "price"></p>
        <p>Usuário: </p>
          <select name="user_id">
            @foreach($user as $u)
              <option value="{{$u->id}}">{{$u->name}}</option>
            @endforeach
          </select>
          <br>
        <input type="submit" name="btnSalvar" value="Incluir">
    </form>
@endsection
