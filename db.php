<?php
$servername = "localhost:3306";
$username = "root";
$password = ""; 
$dbname = "khebrah";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}
?>
