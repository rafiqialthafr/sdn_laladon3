<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - SMA Harapan Bangsa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section text-center text-lg-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-text">
                    <h1 class="display-4">Selamat Datang di<br>SD Negeri 3 Laladon</h1>
                    <p class="lead">Sekolah Unggul, Berprestasi & Berkarakter.</p>
                    <a href="#profil" class="btn btn-light-custom rounded-pill">Lihat Profil</a>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 text-center">
                    <img src="https://share.google/McLljbu7S4oAa1koF" alt="Gedung Sekolah" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Konten Utama (Profil & Fasilitas) -->
    <section id="profil" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Tentang Sekolah -->
                <div class="col-md-6 mb-4">
                    <h3 class="fw-bold mb-3">Tentang Sekolah</h3>
                    <p class="text-secondary" style="text-align: justify;">
                        SMA Harapan Bangsa didirikan dengan tujuan mencetak generasi penerus bangsa yang cerdas, berakhlak mulia, dan kompetitif. 
                        Dengan fasilitas lengkap dan tenaga pengajar profesional, kami berkomitmen memberikan pendidikan terbaik bagi putra-putri Anda.
                        Lingkungan belajar yang kondusif mendukung pengembangan potensi akademik dan non-akademik siswa.
                    </p>
                    <p class="text-secondary" style="text-align: justify;">
                        Kami percaya bahwa setiap siswa memiliki bakat unik yang perlu diasah. Oleh karena itu, kami menyediakan berbagai kegiatan ekstrakurikuler dan program pengembangan diri.
                    </p>
                </div>
                
                <!-- Fasilitas Sekolah -->
                <div class="col-md-6 mb-4" id="fasilitas">
                    <h3 class="fw-bold mb-3">Fasilitas Sekolah</h3>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card h-100 border-0 shadow-sm text-center py-4 bg-light">
                                <i class="bi bi-snow2 text-primary display-4 mb-2"></i>
                                <h6 class="fw-bold mt-2">Ruang Kelas Ber-AC</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card h-100 border-0 shadow-sm text-center py-4 bg-light">
                                <i class="bi bi-virus text-danger display-4 mb-2"></i> <!-- bi-virus works as close to biology/flask if flask not avail, or generic science -->
                                <h6 class="fw-bold mt-2">Laboratorium IPA</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card h-100 border-0 shadow-sm text-center py-4 bg-light">
                                <i class="bi bi-laptop text-success display-4 mb-2"></i>
                                <h6 class="fw-bold mt-2">Perpustakaan Digital</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card h-100 border-0 shadow-sm text-center py-4 bg-light">
                                <i class="bi bi-dribbble text-warning display-4 mb-2"></i>
                                <h6 class="fw-bold mt-2">Lapangan Basket</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Guru -->
    <section id="guru" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Daftar Guru Pengajar</h2>
                <p class="text-muted">Tenaga pendidik profesional kami</p>
            </div>
            <div class="table-responsive bg-white rounded shadow-sm p-4">
                <table class="table table-hover table-borderless align-middle table-custom">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">No HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        if ($koneksi) {
                            $query = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY nama_guru ASC");
                            if ($query) {
                                while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td class="fw-bold"><?= htmlspecialchars($data['nama_guru']); ?></td>
                            <td><?= htmlspecialchars($data['nip']); ?></td>
                            <td><span class="badge bg-primary rounded-pill"><?= htmlspecialchars($data['mata_pelajaran']); ?></span></td>
                            <td><?= htmlspecialchars($data['no_hp']); ?></td>
                        </tr>
                        <?php 
                                }
                            } else {
                                echo "<tr><td colspan='5' class='text-center text-danger'>Gagal mengambil data guru: " . mysqli_error($koneksi) . "</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center text-danger'>Koneksi database gagal.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <small>&copy; <?= date('Y'); ?> SMA Harapan Bangsa. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
