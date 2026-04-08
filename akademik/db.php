<?php
//koneksikan aplikasi dengan database
$koneksi = mysqli_connect("localhost", "root", "", "akademik");     

    //koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>