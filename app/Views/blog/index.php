<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
      body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

/* Top Section */
.top-section {
  position: relative;
  text-align: center;
  color: white;
  height: 500px; /* Increased height */
}

.top-section img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(70%);
}

/* Middle Section */
.middle-section {
  text-align: center;
  padding: 40px;
  background-color: #f9f9f9; /* Background color to differentiate this section */
}

.middle-section .text-overlay {
  max-width: 800px; /* Adjust the maximum width as needed */
  margin: 0 auto;
}

.middle-section h1 {
  font-size: 3rem;
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

/* Blog Cards Section */
.blog-container {
  display: flex;
  grid-template-columns: repeat(4, 1fr); /* Four columns */
  gap: 10px; /* Space between cards */
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
  height: 500px; /* Adjust height */
  object-fit: cover; 
}

.card-content {
  padding: 15px;
  flex: 1; /* Adjust flex for responsiveness */
  display: flex;
  flex-direction: column;
}

/* Read More Link */
.read-more {
  font-size: 1rem;
  color: #007bff; /* Blue color */
  text-decoration: none;
  margin-top: 10px;
  display: inline-block;
}

.read-more:hover {
  text-decoration: wavy;
  color: #ffa500; /* Darker blue on hover */
}

/* Hover Effect for Blog Images */
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
  font-size: 1.5rem;
  margin-bottom: 10px;
}

.card-description {
  font-size: 1rem;
  color: #040720;
  margin-bottom: 15px;
}

.card-author {
  font-size: 0.9rem;
  color: #040720;
}

/* Media Queries for Responsiveness */
@media (max-width: 1024px) {
  .blog-container {
    grid-template-columns: repeat(3, 1fr); /* Three columns for smaller screens */
  }
}

@media (max-width: 768px) {
  .blog-container {
    grid-template-columns: repeat(2, 1fr); /* Two columns for tablets */
  }
}

@media (max-width: 480px) {
  .blog-container {
    grid-template-columns: 1fr; /* Single column for mobile devices */
  }
  .middle-section h1 {
    font-size: 2rem; /* Adjust font size for smaller screens */
  }
  .middle-section p {
    font-size: 1rem; /* Adjust font size for smaller screens */
  }
  .card img {
    height: 200px; /* Adjust image height for smaller screens */
  }
  .card-content {
    padding: 10px; /* Adjust padding for smaller screens */
  }
}

    </style>
</head>
<body>
    <!-- Top Section -->
    <div class="top-section">
        <img src="/src/blogpic1.jpg" alt="Top Image" class="img-fluid">
    </div>

    <!-- Middle Section -->
    <div class="middle-section">
        <div class="text-overlay">
            <h1>Welcome to KokebTech Blog</h1>
            <p>Sharing ideas, thoughts, and stories</p>
        </div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Blog Posts</h1>
        <div class="text-center mb-4">
            <a href="<?= site_url('blog/create') ?>" class="btn btn-primary">Create New Post</a>
        </div>
        <div class="blog-container">
            <?php foreach ($blogs as $blog): ?>
                <div class="card">
                    <?php if (!empty($blog['image'])): ?>
                        <img src="<?= base_url('uploads/' . esc($blog['image'])) ?>" alt="Blog Image" class="card-img-top">
                    <?php endif; ?>
                    <div class="card-content">
                        <p class="card-text"><small class="text-muted">Created on: <?= esc($blog['created_at']) ?></small></p>
                        <h2 class="card-title"><?= esc($blog['title']) ?></h2>
                        <p class="card-text"><?= esc($blog['content']) ?></p>
                        <a href="<?= site_url('blog/view/' . $blog['id']) ?>" class="btn btn-info">View</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
