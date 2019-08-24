<?php
include "../koneksi.php";

$nomorpetugas 	  = $_POST["nip"];
$namapetugas	  = $_POST["nama_ptgs"];
$jeniskelamin     = $_POST["jk"];
$tempatlahir      = $_POST["tempat_lahir"];
$tanggallahir 	  = $_POST["tgl_lahir"];
$Alamat 	      = $_POST["alamat"];
$jabatan 	      = $_POST["jabatan"];

if ($edit = mysqli_query($konek, "UPDATE petugas SET nip='$nomorpetugas', nama_ptgs='$namapetugas', jk='$jeniskelamin', tempat_lahir='$tempatlahir', tgl_lahir='$tanggallahir', alamat='$Alamat', 
	jabatan='$jabatan' WHERE nip='$nomorpetugas'")){
		header("Location: siswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>