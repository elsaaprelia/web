<?php
	include('akses.php');
	if (isset($_GET["id"])) {
		include 'koneksi.php';

		$koneksi->query("DELETE FROM barang WHERE id_barang = ".$_GET["id"]);

	}
	header("location:katalog.php");
	exit();
?>