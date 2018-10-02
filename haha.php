<?php 
	include ("./log.php");
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="jquery-1.7.2.min.js"></script>
    <meta charset="UTF-8" />
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php	
		//password = hahaha
		echo '
		<div class="container">
		<div class="header">
			<h2 class="judul">Login</h2>
		</div>
		<div class="isi">
			<form action="" method="POST">
				<div class="group">
					<label for="name">Nama</label>
					<input type="text" name="name" placeholder="Masukkan Nama Anda">
				</div>
				<div class="group">
					<label for="email">Alamat E-mail</label>
					<input type="text" name="email" placeholder="Masukkan Email Anda">
				</div>
				<div class="group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Masukkan Password Anda">
				</div>
				<div class="group">
					<label for="website">Halaman Web</label>
					<input type="text" name="website" placeholder="Masukkan URL website Anda">
				</div>
				<div class="group">
					<input type="submit" name="login" value="Login">
				</div>


			</form>
		</div>
	</div>
	';
?>
</body>
</html>