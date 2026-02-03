<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-secondary text-white min-vh-100 p-3">
            <h4>Admin Panel</h4>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link text-white">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white active bg-primary rounded">Data Guru</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Logout</a></li>
            </ul>
        </div>

        <div class="col-md-10 p-4 bg-light">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>Kelola Data Guru</h3>
                <span>Admin: <strong>Sapa</strong></span>
            </div>

            <a href="tambah_guru.php" class="btn btn-success mb-3">Tambah Guru</a>

            <div class="card p-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th><th>Nama Guru</th><th>NIP</th><th>Mata Pelajaran</th><th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td><td>Budi Santoso</td><td>1987654321</td><td>Matematika</td>
                            <td>
                                <a href="edit.php?id=1" class="btn btn-sm btn-primary">Edit</a>
                                <a href="hapus.php?id=1" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>