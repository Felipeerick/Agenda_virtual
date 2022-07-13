<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="{{ asset('assets/css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>@yield('title')</title>
        </head>
    <body class="fundo container"> 
        <nav class='text-end py-3 container'>
              
            
            @if(Auth::user())
            
            <li class="d-flex sm-3 naveg">
            <a href="#" class="tag btn btn-outline-light ">{{Auth::user()->name}}</a>
            <a href="{{ route('contacts.index') }}" class="tag btn btn-outline-light ">Contatos</a>
             
            <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                          <button type="submit" class="tag btn btn-outline-light" >Sair</button>                         
                                        </form>
            </li>

                @if(Auth::user()->is_admin == 1)
                <a href="#">dashboard</a>
                @endif
             
            @else

           
            <a href="/login" class="btn btn-outline-light mx-3">Entrar</a>
            <a href="/register" class="btn btn-outline-light">Cadastrar</a>
            
            @endif
        </nav>
      @yield('content')

    </body>
</html>
