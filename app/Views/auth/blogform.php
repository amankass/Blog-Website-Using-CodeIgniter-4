<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Create Blog Post</title>
    <style>
        /* Form container styling */
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-custom-primary {
            background-color: #040720; /* Background color */
            border-color: #007bff; /* Border color */
            color: #f8f9fa; /* Text color */
            transition: color 0.3s ease-in-out; /* Smooth transition for text color */
        }

     /* Button hover effect */
        .btn-custom-primary:hover {
            color: #FFA500; /* Change only the text color */
            background-color: #040720; /* Keep the background color the same */
            text-decoration: wavy; /* Apply text decoration */
        }

        /* Title styling */
        .form-title {
            color: #040720; 
            margin-bottom: 20px;
            text-align: center;
        }
        .form-label{
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2 class="form-title">CREATE BLOG POST</h2>
        <form action="<?= site_url('blog/create'); ?>" method="post">
            <?= csrf_field(); ?>

            <!-- Title Field -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" required>
            </div>

            <!-- Body Field -->
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="6" placeholder="Enter the blog content" required></textarea>
            </div>
        
            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-custom-primary">Publish Post</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
