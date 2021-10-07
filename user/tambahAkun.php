<?php
	include('akses.php');
	if (isset($_POST["username"])) 
		include 'koneksi.php';

		$username = $_POST["username"];
		$password = $_POST["password"];
		$nama = $_POST["nama"];
		$email = $_POST["email"];

		$message = "";

		if ($username=="") {
			$message = "Username Harus Diisi!";
		}else if ($password=="") {
			$message = "Password Harus Diisi!";
		}else if ($nama=="") {
			$message = "Nama Harus Diisi!";
		}else if ($email=="") {
			$message = "Email Harus Diisi!";
		}else{

	$koneksi->query("INSERT INTO user (username, password, nama, email, level) VALUES ('$username','$password','$nama','$email', user)");

			$message="Berhasil Daftar!";
		}
		$_SESSION["message"] = $message;
	

	header("location:../login.php");
	exit();
?>