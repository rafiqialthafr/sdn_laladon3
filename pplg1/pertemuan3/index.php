==<?php
// Looping atau Pengulangan
// for, while, do-while, foreach
// tiga statment yang harus ada pada looping
// inisialisasi, kondisi, increment, atau decrement

// for
// mencetak selamat datang sebanyak 5 kali
// pengulangan yang kita tentukan
for ($i = 0; $i < 5; $i++){
    echo "Selamat Datang $i <br>";
}

// while
$ulangi = 0;

while($ulangi < 10){
    echo "ini pengulangan while ke-$ulangi <br>";
    $ulangi++;
}

// do-while
$i = 1;
do {
    echo "Hello World! $i <br>";
    $i++;
} while ($i < 5);
echo "<br>"
?>

<!-- tutor by allrole -->