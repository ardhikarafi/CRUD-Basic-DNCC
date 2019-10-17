<?php
include "koneksi.php";

#region CEK USER
$query = "SELECT * FROM active_user WHERE name IS NOT NULL;";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if(isset($data['name'])){
	if($data['name'] != $_SESSION['username']){
		echo '<script language="javascript">';
		echo 'alert("Table sedang dipakai");
				window.location.href="view.php";';
		echo '</script>';
		die();
	}
}else{
	$insert = mysqli_query($conn, "INSERT INTO active_user VALUES('".$_SESSION['username']."')");
	if (!$insert) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
}
#endregion

$id = $_GET['id'];
$query = "SELECT * from person where ID='$id'";
$search = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script src="timer.js">
	</script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="save_edit_data.php" class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST">
					<span class="login100-form-title">
						Edit person
					</span>
					<span>
						<p class="user" align="center"> Active User: <?php echo $_SESSION['username'] ?> </p>
						<p id="timer" align="center"></p>
					</span>

					<?php
						while($data = mysqli_fetch_array($search)){
					?>
					<div class="wrap-input100 validate-input m-b-16" data-validate="">
						<input class="input100" type="number" name="ID" placeholder="" readonly value="<?php echo $data[0]; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="nama" placeholder="Person Name" value="<?php echo $data[1]; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="number" name="nim" placeholder="Age" value="<?php echo $data[2]; ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="number" name="jurusan" placeholder="Age" value="<?php echo $data[2]; ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="text-right p-t-13 p-b-23"></div>
						
					<?php
						}
					?>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Save
						</button>
					</div>

				</form>

					<div class="text-right p-t-13 p-b-23"></div>

				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>