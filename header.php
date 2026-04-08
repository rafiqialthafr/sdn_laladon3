<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN Laladon 03 - Sekolah Ramah Anak</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>_revert_basic">
</head>
<body>



<!-- Main Navbar -->
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-2">
    <div class="container-fluid px-4">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="img/logo.jpeg" alt="Logo" width="50" height="50" class="me-2">
            <div>
                <span class="brand-text">SDN LALADON 03</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-home me-2"></i>Beranda</a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-id-card me-2"></i>
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="sejarah.php"><i class="fa-solid fa-compass me-2"></i>Sejarah Singkat</a></li>
                        <li><a class="dropdown-item" href="visimisi.php"><i class="fa-solid fa-rocket me-2"></i>Visi Misi</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-user-tie me-2"></i>Kepala Sekolah</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-users me-2"></i>Guru dan Staf</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-building me-2"></i>Fasilitas</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-newspaper me-2"></i>Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-share-nodes me-2"></i>
                        Link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fab fa-solid fa-facebook-f me-2"></i> Facebook</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fab fa-solid fa-instagram me-2"></i> Instagram</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fab fa-solid fa-youtube me-2"></i> YouTube</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fab fa-solid fa-tiktok me-2"></i> Twitter</a></li>
                    </ul>
                </li>
                <li class="nav-item ms-lg-2">
                    <a href="login.php" class="btn-gold-primary rounded-pill px-4">Login Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
