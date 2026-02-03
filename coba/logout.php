<?php 
session_start();
session_destroy();
header("location:stecu.php?pesan=logout");
?>