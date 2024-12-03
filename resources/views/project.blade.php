<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(to right, #28a745, #20c997);
            color: white;
            text-align: center;
            padding: 100px 20px;
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
        <a class="navbar-brand" href="/portofolio">My Portfolio</a>
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
        <h1>TUGAS PEMBUATAN WEBSITE</h1>
        <p>Daftar project yang telah saya kerjakan selama belajar.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Projects List</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Project</th>
                        <th>Keterangan</th>
                        <th>Mata Kuliah</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tugas 1 PBWD</td>
                        <td>Membuat Tampilan Website kantor dinas yang ada di sumut</td>
                        <td>Pemrograman Berbasis Web Dasar</td>
                        <td>27-03-2024</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>UTS PBWD</td>
                        <td>Melakukan Pengamatan Dan Mendesain Sistem Berbasis Web Menggunakan HTML DAN CSS3</td>
                        <td>Pemrograman Berbasis Web Dasar</td>
                        <td>03-05-2024</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>QUIZ PBWD</td>
                        <td>Membuat website pemutaran lagu menggunakan bahasa pemrograman PHP versi 8</td>
                        <td>Pemrograman Berbasis Web Dasar</td>
                        <td>21-06-2024</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>UAS PBWD</td>
                        <td>Membuat website Peminjaman buku Pada Sebuah Perpustakaan</td>
                        <td>Pemrograman Berbasis Web Dasar</td>
                        <td>24-06-2024</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Project E-Commerce</td>
                        <td>Membuat Online shop Berbasis Website</td>
                        <td>E-Commerce</td>
                        <td>28-12-2023</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Project PTPN 4</td>
                        <td>Membuat Tampilan Web Info Magang</td>
                        <td>Kerja Praktik</td>
                        <td>01-09-2024</td>
                        <td>Completed</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Tambah Project Baru</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="/submit_project" method="POST">
                    <div class="mb-3">
                        <label for="projectName" class="form-label">Nama Project</label>
                        <input type="text" class="form-control" id="projectName" name="project_name" placeholder="Masukkan nama project" required>
                    </div>
                    <div class="mb-3">
                        <label for="projectDesc" class="form-label">Deskripsi Project</label>
                        <textarea class="form-control" id="projectDesc" name="project_desc" rows="3" placeholder="Masukkan deskripsi project" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Mata Kuliah</label>
                        <input type="text" class="form-control" id="course" name="course" placeholder="Masukkan mata kuliah terkait" required>
                    </div>
                    <div class="mb-3">
                        <label for="completionDate" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="completionDate" name="completion_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Completed">Completed</option>
                            <option value="Ongoing">Ongoing</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Tambah Project</button>
                </form>
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
