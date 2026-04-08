<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$nip = $_POST['nip'];
$mapel = $_POST['mata_pelajaran'];
$hp = $_POST['no_hp'];

mysqli_query($koneksi, "INSERT INTO guru VALUES('', '$nip', '$nama', '$mapel', '$hp')");

header("location:admin.php");
?>
