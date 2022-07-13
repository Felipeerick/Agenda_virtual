@extends('template.layout')
@section('title', 'Compromissos')
@section('content')


<div class='container'>
   <h1 class="mt-5 mb-4 text-black">Compromissos</h1> 

    <a href="{{ route('commitments.create') }}" class='btn btn-outline-light'>Crie a tua anotação</a> 
        <div class="row mt-3">
            @foreach ($contacts as $contact)
                <div class="col-sm-3">
                    <div class="card container-compromissos ">
                           <span class="text-center"> {{$contact->date_commitments}} </span>
                        <div class="card-body">
                            <h6 class="card-title">{{$contact->name}}</h6>
                            <h6 class="card-title">{{$contact->description}}</h6>
                            <a href="#" class="btn btn-warning">Editar</a>
                            <a href="#" class='btn btn-danger'>Remover</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
   </div>

@endsection