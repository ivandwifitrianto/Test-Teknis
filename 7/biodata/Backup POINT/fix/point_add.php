<?php
include "koneksi.php";


$NIS_siswa 	      = $_POST["NIS_siswa"];
$Kode_pelanggaran = $_POST["Kode_pelanggaran"];
$point 		      = $_POST ["point"];

if ($add = mysqli_query($konek, "INSERT INTO pelanggaran_siswa (NIS_siswa,Kode_pelanggaran,point) VALUES 
	('$NIS_siswa','$Kode_pelanggaran','$point')")){
		header("Location: point.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>