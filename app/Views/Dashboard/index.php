<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Welcome to Your Dashboard</h2>
        <div class="card">
            <div class="card-header">
                User Details
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $user['name']; ?></h5>
                <p class="card-text">
                    <strong>Email:</strong> <?= $user['email']; ?><br>
                    <strong>Account Created:</strong> <?= date('F j, Y, g:i a', strtotime($user['created_at'])); ?><br>
                </p>
            </div>
            <div class="card-footer text-muted">
                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
