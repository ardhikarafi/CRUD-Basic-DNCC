<?php
include "koneksi.php";

$id = $_GET['id'];
$hapus = "DELETE FROM mahasiswa WHERE id='$id'";

mysqli_query($conn,$hapus);
header('location:tampildata.php');

?>