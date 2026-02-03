<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $row = mysqli_fetch_assoc($data);
    $_SESSION['username'] = $username;
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['status'] = "login";
    header("location:admin.php");
}else{
    header("location:login.php?pesan=gagal");
}
?>
