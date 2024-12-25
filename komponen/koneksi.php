<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_portofolio";

$connect = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$connect) {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
return $connect;
?>
