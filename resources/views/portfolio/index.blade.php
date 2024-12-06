<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <!-- Menggunakan CDN Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-image {
            background-image: url('https://via.placeholder.com/1920x500');
            background-size: cover;
            background-position: center;
            height: 500px;
        }
        
        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-image d-flex justify-content-center align-items-center text-center text-white">
        <div class="hero-text">
            <h1 class="display-3 fw-bold">Selamat datang di Portofolio Saya</h1>
            <p class="lead">Lihat karya-karya terbaik saya dan bagaimana saya dapat membantu proyek Anda berkembang.</p>
        </div>
    </section>

    <!-- Tentang Saya -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Tentang Saya</h2>
            <p class="lead text-center">Saya seorang developer web dengan pengalaman lebih dari 5 tahun. Saya berfokus pada pengembangan aplikasi web yang responsif dan inovatif. Terhubung dengan saya untuk berbicara lebih lanjut tentang proyek Anda.</p>
        </div>
    </section>

    <!-- Proyek -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Proyek Terbaru</h2>
            <div class="row">
                <!-- Menampilkan proyek dari database -->
                @foreach ($projects as $project)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <!-- Gambar proyek -->
                            <img src="{{ asset('storage/'.$project->image) ?? 'https://via.placeholder.com/350x200' }}" class="card-img-top" alt="{{ $project->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonial Carousel -->
    <section id="testimonials" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Apa Kata Mereka?</h2>
            <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <p class="lead">"Kerja dengan Anda luar biasa! Proyek saya selesai lebih cepat dari yang saya harapkan."</p>
                                <p><strong>- John Doe, Klien</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <p class="lead">"Pengalaman luar biasa! Profesional dan sangat memuaskan."</p>
                                <p><strong>- Jane Smith, Klien</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <p class="lead">"Solusi yang Anda berikan sangat tepat dan efisien. Terima kasih!"</p>
                                <p><strong>- Alice Brown, Klien</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Kontak</h2>
            <p class="text-center">Hubungi saya melalui email di <a href="mailto:email@domain.com">email@domain.com</a> atau isi formulir kontak di bawah ini.</p>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-12 mb-3">
                        <textarea class="form-control" rows="4" placeholder="Pesan" required></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} Portofolio Saya</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
