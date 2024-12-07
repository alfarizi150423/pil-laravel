@extends('layouts.app')

@section('content')
<h1 class="mb-4">Tambah Portofolio</h1>
<form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm rounded">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul portofolio" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea name="description" id="description" class="form-control" placeholder="Masukkan deskripsi portofolio" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
