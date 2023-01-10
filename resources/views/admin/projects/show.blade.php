@extends('layouts.admin')

@section('content')
    <div class="container text-center mt-4">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <span>{{ $project->created_at }}</span>
    </div>
@endsection
