<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <header class="bg-dark text-white p-3">
        <div class="container">
            <h1>Website Portofolio</h1>
            <nav>
                <a href="{{ route('portfolios.index') }}" class="text-white">Home</a> |
                <a href="{{ route('portfolios.create') }}" class="text-white">Tambah Portofolio</a>
            </nav>
        </div>
    </header>
    <main class="container py-4">
        @yield('content')
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} Website Portofolio</p>
    </footer>
</body>
</html>
