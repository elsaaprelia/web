<?php
session_start();

if(!isset($_SESSION['user'])){
	echo '<script>alert("anda harus login");
	document.location="../login.php"; </script>';
}

?>