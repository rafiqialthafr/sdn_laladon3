<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pengkondisian</title>
    <style>
        .warna{
            background-color: yellowgreen;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($baris = 1; $baris <= 10; $baris++) : ?>
            <?php if ($baris % 2 == 0) : ?>
                <tr class="warna">
                    <?php else : ?>
                </tr>
            <?php endif; ?>
            <?php for ($kolom = 1; $kolom <= 20; $kolom++) : ?>
                    <td><?php echo "$baris,$kolom"; ?></td>
                      <?php endfor; ?>
           <?php endfor; ?>

    </table>
    
</body>
</html>
