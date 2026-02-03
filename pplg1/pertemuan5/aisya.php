<?php
$cinta = [
    ["Aisya", "Raka", "24%",],
    ["Aisya", "Haizan", "87%",],
    ["Aisya", "Angga", "12%",]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Tes Cinta</title>
    <style>
        body{
            background: linear-gradient(135deg, #69bdf5ff, #a10af2ff, #d72c71ff);
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 40px;
        }
        table{
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 5px;
            margin: 0 auto;
        }
        th, td{
            border: 2px solid black;
            font-size: 20px;
            text-align: center;
        }
        th{
            background-color: lightpink;
        }
        td{
            background-color: lightcoral;
        }


    </style>
</head>
<body>
    <center><h1>APLIKASI TEST CINTA</h1></center>
    <br>
    <table border ="1" cellpadding= "15", cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Cewe</th>
            <th>Nama Cowok</th>--
            <th>Seberapa Cinta?</th>
        </tr>
    <?php
    $no = 1;
    foreach ($cinta as $jm){ ?>
        <tr>
        <td><?=  $no++; ?></td>
        <td><?=  $jm[0]; ?></td>
        <td><?=  $jm[1]; ?></td>
        <td><?=  $jm[2]; ?></td>
        </tr>
    <?php } ?>
    </table>
    <?php ?>
</body>
</html
