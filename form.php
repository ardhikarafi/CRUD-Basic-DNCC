<html>

<head>
	<title>Data Mahasiswa</title>
</head>

<body>
<form action="simpan.php" method="post">
<table border="0" width="100" align="center">
	<tr>
		<td colspan="3" align="center">FORM MAHASISWA</td>
	</tr>
	<!--MEMBUAT BARIS ID-->
	<tr>
		<td align="left">ID</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="id"/><br/> <!--NAME = ID-->
		</td>
	</tr>
	<!--MEMBUAT BARIS NAMA-->
	<tr>
		<td align="left">NAMA </td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="nama"/><br/> <!--NAME = NAMA-->
		</td>
	</tr>
	<!--MEMBUAT BARIS NIM-->
	<tr>
		<td align="left">NIM</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="nim"/><br/> <!--NAME = NIM-->
		</td>
	</tr>
	<!--MEMBUAT BARIS JURUSAN-->
	<tr>
		<td align="left">JURUSAN</td>
		<td align="left">:</td>		
		<td align="left">
			<input type="text" name="jurusan"/><br/> <!--NAME = jurusan-->
		</td>
	</tr>
	
	<!--MEMBUAT TOMBOL SUBMIT-->
	<tr>
		<td colspan="3" align="center">
		<input type="submit" name="Simpan"/>
		<input type="reset" name="Reset"/></td>		
	</tr>
</table>
</form>
</body>

</html>