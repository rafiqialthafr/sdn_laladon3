<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">
            <img src="https://via.placeholder.com/30?text=Logo" alt="Logo" class="d-inline-block align-text-top me-2">
            SMA Harapan Bangsa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                <!-- Note: Anchor links like #fasilitas work best on index.php, so we prepend index.php to ensure they work from other pages too -->
                <li class="nav-item"><a class="nav-link" href="index.php#fasilitas">Fasilitas</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#guru">Data Guru</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2 px-3" href="login.php">Login Admin</a></li>
            </ul>
        </div>
    </div>
</nav>
