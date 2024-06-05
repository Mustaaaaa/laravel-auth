@extends('layouts.apppp')

@section('content')
<main>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Dettagli del Progetto
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Titolo:</h5>
                <p class="mb-4 text-center">{{ $project->title }}</p>

                <h5 class="card-title">Descrizione:</h5>
                <p class="card-text">{{ $project->description }}</p>

                <h5 class="card-title">Data di Creazione:</h5>
                <p class="card-text">{{ $project->date_of_creation }}</p>

                <h5 class="card-title">Link:</h5>
                <p class="card-text"><a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a></p>

                <h5 class="card-title">Creato da:</h5>
                <p class="card-text">{{ $project->created_by }}</p>
                <div class="row justify-content-center">
                    <a href="{{ route('projects.edit',$project) }}" class="btn btn-success m-2 col-1">Modifica</a>
                    <form action="{{route('projects.destroy', $project)}}" method="POST" class="col-1">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger m-2">Elimina</button>
                    </form>
                    <a href="{{ route('projects.index')}}" class="btn btn-primary m-2 col-1">Indietro</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection