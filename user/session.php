<?php
error_reporting(0);
include "koneksi.php";
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['username'];

$sql = "select * from user where username='$user_check'" ;
$ses_sql=mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
$nama = $row['nama'];
$level =$row['level'];
$pass =$row['password'];
$email = $row['email'];

?>