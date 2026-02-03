<?php
session_start();
include '../koneksi.php';
if ($_SESSION['status'] != "login") {
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Guru - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body { overflow-x: hidden; }
        #sidebar-wrapper { min-height: 100vh; margin-left: -15rem; transition: margin 0.25s ease-out; background-color: #212529; color: white; }
        #sidebar-wrapper .sidebar-heading { padding: 0.875rem 1.25rem; font-size: 1.2rem; }
        #sidebar-wrapper .list-group { width: 15rem; }
        #page-content-wrapper { min-width: 100vw; }
        .list-group-item-dark { background-color: #212529; color: rgba(255,255,255,0.7); border: none; }
        .list-group-item-dark:hover, .list-group-item-dark.active { background-color: #343a40; color: white; }
        body.sb-sidenav-toggled #sidebar-wrapper { margin-left: 0; }
        @media (min-width: 768px) {
            #sidebar-wrapper { margin-left: 0; }
            #page-content-wrapper { min-width: 0; width: 100%; }
            body.sb-sidenav-toggled #sidebar-wrapper { margin-left: -15rem; }
        }
    </style>
</head>
<body class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="border-end bg-dark" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom border-secondary">Admin Panel</div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-dark" href="dashboard.php"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-dark active" href="guru.php"><i class="bi bi-person-badge me-2"></i>Data Guru</a>
            <a class="list-group-item list-group-item-action list-group-item-dark" href="../logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
        </div>
    </div>
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle"><i class="bi bi-list"></i></button>
                <div class="dropdown ms-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i> <?= $_SESSION['nama_lengkap']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-4">
            <h2 class="mb-4">Kelola Data Guru</h2>
            
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="bi bi-plus-circle"></i> Tambah Guru
            </button>

            <!-- Modal Tambah -->
            <div class="modal fade" id="modalTambah" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data Guru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="proses_guru.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">NIP</label>
                                    <input type="text" name="nip" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Guru</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mata Pelajaran</label>
                                    <input type="text" name="mapel" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No HP</label>
                                    <input type="text" name="nohp" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>Mata Pelajaran</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $query = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY nama_guru ASC");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($data['nip']); ?></td>
                                <td><?= htmlspecialchars($data['nama_guru']); ?></td>
                                <td><?= htmlspecialchars($data['mata_pelajaran']); ?></td>
                                <td><?= htmlspecialchars($data['no_hp']); ?></td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $data['id']; ?>">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>
                                    <!-- Tombol Hapus -->
                                    <a href="proses_guru.php?hapus=<?= $data['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </a>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="modalEdit<?= $data['id']; ?>" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Guru</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="proses_guru.php" method="POST">
                                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">NIP</label>
                                                            <input type="text" name="nip" class="form-control" value="<?= $data['nip']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Guru</label>
                                                            <input type="text" name="nama" class="form-control" value="<?= $data['nama_guru']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Mata Pelajaran</label>
                                                            <input type="text" name="mapel" class="form-control" value="<?= $data['mata_pelajaran']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">No HP</label>
                                                            <input type="text" name="nohp" class="form-control" value="<?= $data['no_hp']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("sidebarToggle").addEventListener("click", function(){
            document.body.classList.toggle("sb-sidenav-toggled");
        });
    </script>
</body>
</html>
