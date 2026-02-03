<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include '../db.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

function create_slug($string){
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    return $slug;
}

// Handle Create
if (isset($_POST['add'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $slug = create_slug($_POST['title']);
    
    // Photo Upload
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $image = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . $image);
    }
    
    $query = "INSERT INTO news (title, slug, content, image) VALUES ('$title', '$slug', '$content', '$image')";
    if(mysqli_query($conn, $query)){
        header("Location: news.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Handle Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $slug = create_slug($_POST['title']);
    
    $query = "UPDATE news SET title='$title', slug='$slug', content='$content'";
    
    if (!empty($_FILES['image']['name'])) {
        $image = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . $image);
        $query .= ", image='$image'";
    }
    
    $query .= " WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: news.php");
    exit;
}

// Handle Delete
if ($action == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM news WHERE id=$id");
    header("Location: news.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita - Sekolah Unggul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Admin Panel</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
         <div class="col-md-2 bg-light sidebar min-vh-100 py-3">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link text-dark" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="teachers.php"><i class="fas fa-chalkboard-teacher me-2"></i> Data Guru</a></li>
                <li class="nav-item"><a class="nav-link active fw-bold" href="news.php"><i class="fas fa-newspaper me-2"></i> Berita</a></li>
            </ul>
        </div>
        <div class="col-md-10 py-4">
            <h3>Berita & Artikel</h3>
            
            <?php if ($action == 'add'): ?>
                <!-- Add Form -->
                <div class="card mt-4">
                    <div class="card-header">Tambah Berita</div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label>Judul</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Konten</label>
                                <textarea name="content" class="form-control" rows="10" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Gambar Utama</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" name="add" class="btn btn-primary">Simpan</button>
                            <a href="news.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>

            <?php elseif ($action == 'edit'): 
                $id = $_GET['id'];
                $result_edit = mysqli_query($conn, "SELECT * FROM news WHERE id=$id");
                $row = mysqli_fetch_assoc($result_edit);
            ?>
                <!-- Edit Form -->
                <div class="card mt-4">
                    <div class="card-header">Edit Berita</div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="mb-3">
                                <label>Judul</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Konten</label>
                                <textarea name="content" class="form-control" rows="10" required><?php echo $row['content']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Gambar Utama (Biarkan kosong jika tidak diganti)</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                            <a href="news.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>

            <?php else: ?>
                <!-- List Data -->
                <a href="news.php?action=add" class="btn btn-primary mb-3"><i class="fas fa-plus me-2"></i>Tambah Berita</a>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM news ORDER BY created_at DESC";
                                $result = mysqli_query($conn, $query);
                                $no = 1;
                                while($row = mysqli_fetch_assoc($result)):
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <?php if($row['image']): ?>
                                            <img src="../uploads/<?php echo $row['image']; ?>" width="80" height="50" class="object-fit-cover rounded">
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo date('d/m/Y H:i', strtotime($row['created_at'])); ?></td>
                                    <td>
                                        <a href="news.php?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></a>
                                        <a href="news.php?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')"><i class="fas fa-trash"></i></a>
                                        <a href="../news-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info text-white" target="_blank"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
