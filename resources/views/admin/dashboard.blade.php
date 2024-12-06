@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard Admin</h1>
        <p>Selamat datang, {{ Auth::user()->name }}!</p>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Anda sedang login sebagai {{ Auth::user()->role ?? 'User' }}</p>
        <a href="{{ route('projects.index') }}" class="btn btn-primary">Kelola Proyek</a>
    </div>
@endsection
