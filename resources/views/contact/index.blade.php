@extends('template.layout')
@section('title', 'listagem de Clientes')
@section('content')

    <h1 class='mb-3'>Listagem de clientes</h1>

    @if(session()->has('create'))
        <span class="d-block p-2  mb-2 alert alert-success">{{ session()->get('create') }}</span>
    @endif

    @if(session()->has('remove'))
        <span class="d-block p-2  mb-2 alert alert-danger">{{ session()->get('remove') }}</span>
    @endif
                                                                
    @if(session()->has('edit'))
        <span class="d-block p-2  mb-2 alert alert-warning">{{ session()->get('edit') }}</span>
    @endif

    <a href="{{ route('contacts.create') }}" class="btn btn-outline-light mb-3"> Criar Contato Novo </a>                      
                
    <table class="table table-dark">
        <thead>
            <tr>                    
                <th scope="col">Foto</th>                  
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">cpf</th>
                <th scope="col">telefone</th>
                <th scope='col'>Ações</th>
            </tr>
        </thead>         
        <tbody>
            @foreach($contactSeparate as $contact)
                <tr>   
                    @if($contact->photo)
                        <td scope="row"><img class='rounded-circle' src="{{asset('/storage/'. $contact->photo)}}" width='50px' height="50px" alt=""> </td>
                    @else   
                        <td scope="row"><img class='rounded-circle' src="{{asset('/storage/profile/avatar.jpeg')}} " width='50px' height="50px" alt=""> </td>
                    @endif
                        <td scope="row">{{ $contact->name }}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->cpf}}</td>
                        <td>{{$contact->tel}}</td>
                        <td><a href="{{ route('contacts.idGet', $contact->id) }}" class="btn btn-warning">Visualizar</a> </td> 
                </tr>                      
            @endforeach
        </tbody>
    </table>
    <div class='justify-content-center pagination'>
       {{$contactSeparate->links('pagination::bootstrap-4')}}
    </div>

@endsection