<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(to right, #ff7f50, #ff4500);
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
        <a class="navbar-brand" href="index.html">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/portofolio">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="profile.html">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <h1>About Me</h1>
        <p>Learn more about who I am and what I do</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/250" alt="Profile Picture" class="img-fluid rounded-circle mb-3">
            </div>
            <div class="col-md-8">
                <h2>John Doe</h2>
                <p>
                    Hi, I'm John Doe, a passionate web developer with expertise in creating modern, responsive websites. 
                    I specialize in front-end development with a strong focus on user experience. With over 5 years of 
                    experience, I've worked on diverse projects ranging from small business websites to large-scale applications.
                </p>
                <h4>Skills:</h4>
                <ul>
                    <li>HTML, CSS, JavaScript</li>
                    <li>Bootstrap, React, Vue.js</li>
                    <li>PHP, MySQL</li>
                </ul>
                <h4>Hobbies:</h4>
                <p>Photography, Traveling, and Reading</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container text-center">
        <p>&copy; 2024 My Portfolio. All rights reserved.</p>
        <div>
            <a href="#" class="text-white me-3">Twitter</a>
            <a href="#" class="text-white">LinkedIn</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
