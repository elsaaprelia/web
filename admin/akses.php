<?php
session_start();

if(!isset($_SESSION['admin'])){
	echo '<script>alert("anda harus login");
	document.location="../login.php"; </script>';
}

?>