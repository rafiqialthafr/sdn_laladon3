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
</head>
<body>

<?php include 'navbar.php'; ?>

    <!-- Konten Utama (Profil & Visi Misi) -->
    <section id="profil" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h3 class="fw-bold mb-3">Tentang Sekolah</h3>
                    <p class="text-secondary" style="text-align: justify;">
                        SMA Harapan Bangsa didirikan dengan tujuan mencetak generasi penerus bangsa yang cerdas, berakhlak mulia, dan kompetitif. 
                        Dengan fasilitas lengkap dan tenaga pengajar profesional, kami berkomitmen memberikan pendidikan terbaik bagi putra-putri Anda.
                        Lingkungan belajar yang kondusif mendukung pengembangan potensi akademik dan non-akademik siswa.
                    </p>
                </div>
                <div class="col-md-6 mb-4" id="visimisi">
                    <h3 class="fw-bold mb-3">Visi & Misi</h3>
                    <div class="card border-0 shadow-sm p-3">
                        <h5 class="fw-bold text-primary"><i class="bi bi-eye"></i> Visi</h5>
                        <p class="fst-italic">"Menjadi sekolah unggulan yang berlandaskan iman dan taqwa serta unggul dalam ilmu pengetahuan dan teknologi."</p>
                        
                        <h5 class="fw-bold text-primary mt-3"><i class="bi bi-list-task"></i> Misi</h5>
                        <ul class="list-unstyled">
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Melaksanakan pembelajaran yang efektif dan inovatif.</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Mengembangkan potensi siswa secara optimal.</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Menanamkan nilai-nilai karakter bangsa.</li>
                        </ul>
                    </div>
                </div>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
