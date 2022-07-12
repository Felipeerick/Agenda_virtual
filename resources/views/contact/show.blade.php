@extends('template.layout')
@section('title', 'listagem de Contatos')
@section('content')

<h1> Detalhe do usuário {{ $contacts->name }}</h1>

                
<table class="table table-dark">
<thead>
    <tr>
        
        <th scope="col">Foto</th>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">cpf</th>
        <th scope="col">telefone</th>
        <th scope="col" colspan="2">Ações</th>

    </tr>
</thead>

 <tbody>
      
        <tr>

        @if($contacts->photo)
        <td scope="row"><img class='rounded-circle' src="{{asset('/storage/'. $contacts->photo)}}" width='50px' height='50px'alt=""> </td>
        @else   
        <td scope="row"><img  class='rounded-circle'src="{{asset('/storage/profile/avatar.jpeg')}}" alt=""> </td>
        @endif

        <td scope="row">{{$contacts->id}}</td>
          <td>{{$contacts->name}}</td>
          <td>{{$contacts->email}}</td>
          <td>{{$contacts->cpf}}</td>
          <td>{{$contacts->tel}}</td>
          <td><a href="{{ route('contacts.edit', $contacts->id) }}" class="btn btn-warning">Editar</a> </td> 
          <td>
            <form action="{{ route('contacts.remove', $contacts->id) }}" method='POST'>
            @csrf
            @method('DELETE')

               <button type="submit" class='btn btn-danger'>remover</button>
            </form> 
          </td> 

      </tr>

 </tbody>
</table>

@endsection