<?php
include '../koneksi.php';

// Create / Tambah
if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $nohp = $_POST['nohp'];

    $query = "INSERT INTO guru (nip, nama_guru, mata_pelajaran, no_hp) VALUES ('$nip', '$nama', '$mapel', '$nohp')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='guru.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan'); window.location.href='guru.php';</script>";
    }
}

// Update / Edit
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $nohp = $_POST['nohp'];

    $query = "UPDATE guru SET nip='$nip', nama_guru='$nama', mata_pelajaran='$mapel', no_hp='$nohp' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data Berhasil Diupdate'); window.location.href='guru.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Diupdate'); window.location.href='guru.php';</script>";
    }
}

// Delete / Hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM guru WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data Berhasil Dihapus'); window.location.href='guru.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus'); window.location.href='guru.php';</script>";
    }
}
?>
