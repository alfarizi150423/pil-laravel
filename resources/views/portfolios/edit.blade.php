@extends('layouts.app')

@section('content')
<h1 class="mb-4">Edit Portofolio</h1>
<form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm rounded">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" name="title" id="title" value="{{ $portfolio->title }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea name="description" id="description" class="form-control" required>{{ $portfolio->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" name="image" id="image" class="form-control">
        @if ($portfolio->image)
        <p>Gambar Saat Ini:</p>
        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" width="150" class="img-fluid">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
