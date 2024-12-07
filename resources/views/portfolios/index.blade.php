@extends('layouts.app')

@section('content')
<h1 class="mb-4">Daftar Portofolio</h1>
<form action="{{ route('portfolios.index') }}" method="GET" class="mb-4">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari Portofolio..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Cari</button>
    </div>
</form>
<a href="{{ route('portfolios.create') }}" class="btn btn-primary mb-3">Tambah Portofolio</a>
<div class="row">
    @foreach ($portfolios as $portfolio)
    <div class="col-md-4 mb-3">
        <div class="card">
            @if($portfolio->image)
            <img src="{{ asset('storage/' . $portfolio->image) }}" class="card-img-top" alt="{{ $portfolio->title }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $portfolio->title }}</h5>
                <p class="card-text">{{ Str::limit($portfolio->description, 100) }}</p>
                <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-4">
    {{ $portfolios->links() }}
</div>
@endsection
