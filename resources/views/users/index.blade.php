@extends('template.layout')
@section('title', 'listagem de usuários')
@section('content')

            <h1>Listagem de usuários</h1>

                
            <table>
           <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>cpf</th>
                    <th>telefone</th>
                    <th>Foto</th>
                </tr>
            </thead>

             <tbody>
                  
                    @foreach($users as $user)
                    <tr>
                      
                    @if($user->photo)
                    <td><img src="storage('/storage/'. $user->photo)" alt=""> </td>
                    @else   
                    <td><img src="storage('/storage/profile/avatar.jpeg')" alt=""> </td>
                    @endif

                    <td>$user->id</td>
                      <td>$user->name</td>
                      <td>$user->email</td>
                      <td>$user->cpf</td>
                      <td>$user->tel</td>
                      <td> <a href="#">Visualizar</a> </td> 
                  </tr>

                  @endforeach
             </tbody>
            </table>

@endsection