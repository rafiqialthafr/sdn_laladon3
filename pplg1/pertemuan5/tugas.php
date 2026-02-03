<?php 
$jadwalmapel = [
    ["Pa Rizky", "Selasa", "09.30-15.00",],
    ["Pa Didin", "Selasa", "07.50-09.10",],
    ["Bu Diah", "Rabu", "06.30-08.30",]
];

$kehadiran = [
    ["Soni", "41", "13-11-25", "Sakit"],
    ["Faris", "19", "16-11-25", "Izin"],
    ["Alwi", "5", "09-11-25", "Izin"],
    ["Rafi", "37", "13-11-25", "Hadir"],
    ["Dimas", "11", "12-12-25", "Alpa"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JADWAL MAPEL DAN KEHADIRAN</title>
    <style>
        body{
            background: linear-gradient(135deg, #3b8d, #6b6b83, #d5543aff);
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 40px;
        }
        h2{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 30px;
        }
        table{
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 5px;
            margin: 0 auto;
        }
        th, td{
            border: 2px solid blue;
            font-size: 20px;
            text-align: center;
        }
        th{
            background-color: grey;
        }
        td{
            background-color: yellowgreen; 
        }
    </style>
</head>
<body>
    <center><h1>JADWAL MAPEL DAN KEHADIRAN SISWA</h1></center>
    <br>
    <h2><center>Jadwal Mata Pelajaran</center></h2>
    <table border ="1" cellpadding= "10", cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Hari KBM</th>
            <th>Jam Pelajaran</th>
        </tr>
    <?php
    $no = 1;
    foreach ($jadwalmapel as $jm){ ?>
        <tr>
        <td><?=  $no++; ?></td>
        <td><?=  $jm[0]; ?></td>
        <td><?=  $jm[1]; ?></td>
        <td><?=  $jm[2]; ?></td>
        </tr>
    <?php } ?>
    </table>
    <?php ?>
    <br>
    <br>
    <h2><center>Kehadiran Siswa</center></h2>
    <table border ="1" cellpadding= "10", cellspacing="0",>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>No Absen</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
        </tr>
    <?php
    $no = 1;
    foreach($kehadiran as $kr){ ?>
        <tr>
        <td><?=  $no++; ?></td>
        <td><?=  $kr[0]; ?></td>
        <td><?=  $kr[1]; ?></td>
        <td><?=  $kr[2]; ?></td>
        <td><?=  $kr[3]; ?></td>
        </tr>
    <?php } ?>
    </table>
    <?php ?>

</body>
</html