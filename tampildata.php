<?php
include "koneksi.php";
$tampil= "SELECT * FROM mahasiswa";
$hasil = mysqli_query($conn,$tampil);
session_start();
echo "Hai, selamat datang ". $_SESSION['nama'];
?>

<h1>TAMPIL DATA MAHASISWA </h1>
<a href="form.php">Tambah data</a>
<table align="center" border="5">
	<tr>
		<th>ID</th>
		<th>NAMA</th>
		<th>NIM</th>
		<th>JURUSAN</th>
		<th colspan=2>AKSI</th>
	</tr>

	<?php
	while($isi=mysqli_fetch_array($hasil))
	{
	?>
		<tr>
			<td><?php echo $isi[0]; ?></td>
			<td><?php echo $isi[1]; ?></td>
			<td><?php echo $isi[2]; ?></td>
			<td><?php echo $isi[3]; ?></td>
			<td><?php echo "<a href=edit.php?id=$isi[0]>EDIT</a>";?></td>
			<td><?php echo "<a href=delete.php?id=$isi[0]>DELETE</a>";?></td>
		
	<?php
	}
	?>	
		</tr>
</table>
	
	

