<?php
include("koneksi.php"); //untuk menghubungkan file koneksi
$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];

$dsave="INSERT INTO mahasiswa(id,nama,nim,jurusan)
		VALUES('$id','$nama','$nim','$jurusan')";
		mysqli_query($conn,$dsave);
header('location:tampildata.php');
?>