<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <style>
       /* Global Styles */
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
    justify-content: space-around;
    padding: 20px;
    flex-wrap: wrap;
}

.card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 28%; /* Adjust width for responsiveness */
    margin: 10px; /* Adjust margin for responsiveness */
    overflow: hidden;
    transition: transform 0.2s ease-in-out;
    min-height: 400px; /* Adjust height for responsiveness */
    display: flex;
    flex-direction: column;
}

.card:hover {
    transform: translateY(-5px);
}

.card img {
    width: 100%;
    height: 300px;
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
    color: #FFA500; /* Darker blue on hover */
}

/* Hover Effect for Blog Images */
.blog-container .card img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
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
@media (max-width: 768px) {
    .card {
        width: 45%; /* Adjust width for tablets and larger mobile devices */
    }
}

@media (max-width: 480px) {
    .card {
        width: 100%; /* Adjust width for smaller mobile devices */
        margin: 20px 0; /* Adjust margin for smaller mobile devices */
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
        <img src="/src/blogpic1.jpg" alt="Top Image">
    </div>
<!-- Middle Section -->
<div class="middle-section">
        <div class="text-overlay">
            <h1>Welcome to KokebTech Blog</h1>
            <p>Sharing ideas, thoughts, and stories</p>
        </div>
    </div>
    <!-- Blog Cards Section -->
    <div class="blog-container">
        <!-- Card 1 -->
        <div class="card">
            <img src="/src/blogpic2.jpg" alt="Blog Image 1">
            <div class="card-content">
                <p class="card-author">Created by KokebTech</p>
                <h2 class="card-title">Blog one</h2>
                <p class="card-description">This is a brief description of the first blog post. It's an overview of the content that will be discussed in the article.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="card">
        <img src="/src/blogpic3.jpg" alt="Blog Image 2">
            <div class="card-content">
                <p class="card-author">Created by KokebTech</p>
                <h2 class="card-title">Blog Two</h2>
                <p class="card-description">This is a brief description of the second blog post. It provides a glimpse into the topic covered in the article.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="card">
        <img src="/src/blogpic4.jpg" alt="Blog Image 3">
            <div class="card-content">
            <p class="card-author">Created by KokebTech</p>
                <h2 class="card-title">Blog Three</h2>
                <p class="card-description">This is a brief description of the third blog post. It highlights the main points of the article.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </div>
  
    <div class="blog-container">
        <!-- Card 4 -->
        <div class="card">
        <img src="/src/blogpic5.jpg" alt="Blog Image 1">
            <div class="card-content">
            <p class="card-author">Created by KokebTech</p>
                <h2 class="card-title">Blog Foure</h2>
                <p class="card-description">This is a brief description of the first blog post. It's an overview of the content that will be discussed in the article.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="card">
        <img src="/src/blogpic6.jpg" alt="Blog Image 2">
            <div class="card-content">
            <p class="card-author">Created by KokebTech</p>
                <h2 class="card-title">Blog Five</h2>
                <p class="card-description">This is a brief description of the second blog post. It provides a glimpse into the topic covered in the article.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="card">
        <img src="/src/blogpic7.jpg" alt="Blog Image 3">
            <div class="card-content">
                <p class="card-author">Created by KokebTech</p>
                <h2 class="card-title">Blog Six</h2>
                <p class="card-description">This is a brief description of the third blog post. It highlights the main points of the article.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </div>
</body>
</html>
