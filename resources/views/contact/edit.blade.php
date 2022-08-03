@extends('template.layout')
@section('title', $title)
@section('content')

<h1>Editando {{ $contacts->name }}</h1>

<form action="{{ route('contacts.update', $contacts->id) }}" method="POST" enctype='multipart/form-data'>
  @csrf
  @method('PUT')
  <div class='mb-3'>

    <label for="name" class="form-label">Nome</label>
    <input type="text"  class="form-control"id='name' value='{{ $contacts->name }}' required name='name'>

    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id='email' value='{{ $contacts->email }}' required name='email'>

    <label for="CPF" class="form-label">CPF</label>
    <input type="text" class="form-control" id='CPF'value='{{ $contacts->cpf }}' required  name='cpf'>

    <label for="tel" class="form-label">Número de telefone</label>
    <input type="text" class="form-control" id='tel' value='{{ $contacts->tel }}' required name='tel'>

    <label for="foto" class="form-label">Foto</label>
    <input type="file"  class="form-control"id='foto' name='photo'>
    <hr>

    <h2>Endereço</h2>   

    <label for="Cep" class="form-label">Cep</label>
    <input type="text"  class="form-control"id='Cep' value='{{ $contacts->cep }}' required name='cep'>

    <label for="rua" class="form-label">Rua</label>
    <input type="rua"  class="form-control"id='rua' value='{{ $contacts->street }}' required name='street'>


    <label for="Bairro" class="form-label">Bairro</label>
    <input type="text" class="form-control" id='Bairro' value='{{ $contacts->neighborhood }}' required name='neighborhood'>

    <label for="Estado" class="form-label">Estado</label>
    <input type="text"  class="form-control"id='Estado' value='{{ $contacts->state }}' required  name='state'>

  </div>

  <button type="submit" class="btn btn-outline-light">Atualizar</button>
</form>


@endsection