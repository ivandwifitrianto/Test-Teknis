<?php
session_start();
include "koneksi.php";
$id                = $_POST['id'];
$namapendek  	 	   = $_POST['username'];
$katasandi         = $_POST['password'];
$mail              = $_POST['email'];
$cek               = mysqli_query($konek, "select * from users where username='$namapendek' and password='$katasandi'");
$result            = mysqli_num_rows($cek);
if($result>0){
    $user = mysqli_fetch_array($cek);
    session_start();
    $_SESSION['username'] = $user['username'];
    header("location:1/index.php");
}else{
  echo"<script>alert('username atau password salah')</script>";
  echo"<meta http-equiv='refresh' content='1 url=index.php'>";
 
	
}
?>