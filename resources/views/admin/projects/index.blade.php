@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Proyek</h1>
        <a href="{{ route('projects.create') }}" class="btn btn-success">Buat Proyek Baru</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            @if ($project->image_path)
                                <img src="{{ asset('storage/' . $project->image_path) }}" alt="Project Image" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
