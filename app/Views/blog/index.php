<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Blog Posts</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f4f4f4;
        }

        .slideshow-controls {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.slideshow-controls button {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 18px;
}



.blog-container .card.hidden {
        display: none;
    }

.top-section img{
    height: 540px;
}



.slideshow-controls button:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
        .middle-section {
          text-align: center;
          padding: 40px;
          background-color: #f9f9f9; 
        }
        .middle-section .text-overlay {
          max-width: 800px; 
          margin: 0 auto;
        }
        .middle-section h1 {
          font-size: 3rem;
          font-weight: bold;
          color: #040720;
          margin-bottom: 10px;
          text-align: center;
        }
        .middle-section p {
          font-size: 1.2rem;
          color: #040720;
          color: #666;
          text-align: center;
        }
        .blog-container {
          display: flex;
          grid-template-columns: repeat(4, 1fr); 
          gap: 10px; 
          padding: 10px;
        }
        .card {
          background-color: #fff;
          border-radius: 8px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
          overflow: hidden;
          transition: transform 0.2s ease-in-out;
          display: flex;
          flex-direction: column;
        }
        .card:hover {
          transform: translateY(-5px);
        }
        .card img {
          width: 100%;
          height: 200px; 
          object-fit: cover; 
        }
        .card-content {
          padding: 15px;
          flex: 1; 
          display: flex;
          flex-direction: column;
        }
        .card-text {
          font-size: 1rem;
          color: #040720;
          overflow: hidden;
          display: -webkit-box; 
          -webkit-line-clamp: 3; 
          -webkit-box-orient: vertical; 
                }
        .read-more {
          font-size: 1rem;
          color: #007bff; 
          text-decoration: none;
          margin-top: 10px;
          display: inline-block;
        }
        .read-more:hover {
          text-decoration: wavy;
          color: #ffa500; 
        }
        .blog-container .card img {
          -webkit-transform: scale(1);
          transform: scale(1);
          -webkit-transition: 0.3s ease-in-out;
          transition: 0.3s ease-in-out;
        }
        .blog-container .card:hover img {
          -webkit-transform: scale(1.1);
          transform: scale(1.1);
        }
        .card-title {
          font-size: 2rem;
          margin-bottom: 10px;
          color: #FFA500;
        }
        .card-description {
          font-size: 1.3rem;
          color: #040720;
          margin-bottom: 15px;
        }
        .card-author {
          font-size: 0.9rem;
          color: #040720;
        }
        .btn-info {
        background-color: #040720; 
        border-color: #007bff; 
        color: #f8f9fa; 
        }
        .btn-info:hover {
        background-color: #040720;
        color: #FFA500;
        text-decoration: wavy;
        text-decoration: underline; 
        }
        .navbar {
            background-color: #040720; 
        }
        .navbar-brand {
            font-size: 24px; 
            font-weight: bold;
            color: #f8f9fa;
        }
        .nav-link {
            color: white;
            font-weight: 500; 
        }
        .navbar-brand:hover{
            text-decoration: wavy;
            color: #FFA500;
        }
        .nav-link:hover {
            text-decoration: wavy;
            color: #FFA500; 
        }
        .card-text small {
            color:#007bff; 
        }
        @media (max-width: 1024px) {
            .card {
                flex: 1 1 calc(45% - 20px); 
            }
        }
        @media (max-width: 768px) {
            .card {
                flex: 1 1 100%; 
            }
            .middle-section h1 {
                font-size: 2rem; 
            }
            .middle-section p {
                font-size: 1rem; 
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Kokeb Tech</a>
            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/blog">Blog</a>
                    </li>
                    <?php if (session()->get('logged_in')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/dashboard'); ?>">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/logout'); ?>">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/register'); ?>">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth'); ?>">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="top-section">
    <img src="/src/A3.jpg" alt="Top Image" class="img-fluid" id="slideshow-image">
    <div class="slideshow-controls">
        <button id="prev" onclick="changeImage(-1)">&#10094;</button>
        <button id="next" onclick="changeImage(1)">&#10095;</button>
    </div>
</div>

<script>
    const images = [
        "/src/A1.jpg",
        "/src/A2.jpg",
        "/src/A3.jpg",
        "/src/A4.jpg" // Make sure this image exists
    ];
    let currentIndex = 0;
    function changeImage(direction) {
        currentIndex = (currentIndex + direction + images.length) % images.length;
        document.getElementById('slideshow-image').src = images[currentIndex];
    }
    // Optional: Automatic slideshow
    setInterval(() => changeImage(1), 5000); // Change image every 5 seconds
</script>

<div class="middle-section">
    <div class="text-overlay">
        <h1>Welcome to KokebTech Blog</h1>
        <p>Sharing ideas, thoughts, and stories</p>
    </div>
</div>

<div class="container my-5">
<div class="blog-container">
    <?php $counter = 0; // Initialize a counter ?>
    <?php foreach ($blogs as $blog): ?>
        <?php $counter++; // Increment the counter ?>
        <div class="card <?= $counter > 3 ? 'hidden' : '' ?>"> <!-- Hide cards after the 3rd post -->
            <?php if (!empty($blog['image'])): ?>
                <img src="<?= base_url('uploads/' . esc($blog['image'])) ?>" alt="Blog Image" class="card-img-top">
            <?php endif; ?>
            <div class="card-content">
                <p class="card-text">
                    <small>Created on: <?= esc($blog['created_at']) ?></small>
                </p>
                <h2 class="card-title"><?= esc($blog['title']) ?></h2>
                
                <!-- Decode the content to display HTML -->
                <div class="card-text">
                    <?= htmlspecialchars_decode($blog['content']) ?>
                </div>
                
                <a href="<?= site_url('blog/view/' . $blog['id']) ?>" class="btn btn-info">Read More</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</div>

<div class="text-center mt-4">
    <button id="load-more" class="btn btn-info">Load More</button>
</div>


<script>
    document.getElementById('load-more').addEventListener('click', function () {
        const hiddenCards = document.querySelectorAll('.blog-container .card.hidden');
        let count = 0;

        hiddenCards.forEach(card => {
            if (count < 3) { // Adjust this number to reveal a different number of cards at a time
                card.classList.remove('hidden');
                count++;
            }
        });

        // Hide the "Load More" button if there are no more hidden cards
        if (document.querySelectorAll('.blog-container .card.hidden').length === 0) {
            this.style.display = 'none';
        }
    });
</script>

</body>
</html>
