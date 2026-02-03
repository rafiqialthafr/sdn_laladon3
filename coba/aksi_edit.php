<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$mapel = $_POST['mata_pelajaran'];
$hp = $_POST['no_hp'];

mysqli_query($koneksi, "UPDATE guru SET nama='$nama', nip='$nip', mata_pelajaran='$mapel', no_hp='$hp' WHERE id='$id'");

header("location:admin.php");
?>
