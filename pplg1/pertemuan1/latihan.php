<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan looping</title>
</head>
<body>
    <table border="1" cellpadding="2" cellspacing="10">
        <?php
          for ($b = 1; $b <= 100; $b++){
            echo "<tr>";
               for ($kolom = 1; $kolom<= 200; $kolom++){
                 echo "<td>$b,$kolom</td>";
               }
               echo "</tr>";
               }
        ?>












    </table>
</body>
</html>