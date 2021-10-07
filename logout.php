<?php
	include "koneksi.php";
	include "session.php";
	session_start();
	session_destroy();// Menghapus Sessions
	header("location: login.php"); // Langsung mengarah ke Home index.php
?>