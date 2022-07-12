@extends('template.layout')
@section('title', 'Cadastro de cliente')
@section('content')
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<h2 class="mb-4">Coloque aqui as informações do seu cliente :}</h2>

<h4>Dados Pessoais</h4>

<form action="{{ route('register') }}" method="POST" enctype='multipart/form-data'>
 @csrf

 <div class='mb-3'>

<label for="name" class="form-label">Nome</label>
<input type="text"  class="form-control"id='name' name='name'>

<label for="email" class="form-label">Email</label>
<input type="text" class="form-control" id='email' name='email'>

<label for="Senha" class="form-label">Senha</label>
<input type="password" class="form-control" id='Senha' name='password' minlength="8">

<label for="Senha" class="form-label">Confirme sua senha</label>
<input type="password" class="form-control" id='Senha' name='password_confirmation'  minlength="8">

<label for="foto" class="form-label">Escolha uma foto para o perfil</label>
<input type="file" class="form-control" id='foto' name='photo'>

<button type="submit" class='btn btn-outline-light mt-3'> {{ __('Cadastrar') }}</button>

</div>
</form>

@endsection
