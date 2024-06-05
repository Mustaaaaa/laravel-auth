@extends('layouts.apppp')

@section('content')
<main>
<div class="container mt-5">
    <div>
        <h1><strong>Modifica i dati del progetto: {{$project->title}}</strong></h1>
    </div>
    <form action="{{route('projects.update', $project)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$project->description}}">
        </div>
        <div class="mb-3">
            <label for="date_of_creation" class="form-label">Date of creation</label>
            <input type="date" class="form-control" name="date_of_creation" id="date_of_creation" value="{{$project->date_of_creation}}">
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" name="link" id="link" value="{{$project->link}}">
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Created by</label>
            <input type="text" class="form-control" name="created_by" id="created_by" value="{{$project->created_by}}">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
</main>
@endsection