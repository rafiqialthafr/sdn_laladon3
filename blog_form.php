<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';

$id = "";
$title = "";
$content = "";
$image = "";
$is_edit = false;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $is_edit = true;
    $query = "SELECT * FROM blog WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $content = $row['content'];
    $image = $row['image'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $is_edit ? 'Edit' : 'Tambah'; ?> Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0"><?php echo $is_edit ? 'Edit' : 'Tambah'; ?> Berita</h4>
        </div>
        <div class="card-body">
            <form action="blog_process.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="existing_image" value="<?php echo $image; ?>">
                
                <div class="mb-3">
                    <label class="form-label">Judul Berita</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="image" class="form-control">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    <?php if ($is_edit && $image): ?>
                        <div class="mt-2">
                            <img src="<?php echo $image; ?>" width="100" class="rounded">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Isi Berita</label>
                    <textarea name="content" class="form-control" rows="8" required><?php echo $content; ?></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="admin_dashboard.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" name="<?php echo $is_edit ? 'update' : 'save'; ?>" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
