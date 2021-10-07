<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" type="text/css" href="katalog.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <center><h3> SELAMAT DATANG</h3>
        <hr color="#2F4F4F" align="center" size="5px">
        <p># PILIHAN MODEL #</p>
        <hr color="#2F4F4F" align="center" width="50%" size="10px">
        <p><img src="img/A.jpg" width="400px" height="500px"></p>
		<p><img src="img/B.jpg" width="400px" height="500px"></p>
		<p><img src="img/C.jpg" width="400px" height="500px"></p>
		<p><img src="img/D.jpg" width="400px" height="500px"></p>
        <hr color="#2F4F4F" align="center" size="5px">
   
   
        <?php
            include 'koneksi.php';
            $getBarang = $koneksi->query("SELECT * FROM barang");
            while ($fetchBarang= $getBarang->fetch_assoc()) {
        ?>

        <table style="display:inline-table;width: 400px; padding: 30px">
            <tr>
                <td>
                    <img style="width: 100%; " src="<?=$fetchBarang["gambar_barang"]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <strong><?=$fetchBarang["nama_barang"]?></strong><br>
                    Rp. <?=number_format($fetchBarang["harga_barang"],2,",",".")?><br>
                    <p align="justify"><?=$fetchBarang["deskripsi_barang"]?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="update.php?id=<?php echo $fetchBarang["id_barang"] ?>"><button class="hem">Update</button></a>
                    <a href="delete.php?id=<?=$fetchBarang["id_barang"]?>"><button class="hem">Delete</button></a>
                </td>
            </tr>
        </table>

        <?php
            }
        ?>
    </center>
</body>
</html>

</<?php include 'footer.php'; ?>