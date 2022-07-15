@extends('template.layout')
@section('title', 'Agenda Virtual')
@section('content')
<body class='container my-5'>

  <div class='text-center'>
    <div class='d-flex justify-content-center'>
    <span class='text-light fw-bold h5 ms-1'>Agenda Virtual</span>
    </div>

  </div>
  <div class='d-flex flex-lg-row flex-column align-items-center justify-content-center mt-5'>
    <img src="{{ asset('assets/404.svg') }}" height="200px" alt="">
    <div class='text-center text-lg-start'>
      <h1 class='display-1 fw-bold mb-3 text-light'>405</h1>
      <h2 class='h2 text-light'>Perdido meu nobre?</h2>
      <p class='lead pb-3'>Você não tem acesso a essas coisas aqui não meu lindo!
      <br>
      volta pra casa 😉!</p>
      <a href="/" class='btn btn-light px-5'>Vem com o monstro</a>
    </div>

  </div>


@endsection