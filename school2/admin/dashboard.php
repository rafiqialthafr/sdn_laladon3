<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body { overflow-x: hidden; }
        #sidebar-wrapper { min-height: 100vh; margin-left: -15rem; transition: margin 0.25s ease-out; background-color: #212529; color: white; }
        #sidebar-wrapper .sidebar-heading { padding: 0.875rem 1.25rem; font-size: 1.2rem; }
        #sidebar-wrapper .list-group { width: 15rem; }
        #page-content-wrapper { min-width: 100vw; }
        .list-group-item-dark { background-color: #212529; color: rgba(255,255,255,0.7); border: none; }
        .list-group-item-dark:hover, .list-group-item-dark.active { background-color: #343a40; color: white; }
        body.sb-sidenav-toggled #sidebar-wrapper { margin-left: 0; }
        @media (min-width: 768px) {
            #sidebar-wrapper { margin-left: 0; }
            #page-content-wrapper { min-width: 0; width: 100%; }
            body.sb-sidenav-toggled #sidebar-wrapper { margin-left: -15rem; }
        }
    </style>
</head>
<body class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="border-end bg-dark" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom border-secondary">Admin Panel</div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-dark active" href="dashboard.php"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-dark" href="guru.php"><i class="bi bi-person-badge me-2"></i>Data Guru</a>
            <a class="list-group-item list-group-item-action list-group-item-dark" href="../logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
        </div>
    </div>
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle"><i class="bi bi-list"></i> Menu</button>
                <div class="dropdown ms-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i> <?= $_SESSION['nama_lengkap']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-4">
            <h1 class="h3 mb-4">Selamat Datang, <?= $_SESSION['nama_lengkap']; ?>!</h1>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Halo!</h4>
                <p>Selamat datang di halaman panel admin SMA Harapan Bangsa. Silakan gunakan menu di samping untuk mengelola data website.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("sidebarToggle").addEventListener("click", function(){
            document.body.classList.toggle("sb-sidenav-toggled");
        });
    </script>
</body>
</html>
