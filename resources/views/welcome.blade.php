<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(to right, #007bff, #6610f2);
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .portfolio-item {
            transition: transform 0.3s;
        }
        .portfolio-item:hover {
            transform: scale(1.05);
        }
        footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/portofolio">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="/project">Projects</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <h1>SELAMAT DATANG DI HALAMAN PORTOFOLIO TUGAS PBWL SAYA</h1>
        <a href="#portfolio" class="btn btn-primary">Sedikit Tugas Yang saya Buat</a>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">About Me</h2>
        <p class="text-center">Saya seorang Mahasiswa yang sedang belajar Membuat WEB Menggunakan LARAVEL dan bootstrap 5</p>
    </div>
</section>

<section id="portfolio" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Project Saya</h2>
        <div class="row">
            <hr>
            <div class="col-md-4 mb-4">
                <div class="card portfolio-item">
                    <img src="https://via.placeholder.com/350" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <a href="/profile" class="btn btn-primary">Description of Project 1.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card portfolio-item">
                    <img src="https://via.placeholder.com/350" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <a href="/profile" class="btn btn-primary">Description of Project 1.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card portfolio-item">
                    <img src="https://via.placeholder.com/350" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <a href="/profile" class="btn btn-primary">Description of Project 1.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container text-center">
        <p>&copy; 2024 My Portfolio. All rights reserved.</p>
        <div>
            <a href="#" class="text-white me-3">INSTAGRAM</a>
            <a href="#" class="text-white">FACEBOOK</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
