@extends('layouts.apppp')

@section('content')
<main>
<div class="container mt-5">
    <div>
        <h1><strong>Inserisci i dati del nuovo progetto</strong></h1>
    </div>
    <form action="{{route('projects.store')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="date_of_creation" class="form-label">Date of creation</label>
            <input type="date" class="form-control" name="date_of_creation" id="date_of_creation">
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" name="link" id="link">
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Created by</label>
            <input type="text" class="form-control" name="created_by" id="created_by">
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
</main>
@endsection