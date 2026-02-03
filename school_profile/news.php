<?php
include 'db.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="bg-dark text-white py-5 text-center">
    <div class="container">
        <h1 class="fw-bold">Berita & Artikel</h1>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM news ORDER BY created_at DESC";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <?php if($row['image']): ?>
                        <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>" style="height: 200px; object-fit: cover;">
                    <?php else: ?>
                        <img src="https://source.unsplash.com/800x600/?school,news&sig=<?php echo $row['id']; ?>" class="card-img-top" alt="Default Image" style="height: 200px; object-fit: cover;">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?php echo $row['title']; ?></h5>
                        <p class="text-muted small"><i class="far fa-calendar-alt me-2"></i><?php echo date('d M Y', strtotime($row['created_at'])); ?></p>
                        <p class="card-text"><?php echo substr(strip_tags($row['content']), 0, 120); ?>...</p>
                        <a href="news-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm stretched-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo '<div class="col-12 text-center"><div class="alert alert-info">Belum ada berita.</div></div>';
            }
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
