@extends('template.layout')
@section('title', 'Compromissos')
@section('content')

<div class='container'>
    <h1 class="mt-1 mb-4 text-black">Compromissos</h1> 
    <a href="{{ route('commitments.create') }}" class='btn btn-outline-light'>Crie a tua anotação</a> 
    <div class="row mt-3">
        @foreach ($commitmentsSeparate as $commitment)
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <span class="text-center">Data: {{$commitment->date_commitments}} </span>
                    <div class="card-body color-kanban-compromissos">
                        <h6 class="card-title">Evento: {{PHP_EOL .$commitment->name}}</h6>
                        <h6 class="card-title mt-4">{{$commitment->description}}</h6>
                        <div class="d-flex gap-3">
                            <a href="{{route('commitments.edit', $commitment->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('commitments.remove', $commitment->id)}}" method='POST'>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </div>                
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class='justify-content-center pagination mt-2'>
   {{$paginate->links('pagination::bootstrap-4')}}
</div>
@endsection
