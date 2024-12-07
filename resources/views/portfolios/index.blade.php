@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Daftar Portofolio</h2>
    <form action="{{ route('portfolios.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari Portofolio..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($portfolios as $portfolio)
        <div class="col">
            <div class="card shadow-sm rounded">
                @if($portfolio->image)
                <img src="{{ asset('storage/' . $portfolio->image) }}" class="card-img-top" alt="{{ $portfolio->title }}">
                @else
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $portfolio->title }}</h5>
                    <p class="card-text">{{ Str::limit($portfolio->description, 100) }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4 text-center">
        {{ $portfolios->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
