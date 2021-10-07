<?php
	include('akses.php');
	if (isset($_POST["nama_barang"])) 
		include 'koneksi.php';

		$id_barang = $_POST["id"];
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
		}else{
			if (isset($gambar_barang["tmp_name"]) && $gambar_barang["tmp_name"]!=="") {
				$filePath = "upload/".basename($gambar_barang["name"]);
				move_uploaded_file($gambar_barang["tmp_name"], $filePath);

				$koneksi->query("UPDATE barang SET gambar_barang='".$filePath."' WHERE id_barang = ".$id_barang);

			}

				$koneksi->query("UPDATE barang SET nama_barang='".$nama_barang."',deskripsi_barang='".$deskripsi_barang."',harga_barang='".$harga_barang."' WHERE id_barang=".$id_barang);

				$message="Berhasil Mengedit Barang!";
		}
		$_SESSION["message"] = $message;

		header("location:update.php?id=".$id_barang);
		exit();
	

	header("location:insert.php");
	exit();
?>