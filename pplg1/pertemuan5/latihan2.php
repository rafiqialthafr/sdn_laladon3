<?php
$siswa = [
    ["Budi", 32446, "PPLG", "budi@gmail.com"],
    ["Anton", 33945, "TPFL", "anton@gmail.com"],
    ["Yuda", 39458, "TO", "Yuda@gmail.com"],
    ["Bufon", 34953, "Animasi", "Bufon@gmail.com"],
    ["Surya", 32356, "BCF", "Surya@gmail.com"]
];

$guru = [
    ["Pa Bagus", 32154, "PPLG", "Bagus@gmail.com"],
    ["Pa Udin", 35345, "TO", "Udin@gmail.com"],
    ["Pa Asep", 32446, "TPFL", "Asep@gmail.com"],
    ["Pa Zaki", 32446, "Animasi", "Zaki@gmail.com"],
    ["Pa Oka", 32446, "BCF", "Oka@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2-Array multidimensi</title>
    <style>
        table{
            border-collapse: collapse;
            width: 60%;
            margin-bottom: 30px;
        }
        th,td{
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background: #3b3
        }

    </style>
</head>
<body>
    <h1>Daftar Siswa SMKN 1 CIOMAS</h1>
    <table border ="1" cellpadding= "10", cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NISN</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
    <?php
    $no = 1;
    foreach($siswa as $s){ ?>
        <tr>
        <td><?=  $no++; ?></td>
        <td><?=  $s[0]; ?></td>
        <td><?=  $s[1]; ?></td>
        <td><?=  $s[2]; ?></td>
        <td><?=  $s[3]; ?></td>
        </tr>
    <?php } ?>
    </table>
    <?php ?>

    <h1>Daftar Guru SMKN 1 CIOMAS</h1>
    <table border ="1" cellpadding= "10", cellspacing="1">
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>NISN</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
    <?php
    $no = 1;
    foreach($guru as $g){ ?>
        <tr>
        <td><?=  $no++; ?></td>
        <td><?=  $g[0]; ?></td>
        <td><?=  $g[1]; ?></td>
        <td><?=  $g[2]; ?></td>
        <td><?=  $g[3]; ?></td>
        </tr>
    <?php } ?>
    </table>
    <?php ?>