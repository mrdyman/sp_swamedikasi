 <title>Login Gagal ! - Sistem Pakar Swamedikasi</title>
<?php
session_start();
include "config/koneksi.php";

$user=$_POST['username'];
$pass=md5($_POST['password']);

$login=mysqli_query($connect, "select * from admin where username='$user' and password='$pass'");

$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);
if ($ketemu>0) {
	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];
	$_SESSION['nama_lengkap'] = $r['nama_lengkap'];
	header("location: index.php");
}
else{
  echo " <link href='css/font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.min.css' rel='stylesheet'>
		<link rel='stylesheet' href='animasi/login/ayam.css'>
		<link rel='stylesheet' href='aset/cinta.css'>
		<link href='css/main.css' rel='stylesheet' type='text/css' media='all'/>
		    <link rel='stylesheet' href='aset/bootstrap.css'>
		<div class='errorpage'> <center><div class='danger'><i class='fa fa-exclamation-triangle'></i></div><br><h1>LOGIN GAGAL!</h1>
        Username dan Password anda salah.<br><br><input name='submit' id='submitku' type=submit style='padding: 6px 12px;' value='COBA LAGI' onclick=location.href='formlogin'></a><br></center></div>

    <script  src='animasi/login/index.js'></script>";
}
?>