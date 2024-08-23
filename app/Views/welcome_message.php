<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Kokeb Tech - Home</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #040720; /* Navbar background color */
        }
        .navbar-brand {
            font-size: 24px; /* Larger brand text */
            font-weight: bold;
            color: #f8f9fa;
        }
        .nav-link {
            color: white; /* Link color */
            font-weight: 500; /* Bold links */
        }
        .navbar-brand:hover{
            text-decoration: wavy;
            color: #FFA500;
        }
        .nav-link:hover {
            text-decoration: wavy;
            color: #FFA500; /* Hover color for links */
        }
        .hero {
            background-image: url('hero-bg.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .features {
            padding: 50px 0;
        }
        .feature-item {
            text-align: center;
            margin-bottom: 30px;
        }
        .feature-item i {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 20px;
        }
        .feature-item h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">Kokeb Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth/register'); ?>">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth'); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="container text-center">
            <h1>Welcome to Kokeb Tech</h1>
            <p>Your partner in innovative tech solutions</p>
            <a href="<?= site_url('auth/register'); ?>" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </div>

    <div class="features">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row">
                <div class="col-md-4 feature-item">
                    <i class="fas fa-code"></i>
                    <h3>Custom Development</h3>
                    <p>We create tailored solutions to meet your unique needs.</p>
                </div>
                <div class="col-md-4 feature-item">
                    <i class="fas fa-chart-line"></i>
                    <h3>Data Analytics</h3>
                    <p>Gain valuable insights from your data with our analytics tools.</p>
                </div>
                <div class="col-md-4 feature-item">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile Apps</h3>
                    <p>Reach your customers on the go with our mobile app development.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Kokeb Tech. All rights reserved.</p>
            <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Service</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>