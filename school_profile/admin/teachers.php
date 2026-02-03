<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include '../db.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

// Handle Create
if (isset($_POST['add'])) {
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    
    // Photo Upload
    $photo = '';
    if (!empty($_FILES['photo']['name'])) {
        $photo = time() . '_' . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/' . $photo);
    }
    
    $query = "INSERT INTO teachers (nip, name, subject, photo) VALUES ('$nip', '$name', '$subject', '$photo')";
    mysqli_query($conn, $query);
    header("Location: teachers.php");
    exit;
}

// Handle Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    
    $query = "UPDATE teachers SET nip='$nip', name='$name', subject='$subject'";
    
    if (!empty($_FILES['photo']['name'])) {
        $photo = time() . '_' . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/' . $photo);
        $query .= ", photo='$photo'";
    }
    
    $query .= " WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: teachers.php");
    exit;
}

// Handle Delete
if ($action == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM teachers WHERE id=$id");
    header("Location: teachers.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Guru - Sekolah Unggul</title>
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
                <li class="nav-item"><a class="nav-link active fw-bold" href="teachers.php"><i class="fas fa-chalkboard-teacher me-2"></i> Data Guru</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="news.php"><i class="fas fa-newspaper me-2"></i> Berita</a></li>
            </ul>
        </div>
        <div class="col-md-10 py-4">
            <h3>Data Guru</h3>
            
            <?php if ($action == 'add'): ?>
                <!-- Add Form -->
                <div class="card mt-4">
                    <div class="card-header">Tambah Guru</div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label>NIP</label>
                                <input type="text" name="nip" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Mata Pelajaran</label>
                                <input type="text" name="subject" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Foto</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <button type="submit" name="add" class="btn btn-primary">Simpan</button>
                            <a href="teachers.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>

            <?php elseif ($action == 'edit'): 
                $id = $_GET['id'];
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM teachers WHERE id=$id"));
            ?>
                <!-- Edit Form -->
                <div class="card mt-4">
                    <div class="card-header">Edit Guru</div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="mb-3">
                                <label>NIP</label>
                                <input type="text" name="nip" class="form-control" value="<?php echo $row['nip']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Mata Pelajaran</label>
                                <input type="text" name="subject" class="form-control" value="<?php echo $row['subject']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Foto (Biarkan kosong jika tidak diganti)</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                            <a href="teachers.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>

            <?php else: ?>
                <!-- List Data -->
                <a href="teachers.php?action=add" class="btn btn-primary mb-3"><i class="fas fa-plus me-2"></i>Tambah Guru</a>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Mapel</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM teachers ORDER BY name ASC";
                                $result = mysqli_query($conn, $query);
                                $no = 1;
                                while($row = mysqli_fetch_assoc($result)):
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <?php if($row['photo']): ?>
                                            <img src="../uploads/<?php echo $row['photo']; ?>" width="50" height="50" class="rounded-circle object-fit-cover">
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $row['nip']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['subject']; ?></td>
                                    <td>
                                        <a href="teachers.php?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></a>
                                        <a href="teachers.php?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')"><i class="fas fa-trash"></i></a>
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
