<?php 
	include ("./log.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="jquery-1.7.2.min.js"></script>
    <meta charset="UTF-8" />
	<title>Welcome Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
			margin: 200px;
			text-align: center;
			color: #FF5733;
		}
	</style>
</head>
<body>
	<?php
	$nama = $_SESSION['disp_user'];
	echo "Selamat datang $nama.<br>";
	echo "Selamat $waktu"; 
	?>	
</body>
</html>