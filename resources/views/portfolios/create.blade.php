@extends('layouts.app')

@section('content')
<h1>Tambah Portofolio</h1>
<form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Judul:</label>
    <input type="text" name="title" id="title" required>
    <br>

    <label for="description">Deskripsi:</label>
    <textarea name="description" id="description" required></textarea>
    <br>

    <label for="image">Gambar:</label>
    <input type="file" name="image" id="image">
    <br>

    <button type="submit">Simpan</button>
</form>
@endsection
