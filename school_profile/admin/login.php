<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Sekolah Unggul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            background: white;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Admin Panel</h4>
        <p class="text-muted">Silakan login untuk melanjutkan</p>
    </div>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger text-center p-2 mb-3">
            Login Gagal! Username atau password salah.
        </div>
    <?php endif; ?>

    <form action="auth.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100 py-2">Masuk</button>
    </form>
    <div class="text-center mt-3">
        <a href="../index.php" class="text-decoration-none small">Kembali ke Beranda</a>
    </div>
</div>

</body>
</html>
