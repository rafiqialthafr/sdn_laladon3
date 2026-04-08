<?php
include 'koneksi.php';
include 'header.php';
?>

<!-- Hero Slider -->
<section id="hero-section">
<div id="heroCarousel" class="carousel slide hero-modern" data-bs-ride="carousel">

    <div class="carousel-inner">
        <!-- SLIDE 1 -->
        <div class="carousel-item active" data-bs-interval="5000">
            
            <!-- GOLD GRADIENT OVERLAY - GANTI INI! -->
            <div class="hero-overlay-gold"></div>
            
            <img src="img/foto1.jpeg" class="d-block w-100 hero-img" alt="SDN Laladon 03">
            
            <div class="carousel-caption hero-content-gold">
                
                <!-- BADGE BARU - TAMBAH INI! -->
                <div class="hero-badge-gold animate-fade-in-1">
                    <span class="badge-icon">⭐</span>
                    <span>Akreditasi A</span>
                </div>
                
                <!-- TYPOGRAPHY UPGRADE -->
                <h3 class="hero-pretitle animate-fade-in-2">Selamat Datang di</h3>
                
                <h1 class="hero-title-gold animate-fade-in-3">
                    <span class="text-highlight">SDN LALADON 03</span>
                </h1>
                
                <p class="hero-subtitle animate-fade-in-4">
                    Mewujudkan Generasi Cerdas, Kreatif, Berkarakter, dan Berprestasi
                </p>
                
                <!-- BUTTONS BARU - TAMBAH INI! -->
                <div class="hero-buttons animate-fade-in-5">
                    <a href="#daftar" class="btn-gold-primary">
                        <span>📝 Daftar Sekarang</span>
                        <span class="btn-arrow">→</span>
                    </a>
                    <a href="#profil" class="btn-gold-outline">
                        <span>📚 Lihat Profil</span>
                    </a>
                </div>
                
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item" data-bs-interval="5000">
            
            <!-- GOLD GRADIENT OVERLAY -->
            <div class="hero-overlay-gold"></div>
            
            <img src="img/foto2.jpeg" class="d-block w-100 hero-img" alt="SDN Laladon 03">
            
            <div class="carousel-caption hero-content-gold">
                
                <div class="hero-badge-gold animate-fade-in-1">
                    <span class="badge-icon">🏆</span>
                    <span>Juara Nasional 2024</span>
                </div>
                
                <h3 class="hero-pretitle animate-fade-in-2">Prestasi Membanggakan</h3>
                
                <h1 class="hero-title-gold animate-fade-in-3">
                    <span class="text-highlight">BERPRESTASI</span>
                </h1>
                
                <p class="hero-subtitle animate-fade-in-4">
                    15+ Juara Lomba Tingkat Kota dan Provinsi di Bidang Akademik & Non-Akademik
                </p>
                
                <div class="hero-buttons animate-fade-in-5">
                    <a href="#prestasi" class="btn-gold-primary">
                        <span>🏅 Lihat Prestasi</span>
                        <span class="btn-arrow">→</span>
                    </a>
                    <a href="#galeri" class="btn-gold-outline">
                        <span>📸 Galeri Kegiatan</span>
                    </a>
                </div>
                
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item" data-bs-interval="5000">
            
            <!-- GOLD GRADIENT OVERLAY -->
            <div class="hero-overlay-gold"></div>
            
            <img src="img/foto3.jpeg" class="d-block w-100 hero-img" alt="SDN Laladon 03">
            
            <div class="carousel-caption hero-content-gold">
                
                <div class="hero-badge-gold animate-fade-in-1">
                    <span class="badge-icon">👨‍🏫</span>
                    <span>Guru Bersertifikat</span>
                </div>
                
                <h3 class="hero-pretitle animate-fade-in-2">Fasilitas Lengkap</h3>
                
                <h1 class="hero-title-gold animate-fade-in-3">
                    <span class="text-highlight">MODERN & NYAMAN</span>
                </h1>
                
                <p class="hero-subtitle animate-fade-in-4">
                    Perpustakaan, Lab Komputer, Ruang Kelas Ber-AC, Lapangan Olahraga, dan Fasilitas Pendukung Lainnya
                </p>
                
                <div class="hero-buttons animate-fade-in-5">
                    <a href="#fasilitas" class="btn-gold-primary">
                        <span>🏫 Lihat Fasilitas</span>
                        <span class="btn-arrow">→</span>
                    </a>
                    <a href="#kontak" class="btn-gold-outline">
                        <span>📞 Hubungi Kami</span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    <!-- CAROUSEL CONTROLS (tetap sama) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    
</div>
</section>

