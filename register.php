<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$pass = $_POST['pass'];

$login = mysqli_query($conn,"select * from user where nama='$nama' and password='$pass'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:tampildata.php");
}else{
	header("location:login.php");	
}

?>