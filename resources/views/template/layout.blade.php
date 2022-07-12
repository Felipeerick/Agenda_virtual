a<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        </head>
    <body> 
        <nav>
          
             @if(Auth::user())
            <li>
            <img src="{{ storage('/storage/'. $user->photo) }}" alt="">
            <a href="#" class="btn btn-primary">{{Auth::user()->name}}</a>
            </li>
            
                @if(Auth::user()->is_admin == 1)
                <a href="#">dashboard</a>
                @endif
             
            @else

             <li>
            <a href="/login" class="btn btn-primary">Entrar</a>
            <a href="/register" class="btn btn-primary">Cadastrar</a>
            </li>
            @endif
        </nav>
      @yield('content')

    </body>
</html>
