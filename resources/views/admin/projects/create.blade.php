@extends('layouts.admin')

@section('content')
    <div class="container text-white mt-3">
        <h1>Nuovo progetto</h1>

        <div class="row">
            <div class="col-10">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="title">Name</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea type="text" id="description" name="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
