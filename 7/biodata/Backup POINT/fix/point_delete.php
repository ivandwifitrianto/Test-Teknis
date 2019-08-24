<?php

include "koneksi.php";

$Id_pelanggaran_siswa	= $_GET["Id_pelanggaran_siswa"];

if($delete = mysqli_query ($konek, "DELETE FROM pelanggaran_siswa WHERE Id_pelanggaran_siswa='$Id_pelanggaran_siswa'")){
	header("Location: point.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>