<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_suba";

$conn = new mysqli($server, $user, $pass,$database);
if (!$conn) {
    die('Koneksi Gagal :'. mysqli_connect_error());
}
?>