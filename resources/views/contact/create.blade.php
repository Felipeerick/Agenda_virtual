@extends('template.layout')
@section('title', 'Criando Contato')
@section('content')

<h1>Adicionando contatos</h1>

<form action="{{ route('contacts.store') }}" method="POST" enctype='multipart/form-data'>
  @csrf

  <div class='mb-3'>
    <label for="name" class="form-label">Nome</label>
    <input type="text"  class="form-control"id='name' required name='name'>

    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id='email'  required name='email'>

    <label for="Senha" class="form-label">Senha</label>
    <input type="password" class="form-control" id='Senha'required maxlength="12" name='senha'>

    <label for="CPF" class="form-label">CPF</label>
    <input type="text" class="form-control" id='CPF' required name='cpf'>

    <label for="tel" class="form-label">Número de telefone</label>
    <input type="text" class="form-control" id='tel'  required name='tel'>

    <label for="foto" class="form-label">Foto</label>
    <input type="file"  class="form-control"id='foto' name='photo'>
    
    <hr>

    <h2>Endereço</h2>   

    <label for="Cep" class="form-label">Cep</label>
    <input type="text"  class="form-control"id='Cep' required name='Cep'>

    <label for="rua" class="form-label">Rua</label>
    <input type="rua"  class="form-control"id='rua' required name='street'>


    <label for="Bairro" class="form-label">Bairro</label>
    <input type="text" class="form-control" id='Bairro'required name='neighborhood'>

    <label for="Estado" class="form-label">Estado</label>
    <input type="text"  class="form-control"id='Estado'required name='state'>

  </div>
  <button type="submit" class="btn btn-outline-light">Cadastrar</button>
</form>

@endsection