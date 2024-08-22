<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">User Dashboard</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                Welcome, <?= esc($user_name); ?>!
                            </div>

                            <h5 class="text-center fw-bold">USER DETAIL</h5>

                            <h5 class="mt-4">Profile Picture</h5>
                                <?php if (!empty($avatar)): ?>
                                <img src="<?= base_url('uploads/' . esc($avatar)); ?>" 
                                alt="Profile Picture" 
                                class="img-fluid rounded-circle" 
                                style="width: 100px; height: 100px;">
                                <?php else: ?>
                                <p>No profile picture uploaded.</p>
                                <?php endif; ?>


                            <div class="list-group mb-4">
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-3 fw-bold">User ID:</div>
                                        <div class="col-9"><?= esc($user_id); ?></div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-3 fw-bold">Name:</div>
                                        <div class="col-9"><?= esc($user_name); ?></div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-3 fw-bold">Email:</div>
                                        <div class="col-9"><?= esc($user_email); ?></div>
                                    </div>
                                </div>
                            </div>

                            <h5>Upload Profile Picture:</h5>
                            <form action="<?= site_url('auth/upload'); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="mb-3">
                                    <input type="file" name="avatar" class="form-control" accept="image/*" required>
                                </div>
                                <button type="submit" class="btn btn-success">Upload</button>
                            </form>

                            <div class="d-flex justify-content-end">
                                <a href="<?= site_url('auth/logout'); ?>" class="btn btn-danger">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>