@extends('template.welcome')
@section('title', 'welcome')
@section('content')


<div class='text-center center'>
  
   
    <h1 class='text-light mt-5'>Bem vindo a Sua agenda virtual</h1>
    <div class='mt-3' >
      <a href="/register" class='me-3 text-decoration-none pe-3 btn btn-outline-light'>Cadastre-se</a>
      <a href="/login" class='text-decoration-none btn btn-outline-light'>Faça login</a>
    </div>
   </div>
   


@endsection