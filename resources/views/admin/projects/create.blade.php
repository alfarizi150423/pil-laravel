@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buat Proyek Baru</h1>
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Proyek</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Proyek</button>
        </form>
    </div>
@endsection