<!-- Tentang Sekolah Kami Section (Achievements + Visi Misi) -->
<section id="aboutSection" class="py-5" style="background-color: #fdfdfdff;">
    <div class="container">
        <!-- Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #0f1010ff;">Tentang Sekolah Kami</h2>
            <div style="width: 80px; height: 4px; background: #FFCC00; margin: 10px auto;"></div>
        </div>

        <!-- Achievements Row (Terakreditasi, etc.) -->
        <div class="row text-center g-4 mb-5">
            <!-- Item 1: Terakreditasi A -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 custom-card">
                    <div class="mb-3">
                        <i class="fas fa-trophy fa-3x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Terakreditasi A</h5>
                    <p class="text-muted small">Sejak 2016 mendapatkan akreditasi dari BANSM dengan<br>No SK : 048/BAP-SM/HK/XI/2016</p>
                </div>
            </div>

            <!-- Item 2: Kurikulum K-13 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 custom-card">
                    <div class="mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Kurikulum K-13</h5>
                    <p class="text-muted small">Kurikulum 2013 memiliki empat aspek penilaian, yaitu aspek pengetahuan, aspek keterampilan, aspek sikap, dan perilaku</p>
                </div>
            </div>

            <!-- Item 3: Guru Bersertifikat -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 custom-card">
                    <div class="mb-3">
                        <i class="fas fa-certificate fa-3x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Guru Bersertifikat</h5>
                    <p class="text-muted small">Guru profesional merupakan syarat mutlak untuk menciptakan sistem dan praktik pendidikan yang berkualitas.</p>
                </div>
            </div>

            <!-- Item 4: Fasilitas Lengkap -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 custom-card">
                    <div class="mb-3">
                        <i class="fas fa-layer-group fa-3x text-warning"></i> 
                    </div>
                    <h5 class="fw-bold mb-3">Fasilitas Lengkap</h5>
                    <p class="text-muted small">Dengan tersedianya ruang kelas, lab dan perpustakaan menunjang proses belajar dan mengajar anak di Sekolah</p>
                </div>
            </div>
        </div>

        <!-- Visi Misi Row (Now 4 Cards) -->
        <div class="row text-center g-4">
            <!-- Card 1: Visi -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 custom-card">
                    <div class="mb-3">
                        <i class="fas fa-lightbulb fa-3x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Visi</h5>
                    <p class="text-muted small">Terwujudnya Peserta Didik yang Beriman, Bertakwa, Berkarakter Mulia, Cerdas, dan Berprestasi.</p>
                </div>
            </div>

            <!-- Card 2: Misi -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 custom-card">
                    <div class="mb-3">
                        <i class="fas fa-rocket fa-3x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Misi</h5>
                    <p class="text-muted small">Menyelenggarakan pendidikan berkualitas akademik & non-akademik serta menanamkan nilai karakter.</p>
                </div>
            </div>

            <!-- Card 3: Program Unggulan -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 custom-card">
                    <div class="mb-3">
                        <i class="fas fa-star fa-3x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Program Unggulan</h5>
                    <p class="text-muted small">Tahfidz Qur'an, Literasi Sekolah, Adiwiyata, dan Pembiasaan Karakter Islami.</p>
                </div>
            </div>

            <!-- Card 4: Ekstrakurikuler -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 custom-card">
                    <div class="mb-3">
                        <i class="fas fa-futbol fa-3x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Ekstrakurikuler</h5>
                    <p class="text-muted small">Pramuka, Paskibra, Futsal, Tari, Marawis, dan berbagai kegiatan pengembangan diri lainnya.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Headmaster Welcome Section -->
<section id="welcomeSection" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="img/kepsek.jpeg" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover; border: 5px solid #eaeaea;" alt="Kepala Sekolah">
            </div>
            <div class="col-md-8">
                <h2 class="fw-bold mb-3 text-dark">Sambutan Kepala Sekolah</h2>
                <h4 class="text-primary mb-3">Metkopwati, S.Pd.</h4>
                <p class="lead text-muted">
                    "Pendidikan adalah senjata paling mematikan di dunia, karena dengan pendidikan, Anda dapat mengubah dunia."
                </p>
                <p class="text-muted">
                    Selamat datang di website resmi sekolah kami. Kami berharap website ini dapat menjadi sarana informasi dan komunikasi yang efektif antara sekolah, orang tua, siswa, dan masyarakat. Kami terus berkomitmen untuk meningkatkan kualitas pendidikan dan pelayanan prima.
                </p>
            </div>
        </div>
    </div>
</section>



<!-- Teachers Section -->
<section id="teachersSection" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #0f1010ff;">Guru dan Staf</h2>
        </div>

        <div class="row g-4">
            <?php
            $query_teachers = "SELECT * FROM teachers ORDER BY id ASC LIMIT 4";
            $result_teachers = mysqli_query($koneksi, $query_teachers);

            if (mysqli_num_rows($result_teachers) > 0) {
                while ($row = mysqli_fetch_assoc($result_teachers)) {
            ?>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center p-3">
                    <img src="<?php echo $row['photo']; ?>" class="rounded-circle mx-auto d-block mb-3" style="width: 150px; height: 150px; object-fit: cover; border: 5px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);" alt="<?php echo $row['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?php echo $row['name']; ?></h5>
                        <p class="card-text text-primary mb-2"><?php echo $row['position']; ?></p>
                        <p class="card-text small text-muted"><?php echo substr($row['bio'], 0, 80) . '...'; ?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "<p class='text-center'>Data guru belum tersedia.</p>";
            }
            ?>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary">Lihat Semua</a>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="blogSection" class="py-5 bg-white">
    <div class="container">
            <h2 class="fw-bold text-center mb-5 text-dark">Berita & Artikel Terbaru</h2>
        <div class="row g-4">
            <?php
            $query_blog = "SELECT * FROM blog ORDER BY created_at DESC LIMIT 3";
            $result_blog = mysqli_query($koneksi, $query_blog);

            if (mysqli_num_rows($result_blog) > 0) {
                while ($blog = mysqli_fetch_assoc($result_blog)) {
            ?>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?php echo $blog['image']; ?>" class="card-img-top" alt="<?php echo $blog['title']; ?>">
                    <div class="card-body">
                        <small class="text-muted mb-2 d-block"><i class="far fa-calendar-alt me-2"></i><?php echo date('d M Y', strtotime($blog['created_at'])); ?></small>
                        <h5 class="card-title fw-bold"><a href="#" class="text-dark text-decoration-none"><?php echo $blog['title']; ?></a></h5>
                        <p class="card-text text-muted"><?php echo substr($blog['content'], 0, 100) . '...'; ?></p>
                        <a href="#" class="text-primary fw-bold text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "<div class='col-12'><p class='text-center'>Belum ada berita terbaru.</p></div>";
            }
            ?>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary">Lihat Semua</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
