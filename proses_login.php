<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "username or Password is invalid";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

include "koneksi.php";

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($koneksi,$username);
$password = mysqli_real_escape_string($koneksi,$password);


$sql = "select * from user where password='$password' AND username='$username'";
$query = mysqli_query($koneksi,$sql);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$c = mysqli_fetch_array($query);

		$_SESSION['username'] = $c['username'];
		$_SESSION['level'] = $c['level'];
		
		if($c['level']=="admin"){
			$_SESSION['admin'] = $c['username'];
			echo '<script>alert("Masuk admin");
			document.location="admin/index.php"; </script>';
		}
		elseif($c['level']=="user"){
			$_SESSION['user'] = $c['username'];
			echo '<script>alert("Masuk user");
			document.location="user/index.php"; </script>';
		}
		else{
			die("eror");
		}

	
} else {
?>
<script language="JavaScript">
		alert('username atau Password Salah !');
		setTimeout(function() {window.location.href='#'},10);
	</script>
<?php
}
mysqli_close($koneksi); // Menutup koneksi
}
}
?>
