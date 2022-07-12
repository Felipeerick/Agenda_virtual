@extends('template.layout')
@section('title', $title)
@section('content')

 <h1>Editando {{ $user->name }}</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST" enctype='multipart/form-data'>
 @csrf

 <div class='mb-3'>

<label for="name" class="form-label">Nome</label>
<input type="text"  class="form-control"id='name' name='name'>

<label for="email" class="form-label">Email</label>
<input type="text" class="form-control" id='email' name='email'>

<label for="Senha" class="form-label">Senha</label>
<input type="password" class="form-control" id='Senha' name='senha'>

<label for="CPF" class="form-label">CPF</label>
<input type="text" class="form-control" id='CPF' name='cpf'>

<label for="tel" class="form-label">Número de telefone</label>
<input type="text" class="form-control" id='tel' name='tel'>

<label for="foto" class="form-label">Foto</label>
<input type="file"  class="form-control"id='foto' name='photo'>
 
     <hr>

  <h2>Endereço</h2>   
<label for="Cep" class="form-label">Cep</label>
<input type="text"  class="form-control"id='Cep' name='Cep'>

<label for="rua" class="form-label">Rua</label>
<input type="rua"  class="form-control"id='rua' name='street'>


<label for="Bairro" class="form-label">Bairro</label>
<input type="text" class="form-control" id='Bairro' name='neighborhood'>

<label for="Estado" class="form-label">Estado</label>
<input type="text"  class="form-control"id='Estado' name='state'>

</div>

<button type="submit">Atualizar</button>
</form>


@endsection