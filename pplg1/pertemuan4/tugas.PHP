<?php
// if statement
$nilai=90;
if($nilai >= 75) {
    echo "Lulus";
}
echo "<br>";

// if else statement
$umur=20;
if ($umur >= 17) {
    echo "Boleh membuat SIM";
}
echo "<br>";

// if elseif else
$nilai=10;
if($nilai >= 90) {
    echo "Grade A";
} elseif ($nilai >= 80) {
    echo "Grade B";
} elseif ($nilai >= 70) {
    echo "Grade C";
} else {
    echo "Grade D";
}
echo "<br>";

// Switch
$hari="senin";

switch($hari) {
    case "Senin":
        echo "Hari pertama kerja";
        break;
    case "Jumat":
        echo "Hari terakhir kerja";
        break;
    default:
        echo "Hari kerja biasa";
}
?>
