<?php
$host = "sql207.infinityfree.com";
$user = "if0_41171663";
$pass = "FMGqY7XUIbBMrL";
$db   = "if0_41171663_laladon";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
?>
