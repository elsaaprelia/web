<?php include 'header.php'; ?>

<?php
	include('akses.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Create</title>
	<link rel="stylesheet" type="text/css" href="styleCRUD.css">
</head>
<body>
	<center>
		<h1>Insert Product</h1>
	<form action="tambahBarang.php" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td>Nama Barang</td>
			<td> : </td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Deskripsi Barang</td>
			<td> : </td>
			<td><textarea name="deskripsi_barang"></textarea></td>
		</tr>
		<tr>
			<td>Harga Barang</td>
			<td> : </td>
			<td><input type="number" name="harga_barang"></td>
		</tr>
		<tr>
			<td>Gambar Barang</td>
			<td> : </td>
			<td><input type="file" name="gambar_barang"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button>Save Product</button></td>
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