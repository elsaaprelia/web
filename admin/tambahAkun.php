<?php
	include('akses.php');
	if (isset($_POST["username"])) 
		include 'koneksi.php';

		$username = $_POST["username"];
		$password = $_POST["password"];
		$nama = $_POST["nama"];
		$email = $_POST["email"];

		$message = "";

		if ($nama=="") {
			$message = "Nama Harus Diisi!";
		}else if ($email=="") {
			$message = "Email Harus Diisi!";
		}else if ($username=="") {
			$message = "Username Harus Diisi!";
		}else if ($password=="") {
			$message = "Password Harus Dipilih!";
		}else{

	$koneksi->query("INSERT INTO user VALUES (null,'".$username."','".$password."','".$nama."','".$email."', user)");

			$message="Berhasil Daftar!";
		}
		$_SESSION["message"] = $message;
	

	header("location:register.php");
	exit();
?>