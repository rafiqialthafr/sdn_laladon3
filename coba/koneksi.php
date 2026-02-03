<?php
$host = "localhost";
$user = "root";
$pass = "2222";
$db   = "sekolah_db";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>
