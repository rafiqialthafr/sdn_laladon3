<?php
include 'db.php';
include 'includes/header.php';
include 'includes/navbar.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$query = "SELECT * FROM news WHERE id = $id";
$result = mysqli_query($conn, $query);
$news = mysqli_fetch_assoc($result);

if (!$news) {
    echo "<div class='container py-5'><div class='alert alert-danger'>Berita tidak ditemukan! <a href='news.php'>Kembali ke Berita</a></div></div>";
    include 'includes/footer.php';
    exit;
}
?>

<div class="bg-light py-5">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                <li class="breadcrumb-item"><a href="news.php">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $news['title']; ?></li>
            </ol>
        </nav>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="fw-bold mb-3"><?php echo $news['title']; ?></h1>
                <p class="text-muted mb-4">
                    <i class="far fa-calendar-alt me-2"></i><?php echo date('d F Y', strtotime($news['created_at'])); ?>
                </p>
                
                <?php if($news['image']): ?>
                    <img src="uploads/<?php echo $news['image']; ?>" class="img-fluid rounded mb-4 w-100 shadow-sm" alt="<?php echo $news['title']; ?>">
                <?php else: ?>
                    <img src="https://source.unsplash.com/1200x600/?school,news&sig=<?php echo $news['id']; ?>" class="img-fluid rounded mb-4 w-100 shadow-sm" alt="Default Image">
                <?php endif; ?>

                <div class="article-content">
                    <?php echo nl2br($news['content']); ?>
                </div>
                
                <hr class="my-5">
                <a href="news.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Berita</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
