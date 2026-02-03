<?php
include 'db.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="bg-dark text-white py-5 text-center">
    <div class="container">
        <h1 class="fw-bold">Daftar Guru</h1>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM teachers ORDER BY name ASC";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center card-hover">
                    <div class="card-body">
                        <?php if($row['photo']): ?>
                            <img src="uploads/<?php echo $row['photo']; ?>" class="rounded-circle mb-3 shadow" alt="<?php echo $row['name']; ?>" style="width: 120px; height: 120px; object-fit: cover;">
                        <?php else: ?>
                            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($row['name']); ?>&background=random" class="rounded-circle mb-3 shadow" alt="<?php echo $row['name']; ?>" style="width: 120px; height: 120px; object-fit: cover;">
                        <?php endif; ?>
                        
                        <h5 class="fw-bold mb-1"><?php echo $row['name']; ?></h5>
                        <p class="text-primary small mb-2"><?php echo $row['subject']; ?></p>
                        <p class="text-muted small mb-0">NIP: <?php echo $row['nip']; ?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo '<div class="col-12 text-center"><div class="alert alert-info">Belum ada data guru.</div></div>';
            }
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
