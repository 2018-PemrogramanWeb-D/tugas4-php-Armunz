<?php
session_start();
if (isset($_POST['login'])){
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'] || empty($_POST['website']))){
		echo "<script type='text/javascript'>alert(\"Form tidak boleh kosong.\");</script>";
	}
	else{
		$name = valid_input($_POST['name']);
		$password = valid_input($_POST['password']);
		$email = valid_input($_POST['email']);
		$website = valid_input($_POST['website']);
		if ($password == "hahaha"){
			$_SESSION['disp_user']=$name;
			header("Location: http://localhost:8080/tugas4/welcome.php");
		}
		else{
			echo "<script type='text/javascript'>alert(\"Invalid Input. Inputkan dengan benar.\");</script>"; 
		}

	}

}

$waktu = "";
$jam = date('H');
if ($jam > 0 && $jam <=11){
	$waktu = "Pagi";
}
else if ($jam > 11 && $jam <=15){
	$waktu = "Siang";
}
else if ($jam > 15 && $jam <= 18){
	$waktu = "Sore";
}
else if ($jam > 18){
	$waktu = "Malam";
}

function valid_input($data){
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripcslashes($data);

	return $data;
}
?>