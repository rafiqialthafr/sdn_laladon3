<?php
$host = 'localhost';
$user = 'root';
$pass = '2222'; // Default XAMPP password is empty
$db   = 'school_db';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
