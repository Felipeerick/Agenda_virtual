@extends('template.layout')
@section('title', 'listagem de usuários')
@section('content')

            <h1>Listagem de usuários</h1>

                
            <table class="table table-dark">
           <thead>
               <tr>                    
                    <th scope="col">Foto</th>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">cpf</th>
                    <th scope="col">telefone</th>
                </tr>
            </thead>

             <tbody>
                  
                    @foreach($users as $user)
                    <tr>
                      
                    @if($user->photo)
                    <td scope="row"><img src="storage('/storage/'. $user->photo)" alt=""> </td>
                    @else   
                    <td scope="row"><img src="storage('/storage/profile/avatar.jpeg')" alt=""> </td>
                    @endif

                    <td scope="row">$user->id</td>
                      <td>$user->name</td>
                      <td>$user->email</td>
                      <td>$user->cpf</td>
                      <td>$user->tel</td>
                      <td><a href="{{ route('users.idGet', $user-id) }}" class="btn btn-warning">Visualizar</a> </td> 
                  </tr>

                  @endforeach
             </tbody>
            </table>

@endsection