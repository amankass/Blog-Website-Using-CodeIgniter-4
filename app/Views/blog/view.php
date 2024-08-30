<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($blog['title']) ?></title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    display: flex; /* Ensure the container uses flexbox */
}
        h1 {
            font-size: 2.5rem;
            color: #040720;
            margin-bottom: 20px;
        }

        .text-muted {
            color: #999;
        }

        img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .btn-secondary {
            background-color: #040720;
            border-color: #007bff;
            color: #f8f9fa;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn-secondary:hover {
            background-color: #0056b3;
            color: #FFA500;
            text-decoration: underline;
        }
/* Main blog content */
.col-md-8 {
    flex: 0 0 70%; /* Occupy 70% of the width */
    max-width: 70%; /* Ensure it doesn't exceed 70% */
}
        
.recommended-posts {
    flex: 1; /* Allow the section to grow to fill remaining space */
    max-width: 30%; /* Maximum width set to 30% */
    margin-left: 20px; /* Space between main content and recommended posts */
    margin-top: 3%;
}
.recommended-posts .card {
    margin-bottom: 20px; /* Space between recommended posts */
    transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for hover effects */
    display: none;
}
.recommended-posts .card:first-child,
        .recommended-posts .card:nth-child(2) {
            display: block; /* Display the first two cards */
        }

.recommended-posts .card:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
}
.recommended-posts .card img {
    transition: transform 0.3s ease; /* Smooth transition for scaling */
    height: 150px;
}

.recommended-posts .card:hover img {
    transform: scale(1.05); /* Slightly scale up the image on hover */
}
        .recommended-posts h3 {
            font-size: 1.8rem;
            color: #040720;
            margin-bottom: 15px;
            margin-left: 3%;
        }

        .recommended-posts .card {
            margin-bottom: 20px;
            width: 300px;
        }

        .navbar {
            background-color: #040720;
            padding: 8px 100px;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #f8f9fa;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: wavy;
            color: #FFA500;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Kokeb Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/blog">Blog</a>
                    </li>
                    <?php if (session()->get('logged_in')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/dashboard'); ?>">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/logout'); ?>">Logout</a>
                        </li>
                    <?php else : ?>
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
    <?php
    function character_limiter($str, $limit)
    {
        return (strlen($str) > $limit) ? substr($str, 0, $limit) . '...' : $str;
    }
    ?>
    <div class="container my-5">
        <div class="row">
            <!-- Main Blog Content -->
            <div class="col-md-8">
                <h1 class="text-center"><?= esc($blog['title']) ?></h1>
                <?php if (!empty($blog['image'])) : ?>
                    <img src="<?= base_url('uploads/' . esc($blog['image'])) ?>" alt="Blog Image" class="img-fluid mb-4">
                <?php endif; ?>
                <p class="card-text"><small>Created on: <?= esc($blog['created_at']) ?></small></p>
                <!-- Decode the content to display HTML -->
                <div class="card-text">
                    <?= htmlspecialchars_decode($blog['content']) ?>
                </div>
                <div class="text-center mt-4">
                    <a href="<?= site_url('blog') ?>" class="btn btn-secondary">Back to Blog</a>
                </div>
            </div>
            <!-- Recommended Posts Section -->
            <div class="col-md-4 recommended-posts">
                <h3>Recommended Posts</h3>
                <?php foreach ($relatedBlogs as $relatedBlog) : ?>
                    <div class="card">
                        <?php if (!empty($relatedBlog['image'])) : ?>
                            <img src="<?= base_url('uploads/' . esc($relatedBlog['image'])) ?>" class="card-img-top" alt="<?= esc($relatedBlog['title']) ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($relatedBlog['title']) ?></h5>
                            <p class="card-text"><?= esc(character_limiter($relatedBlog['content'], 100)) ?></p>
                            <a href="<?= site_url('blog/view/' . esc($relatedBlog['id'])) ?>" class="btn btn-secondary">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="text-center">
                    <button id="loadMoreBtn" class="btn btn-secondary mt-3">Load More</button>
                    <button id="showLessBtn" class="btn btn-secondary mt-3" style="display:none;">Show Less</button>
                </div>
            </div>
        </div>
    </div>

    <script>
       document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".recommended-posts .card");
    const loadMoreBtn = document.getElementById("loadMoreBtn");
    const showLessBtn = document.getElementById("showLessBtn");
    let visibleCount = 2; // Number of initially visible cards
    const increment = 2; // Number of cards to show with each click

    // Function to update the visibility of cards
    function updateCardVisibility() {
        cards.forEach((card, index) => {
            if (index < visibleCount) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }

    // Initial visibility setup
    updateCardVisibility();

    loadMoreBtn.addEventListener("click", function () {
        visibleCount += increment; // Increase visible count by the increment
        if (visibleCount >= cards.length) {
            visibleCount = cards.length; // Ensure it doesn't exceed total cards
            loadMoreBtn.style.display = "none"; // Hide "Load More" when all cards are visible
        }
        updateCardVisibility();
        showLessBtn.style.display = "inline-block"; // Show "Show Less" button
    });

    showLessBtn.addEventListener("click", function () {
        visibleCount = 2; // Reset visible count to the initial number
        updateCardVisibility();
        loadMoreBtn.style.display = "inline-block"; // Show "Load More" button again
        showLessBtn.style.display = "none"; // Hide "Show Less" button
    });
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
