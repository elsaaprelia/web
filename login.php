<?php include 'header.php';
include('proses_login.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">	
</head>
<body>
	<h5>Login<br>Silahkan login dear!</h5>
	<div class="kotak">
		<form method="POST" action="proses_login.php">
		    <label>Username</label><br>
		    <input type="text" class="login" name="username" placeholder="Username.."><br>
		    
		    <label>Password</label><br>
		    <input type="password" class="login" name="password" placeholder="Password.."><br>
		    
		    <center>
		    
		    <br><br>
		    <button value="Sign in" name="submit" class="tombol">Login</button>
		    </center>
		    </p>
		  </form>
		</div>
</body>
</html>

<?php include 'footer.php'; ?>