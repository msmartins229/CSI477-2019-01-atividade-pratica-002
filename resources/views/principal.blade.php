<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'PetShop')</title>
  </head>
  <body>
    <!-- Exibir mensagens -> campo:mensagem //-->
    @if ( Session::has('mensagem'))
      <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif

    <!-- Links - menu lateral //-->
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="{{route('geral.index')}}">Geral</a></li>
        <li><a href="/paciente">Paciente</a></li>
        <li><a href="{{route('admin.index')}}">Administração</a></li>
        <li><a href="/welcome">About</a></li>
    <!-- Conteúdo - parte central //-->
    @yield('conteudo')

  </body>
</html>
