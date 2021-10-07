<?php
	include 'header_user.php';
	include('akses.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<center>
		<h1>Buat Akun Baru</h1>
	<form action="tambahAkun.php" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td> : </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td> : </td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td> : </td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button>Daftar</button></td>
		</tr>
	</table>
	</form>
	<?php
		if (isset($_SESSION["message"])) {
			echo $_SESSION["message"];
			unset($_SESSION["message"]);
		}
	?>
	</center>
</body>
</html>


<?php include 'footer.php'; ?>