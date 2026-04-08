<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';

$id = "";
$name = "";
$position = "";
$bio = "";
$photo = "";
$is_edit = false;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $is_edit = true;
    $query = "SELECT * FROM teachers WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $position = $row['position'];
    $bio = $row['bio'];
    $photo = $row['photo'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $is_edit ? 'Edit' : 'Tambah'; ?> Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><?php echo $is_edit ? 'Edit' : 'Tambah'; ?> Guru</h4>
        </div>
        <div class="card-body">
            <form action="teacher_process.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="existing_photo" value="<?php echo $photo; ?>">
                
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" name="position" class="form-control" value="<?php echo $position; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="photo" class="form-control">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                    <?php if ($is_edit && $photo): ?>
                        <div class="mt-2">
                            <img src="<?php echo $photo; ?>" width="100" class="rounded">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bio Singkat</label>
                    <textarea name="bio" class="form-control" rows="4" required><?php echo $bio; ?></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="admin_dashboard.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" name="<?php echo $is_edit ? 'update' : 'save'; ?>" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
