@extends('template.layout')
@section('title', 'listagem de Clientes')
@section('content')

            <h1>Listagem de clientes</h1>

                
            <table class="table table-dark">
           <thead>
               <tr>                    
                    <th scope="col">Foto</th>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">cpf</th>
                    <th scope="col">telefone</th>
                    <th scope='col'>Ações</th>
                </tr>
            </thead>

             <tbody>
                  
                    @foreach($users as $user)
                    <tr>
                      
                    @if($user->photo)
                    <td scope="row"><img class='rounded-circle' src="{{asset('/storage/'. $user->photo)}}" width='50px' height="50px" alt=""> </td>
                    @else   
                    <td scope="row"><img class='rounded-circle' src="{{asset('/storage/profile/avatar.jpeg')}} " alt=""> </td>
                    @endif

                    <td scope="row">{{$user->id}}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->cpf}}</td>
                      <td>{{$user->tel}}</td>
                      <td><a href="{{ route('users.idGet', $user->id) }}" class="btn btn-warning">Visualizar</a> </td> 
                  </tr>

                  @endforeach
             </tbody>
            </table>

@endsection