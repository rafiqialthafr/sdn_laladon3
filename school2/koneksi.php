<?php
$host = "localhost";
$user = "root";
$pass = "2222";
$db   = "db_sekolah";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>
