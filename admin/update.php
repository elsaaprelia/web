<?php include 'header.php'; ?>

<?php
	include('akses.php');

	if(!isset($_GET["id"])){
		header("location:katalog.php");
		exit();
	}

	include 'koneksi.php';

	$id = $_GET["id"];

	$getData = $koneksi->query("SELECT * FROM barang WHERE id_barang = ".$id);

	if ($getData->num_rows == 0 ) {
		header("location:katalog.php");
		exit();
	}

	$getData = $getData->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Update</title>
	<link rel="stylesheet" type="text/css" href="styleCRUD.css">
</head>
<body>
	<center>
		<h1>Update Product</h1>
	<form action="updateBarang.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$_GET["id"]?>">
		<table>
		<tr>
			<td>Nama Barang</td>
			<td> : </td>
			<td><input type="text" name="nama_barang" value="<?=$getData["nama_barang"]?>"></td>
		</tr>
		<tr>
			<td>Deskripsi Barang</td>
			<td> : </td>
			<td><textarea name="deskripsi_barang"><?=$getData["deskripsi_barang"]?></textarea></td>
		</tr>
		<tr>
			<td>Harga Barang</td>
			<td> : </td>
			<td><input type="number" name="harga_barang" value="<?=$getData["harga_barang"]?>"></td>
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