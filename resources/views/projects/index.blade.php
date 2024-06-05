@extends('layouts.apppp')

@section('content')
<main>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Projects List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date of Creation</th>
                    <th scope="col">Link</th>
                    <th scope="col">Created By</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->date_of_creation }}</td>
                    <td><a href="{{ $project->link }}">{{ $project->link }}</a></td>
                    <td>{{ $project->created_by }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</main>
@endsection