<?php
	include('akses.php');
	if (isset($_POST["nama_barang"])) 
		include 'koneksi.php';

		$nama_barang = $_POST["nama_barang"];
		$deskripsi_barang = $_POST["deskripsi_barang"];
		$harga_barang = $_POST["harga_barang"];
		$gambar_barang = $_FILES["gambar_barang"];

		$message = "";

		if ($nama_barang=="") {
			$message = "Nama Barang Harus Diisi!";
		}else if ($deskripsi_barang=="") {
			$message = "Deskripsi Barang Harus Diisi!";
		}else if ($harga_barang=="") {
			$message = "Harga Barang Harus Diisi!";
		}else if (!isset($gambar_barang["tmp_name"]) || $gambar_barang["tmp_name"]=="") {
			$message = "Gambar Barang Harus Dipilih!";
		}else{
			
			$filePath = "../img/".basename($gambar_barang["name"]);
			move_uploaded_file($gambar_barang["tmp_name"], $filePath);

			$koneksi->query("INSERT INTO barang VALUES (null,'".$nama_barang."','".$deskripsi_barang."','".$harga_barang."','".$filePath."')");

			$message="Berhasil Menambah Barang Baru!";
		}
		$_SESSION["message"] = $message;
	

	header("location:insert.php");
	exit();
?>