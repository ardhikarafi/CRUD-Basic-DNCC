<?php
include "connect_by_session.php";

$query = "SHOW open tables";
$sql = mysqli_query($conn, $query);
while($data = mysqli_fetch_array($sql)){
	if($data['Table'] == "person" && $data['In_use'] > 0){ //locked
		echo '<script language="javascript">';
		echo 'alert("Table sedang dipakai");
				window.location.href="view.php";';
		echo '</script>';
		die();
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	body {
  background: #3498db;
  font-family: sans-serif;
}

h2 {
  color: #fff;
}

.login {
  padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
}

label {
  font-size: 10pt;
  color: #555;
}

input[type="text"],
input[type="password"],
textarea {
  padding: 8px;
  width: 95%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}

.tombol {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
}
</style>
<body>
	<br/>
	<br/>
	<center><h2>Add Data</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="add_data.php" method="POST">
					<?php
						while($data = mysqli_fetch_array($search)){
					?>
			<div>
				<label>ID:</label>
				<input type="text" name="id" id="id" value="<?php echo $data[0]; ?>"/>
			</div>
			<span>
				<p class="user" align="center"> Active User: <?php echo $_SESSION['username'] ?> </p>
				<p id="timer" align="center"></p>
			</span>
			<div>
				<label>Name:</label>
				<input type="text" name="name" id="username"  />
				
			</div>	
			<div>
				<label>Age:</label>
				<input type="text" name="age" id="age" />
			</div>		
			<div>
				<input type="submit" value="Add Data" class="tombol">
			</div>
			<?php 
				}
			 ?>
		</form>
	</div>
</body>
</html>