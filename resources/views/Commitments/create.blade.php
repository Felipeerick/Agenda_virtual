@extends('template.layout')
@section('title', 'Compromissos')
@section('content')

<div class='container'>
    <h1 class="mt-5 mb-4 text-black text-center mb-5">Crie o seu compromisso</h1> 
    <div class="row form-create">
        <div class="col-sm-3">
            <div class="card ">         
                <div class="card-body color-kanban-compromissos">
                    <form action="{{ route('commitments.store') }}" method="post" >
                        @csrf
                        <input type="date" name="date_commitments" required>
                        <input type="text" class="mb-3 mt-3" name='name' maxlength='19' width='30px' placeholder="Nome do compromisso" >
                        <input type="text" name="description" maxlength='24' placeholder='Descrição do compromisso'>
                        <button type="submit" class='btn btn-dark mt-3'>Salvar</button>
                    </form>
                </div>
            </div>
        </div>       
    </div>
</div>

@endsection