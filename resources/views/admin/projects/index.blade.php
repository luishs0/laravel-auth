@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h3 class="text-center text-white mb-4">Progetti</h3>
        <div class="">
            <div class="d-flex justify-content-center">
                <table class="table ms_table-projects text-white">
                    <thead class="">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Data di creazione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody class="p-3">
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->created_at }}</td>
                                <td class="">
                                    <a class="btn btn-success btn-crud-1 mt-1"
                                        href="{{ route('admin.projects.show', $project->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning btn-crud-2 mt-1" href="">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a class="btn btn-danger btn-crud-3 mt-1" href="">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
