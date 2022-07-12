@extends('template.layout')
@section('title', 'Entre na sua conta!')
@section('content')


<div class='form-login'>
  
<h2 class='titulo-login text-center'>Entre em sua conta para salvar seus contatos!!</h2>

<form action="" method="get" class="w-50">

  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
<div class="mb-3 row">
  <div>
      <input type="text" class="form-control" name='email' id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <div>
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control" name='password'id="inputPassword">

      <button type='submit' class='btn btn-primary mt-3'> Enviar</button>
    </div>

  </div>
  </div>
</form>

@endsection