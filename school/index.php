<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SMA Harapan Bangsa</title>
    <style>
        .hero { background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('sekolah.jpg'); background-size: cover; color: white; padding: 100px 0; }
        .visi-box { background: #eef4ff; border-radius: 10px; padding: 20px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">SMA Harapan Bangsa</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#">Beranda</a>
                <a class="nav-link" href="#">Profil</a>
                <a class="nav-link" href="#">Data Guru</a>
                <a class="nav-link btn btn-outline-primary ms-lg-3" href="admin.php">Login Admin</a>
            </div>
        </div>
    </nav>

    <section class="hero text-center">
        <div class="container">
            <h1>Selamat Datang di <br> SMA Harapan Bangsa</h1>
            <p>Sekolah Unggul, Berprestasi & Berkarakter</p>
            <button class="btn btn-primary px-4">Lihat Profil</button>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h4>Tentang Sekolah</h4>
                <p>SMA Harapan Bangsa adalah sekolah yang berdedikasi untuk mencetak generasi yang cerdas dan berakhlak mulia.</p>
                <img src="gedung.jpg" class="img-fluid rounded" alt="Gedung">
            </div>
            <div class="col-md-6">
                <div class="visi-box">
                    <h5>Visi</h5>
                    <p>Menjadi sekolah unggul dalam prestasi dan berkarakter.</p>
                    <h5>Misi</h5>
                    <ul>
                        <li>Mendidik siswa beriman dan berilmu</li>
                        <li>Mengembangkan potensi siswa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <h4>Data Guru</h4>
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>No</th><th>Nama Guru</th><th>NIP</th><th>Mata Pelajaran</th><th>No HP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td><td>Budi Santoso</td><td>1987654321</td><td>Matematika</td><td>081234567890</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>