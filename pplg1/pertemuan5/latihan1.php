<?php
// looping array
$Sembako = ["Gula", "Terigu", "Telur", "Beras", "Kopi"];
$AlatTulisKantor = ["Pensil", "Pulpen", "Penghapus", "Penggaris"];
$MakananRingan = ["Nabati", "Better", "Bengbeng", "Wafello"];
$Minuman = ["Kopi", "Susu", "Teh", "Es leci", "Jus Alpukat" ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Looping Array</title>
</head>
<body>
    <h1>Daftar Barang Toko Semi Jaya</h1>
    <h3>Sembako</h3>
    <table border = "1" cellpadding="10", cellspacing="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
        </tr>
    <?php
    $no = 1;
    foreach($Sembako as $Sbk){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $Sbk; ?></td>
        </tr>
     <?php } ?>
    </table>
    <h3>Alat Tulis Kantor</h3>
    <table border = "1" cellpadding="10", cellspacing="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
        </tr>
    <?php
    $no = 1;
    foreach($AlatTulisKantor as $ATK){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $ATK; ?></td>
        </tr>
     <?php } ?>
    </table>
    <h3>Makanan Ringan</h3>
    <table border = "1" cellpadding="10", cellspacing="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
        </tr>
    <?php
    $no = 1;
    foreach($MakananRingan as $mkr){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $mkr; ?></td>
        </tr>
     <?php } ?>
    </table>
    <h3>Minuman</h3>
    <table border = "1" cellpadding="10", cellspacing="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
        </tr>
    <?php
    $no = 1;
    foreach($Minuman as $mnm){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $mnm; ?></td>
        </tr>
     <?php } ?>
    </table>
    </body>