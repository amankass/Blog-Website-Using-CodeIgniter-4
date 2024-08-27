<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Edit Blog Post</title>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark">
                        <h2 class="mb-0">EDIT BLOG POST</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('blog/update/' . $blog['id']) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>

                            <!-- Title Field -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?= esc($blog['title']) ?>" required>
                            </div>

                            <!-- Content Field -->
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="6" required><?= esc($blog['content']) ?></textarea>
                            </div>

                            <!-- Current Image Display -->
                            <div class="mb-3">
                                <label class="form-label">Current Image</label><br>
                                <?php if (!empty($blog['image'])): ?>
                                    <img src="<?= base_url('uploads/' . esc($blog['image'])) ?>" alt="Current Blog Image" class="img-fluid" style="max-width: 100%; height: auto;">
                                <?php else: ?>
                                    <p>No image uploaded.</p>
                                <?php endif; ?>
                            </div>

                            <!-- Image Upload Field -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload New Image (optional)</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>

                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-warning">Update Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>