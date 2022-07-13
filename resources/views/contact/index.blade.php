@extends('template.layout')
@section('title', 'listagem de Clientes')
@section('content')

            <h1>Listagem de clientes</h1>

            <a href="{{ route('contacts.create') }}" class="btn btn-outline-light mb-3"> Criar Contato Novo </a>

            <form action="{{ route('contacts.index') }}" method="GET" class="mb-3">
                                    <div class="input-group">
                                          <input type="search" class="form-control rounded" name='search' placeholder="Search" aria-label="Search" aria-describedby="Search-addon">
                                          <button type="submit" class='btn btn-primary ml-2'>Procurar</button>
                                    </div>
                              </form>
                
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
                  
                    @foreach($contacts as $contact)
                    <tr>
                      
                    @if($contact->photo)
                    <td scope="row"><img class='rounded-circle' src="{{asset('/storage/'. $contact->photo)}}" width='50px' height="50px" alt=""> </td>
                    @else   
                    <td scope="row"><img class='rounded-circle' src="{{asset('/storage/profile/avatar.jpeg')}} " width='50px' height="50px" alt=""> </td>
                    @endif

                    <td scope="row">{{$contact->id}}</td>
                      <td>{{ $contact->name }}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->cpf}}</td>
                      <td>{{$contact->tel}}</td>
                      <td><a href="{{ route('contacts.idGet', $contact->id) }}" class="btn btn-warning">Visualizar</a> </td> 
                  </tr>

                  @endforeach
             </tbody>
            </table>

            <div class='justify-content-center pagination'>
               {{$contacts->links('pagination::bootstrap-4')}}
            </div>

@endsection