<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sp_swamedikasi_";

$connect = mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($connect, $database) or die("Maaf, Database tidak bisa dibuka");
?>