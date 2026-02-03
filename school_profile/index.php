<?php
include 'db.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero-section text-white d-flex align-items-center">
    <div class="container">
        <h1 class="display-3 fw-bold mb-4">Selamat Datang di Sekolah Unggul</h1>
        <p class="lead mb-4">Membangun Generasi Cerdas dan Berkarakter</p>
        <a href="profile.php" class="btn btn-primary btn-lg rounded-pill px-5">Tentang Kami</a>
    </div>
</section>

<!-- Welcome Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="https://source.unsplash.com/800x600/?students,classroom" alt="Siswa" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Sambutan Kepala Sekolah</h2>
                <p>Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                <p>Selamat datang di website resmi Sekolah Unggul. Kami berkomitmen untuk memberikan pendidikan terbaik bagi putra-putri bangsa dengan fasilitas modern dan tenaga pengajar yang profesional.</p>
                <p>Mari bergabung bersama kami untuk meraih masa depan yang gemilang.</p>
                <p class="fw-bold mt-3">- Dr. Budi Santoso, M.Pd</p>
            </div>
        </div>
    </div>
</section>

<!-- Recent News Section -->
<section class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Berita Terbaru</h2>
        <div class="row">
            <?php
            $query = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <?php if($row['image']): ?>
                        <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>" style="height: 200px; object-fit: cover;">
                    <?php else: ?>
                        <img src="https://source.unsplash.com/800x600/?school,news" class="card-img-top" alt="Default Image" style="height: 200px; object-fit: cover;">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?php echo substr($row['title'], 0, 50); ?>...</h5>
                        <p class="text-muted small"><i class="far fa-calendar-alt me-2"></i><?php echo date('d M Y', strtotime($row['created_at'])); ?></p>
                        <p class="card-text"><?php echo substr(strip_tags($row['content']), 0, 100); ?>...</p>
                        <a href="news-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm stretched-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo '<div class="col-12 text-center"><p>Belum ada berita.</p></div>';
            }
            ?>
        </div>
        <div class="text-center mt-4">
            <a href="news.php" class="btn btn-primary">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
