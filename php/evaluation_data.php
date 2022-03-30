<?php
session_start();
print_r($_SESSION);
$_SESSION = [];
$_GET = [];
header("Location: /php/evaluation_data.php")
?>
