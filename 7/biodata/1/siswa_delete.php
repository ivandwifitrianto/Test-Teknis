<?php

include "../koneksi.php";

$NIS_siswa	= $_GET["nip"];

if($delete = mysqli_query ($konek, "DELETE FROM petugas WHERE nip='$NIS_siswa'")){
	header("Location: siswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>