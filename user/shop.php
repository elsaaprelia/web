<?php include 'header_user.php'; ?>
<?php include('akses.php'); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Pembelian</title>
   <link rel="stylesheet" type="text/css" href="shop.css">
</head>
<body>
	<h1>Masukkan Format Pesanan</h1>
	<div class="pesanan">
		<form action="shop1.php" method="get">
			NAMA LENGKAP<br><input class="box" type="text" name="nama" placeholder="nama kamu..">
			<br><br>
			EMAIL<br><input class="box" type="text" name="email" placeholder="email.." />
			<br><br>
			ALAMAT<br><textarea class="box" name="komentar" rows="5" cols="20" placeholder="alamat anda.."></textarea>
			<br><br>
			KODE POS<br><input class="box" type="text" name="kode_pos" placeholder="kode pos..">
			<br><br>
			PESANAN<br>
				<input type="radio" name="pesanan"> Gamis Aisya
				<input type="radio" name="pesanan"> Gamis Almira
				<input type="radio" name="pesanan"> Gamis Kharisa
				<input type="radio" name="pesanan"> Gamis Ameera
				<input type="radio" name="pesanan"> Gamis Akifa
				<input type="radio" name="pesanan"> Gamis Shalehah
				<br><br>
		    WARNA<br>
		    	<input type="checkbox" name="warna"> Hijau Melon
		     	<input type="checkbox" name="warna"> Hijau Stabilo
		     	<input type="checkbox" name="warna"> Hijau Sedang
		     	<input type="checkbox" name="warna"> Hijau Tua
		     	<input type="checkbox" name="warna"> Hijau Botol
		     	<input type="checkbox" name="warna"> Hijau Pikok
		     	<input type="checkbox" name="warna"> Biru Muda
		     	<input type="checkbox" name="warna"> Tosca Muda
		     	<input type="checkbox" name="warna"> Tosca Tua
		     	<input type="checkbox" name="warna"> Biru Tua
		     	<input type="checkbox" name="warna"> Biru Dongker
		     	<input type="checkbox" name="warna"> Biru Benhur
		     	<input type="checkbox" name="warna"> Biru Pikok
		     	<input type="checkbox" name="warna"> Krem
		     	<input type="checkbox" name="warna"> Kuning Muda
		     	<input type="checkbox" name="warna"> Kuning Emas
		     	<input type="checkbox" name="warna"> Kuning Sedang
		     	<input type="checkbox" name="warna"> Kuning Busuk
		     	<input type="checkbox" name="warna"> Kuning Kunyit
		     	<input type="checkbox" name="warna"> Kuning Jahe
		     	<input type="checkbox" name="warna"> Orange
		     	<input type="checkbox" name="warna"> Salem
		     	<input type="checkbox" name="warna"> Coklat Susu
		     	<input type="checkbox" name="warna"> Coklat Milo
		     	<input type="checkbox" name="warna"> Mocca
		     	<input type="checkbox" name="warna"> Coklat Tua
		     	<input type="checkbox" name="warna"> Coklat Tutung
		     	<input type="checkbox" name="warna"> Pemda
		     	<input type="checkbox" name="warna"> Putih
		     	<input type="checkbox" name="warna"> Broken White
		     	<input type="checkbox" name="warna"> Burgandi
		     	<input type="checkbox" name="warna"> Rose Tua
		     	<input type="checkbox" name="warna"> Rose Sedang
		     	<input type="checkbox" name="warna"> Rose Muda
		     	<input type="checkbox" name="warna"> Rose Baby
		     	<input type="checkbox" name="warna"> Salem Sedang
		     	<input type="checkbox" name="warna"> Salem Ungu
		     	<input type="checkbox" name="warna"> Ungu Muda
		     	<input type="checkbox" name="warna"> Ungu Terasi
		     	<input type="checkbox" name="warna"> Ungu Terong
		     	<input type="checkbox" name="warna"> Ungu Tua
		     	<input type="checkbox" name="warna"> Merah Bata Sedang
		     	<input type="checkbox" name="warna"> Merah Bata
		     	<input type="checkbox" name="warna"> Merah Cabe
		     	<input type="checkbox" name="warna"> Merah Maroon
		     	<input type="checkbox" name="warna"> Abu-abu
		     	<input type="checkbox" name="warna"> Hitam
		     	<br><br>
		    TOTAL BARANG<br><input class="box" type="text" name="Jumlah" placeholder="jumlah..">
		    <br><br>
			KOMENTAR<br><textarea class="box" name="komentar" rows="5" cols="20" placeholder="..."></textarea>
			<br><br>
			<input type="submit" value="Mulai Proses!" >
		</form>
	</div>
</body>
</html>

<?php include 'footer.php'; ?>