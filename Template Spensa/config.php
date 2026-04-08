<?php
// Konfigurasi Database
$host = 'localhost';
$dbname = 'sekolah_db'; // Pastikan nama database sesuai
$username = 'root';
$password = ''; // Kosongkan jika default XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode ke exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Set default fetch mode ke object agar lebih mudah diakses (misal: $row->judul)
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch(PDOException $e) {
    die("Koneksi Database Gagal: " . $e->getMessage());
}
?>
