@extends('template.layout')
@section('title', 'Cadastro de usuários')
@section('content')

<h1>Cadastro de usuário</h1>

<h2>Dados Pessoais</h2>

<form action="{{ route('users.store') }}" method="POST" enctype='multipart/form-data'>
 @csrf
 
<label for="name">Nome</label>
<input type="text" id='name' name='name'>

<label for="email">Email</label>
<input type="text" id='email' name='email'>

<label for="Senha">Senha</label>
<input type="text" id='Senha' name='senha'>

<label for="CPF">CPF</label>
<input type="text" id='CPF' name='cpf'>

<label for="tel">Número de telefone</label>
<input type="text" id='tel' name='tel'>

<label for="foto">Foto</label>
<input type="file" id='foto' name='photo'>
 
     <hr>

  <h2>Endereço</h2>   
<label for="Cep">Cep</label>
<input type="text" id='Cep' name='Cep'>

<label for="rua">Rua</label>
<input type="rua" id='rua' name='street'>


<label for="Bairro">Bairro</label>
<input type="text" id='Bairro' name='neighborhood'>

<label for="Estado">Estado</label>
<input type="text" id='Estado' name='state'>


</form>

@endsection