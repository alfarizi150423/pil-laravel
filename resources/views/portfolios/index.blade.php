@extends('layouts.app')

@section('content')
<h1>Portfolios</h1>
<a href="{{ route('portfolios.create') }}">Tambah Portofolio</a>
<ul>
    @foreach ($portfolios as $portfolio)
        <li>
            <h3>{{ $portfolio->title }}</h3>
            <p>{{ $portfolio->description }}</p>
            @if($portfolio->image)
                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" width="150">
            @endif
        </li>
    @endforeach
</ul>
@endsection
