@extends('template.layout')
@section('title', 'Compromissos')
@section('content')


<div class='container'>
   <h1 class="mt-5 mb-4 text-black">Compromissos</h1> 

    <a href="{{ route('commitments.create') }}" class='btn btn-outline-light'>Crie a tua anotação</a> 
        <div class="row mt-3">
            @foreach ($commitments as $commitment)
                <div class="col-sm-3">
                    <div class="card">
                        <span class="text-center"> {{$commitment->date_commitments}} </span>
                        <div class="card-body color-kanban-compromissos">
                            <h6 class="card-title">{{$commitment->name}}</h6>
                            <h6 class="card-title">{{$commitment->description}}</h6>
                            <a href="{{route('commitments.edit')}}" class="btn btn-warning">Editar</a>
                            <a href="{{route('commitments.remove')}}" class='btn btn-danger'>Remover</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
   </div>

@endsection