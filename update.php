<?php
include "koneksi.php";

$id = $_GET['id'];
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$jurusan= $_GET['jurusan'];


$ubah = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan'
		WHERE id='$id'";

		
mysqli_query($conn,$ubah);
mysqli_query('UNLOCK TABLES');
header("location:tampildata.php");



?>