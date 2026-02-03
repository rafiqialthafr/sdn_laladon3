<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include '../db.php';

// Count Data
$teacher_count = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM teachers"));
$news_count = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM news"));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <div class="d-flex">
            <span class="navbar-text me-3">Halo, <?php echo $_SESSION['username']; ?></span>
            <a href="auth.php?logout=1" class="btn btn-sm btn-outline-light">Logout</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-light sidebar min-vh-100 py-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="teachers.php"><i class="fas fa-chalkboard-teacher me-2"></i> Data Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="news.php"><i class="fas fa-newspaper me-2"></i> Berita</a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link text-secondary" href="../index.php" target="_blank"><i class="fas fa-external-link-alt me-2"></i> Lihat Website</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 py-4">
            <h3>Dashboard</h3>
            <p>Selamat datang di halaman administrator.</p>
            
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Jumlah Guru</div>
                        <div class="card-body">
                            <h5 class="card-title display-4 fw-bold"><?php echo $teacher_count; ?></h5>
                            <p class="card-text">Guru terdaftar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Jumlah Berita</div>
                        <div class="card-body">
                            <h5 class="card-title display-4 fw-bold"><?php echo $news_count; ?></h5>
                            <p class="card-text">Artikel dipublikasikan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
