<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <title>Create Blog Post</title>
    <style>
        .card-header {
            background-color: #040720;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            display: flex;
            justify-content: space-between;
        }
        .card-header h2 {
            text-align: center;
            margin: 0;
            color: #f4f6f9;
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
    </style>
</head>

<body>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h2 class="mb-0">CREATE BLOG POST</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('blog/store') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label 
                                for="title" 
                                class="form-label">Title</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="title" 
                                name="title" 
                                placeholder="Enter the title" 
                                required>
                            </div>
                            <div class="mb-3">
                                <label 
                                for="content" 
                                class="form-label">Content</label>
                                <textarea 
                                class="form-control MySummernote" 
                                id="content" 
                                name="content" 
                                rows="6" 
                                placeholder="Enter the blog content" 
                                required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input 
                                type="file" 
                                class="form-control" 
                                id="image" 
                                name="image" 
                                accept="image/*">
                            </div>
                            <div class="text-end">
                                <button 
                                type="submit" 
                                class="btn btn-info">Publish Post</button>
                            </div>
                        </form>
                    </div>
                    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $(".MySummernote").summernote();
        $('.dropdown-toggle').dropdown();
    });
</script>
                </div>
            </div>
        </div>
    </div>
</body>
</html>