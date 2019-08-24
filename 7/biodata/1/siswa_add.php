<?php
include "../koneksi.php";

$full_name 	= $_POST["full_name"];
$birth_of_date  = $_POST["birth_of_date"];
$phone_number       = $_POST["phone_number"];
$addres 	      = $_POST["addres"];

  $cek = mysqli_num_rows(mysqli_query($konek,"SELECT full_name from users WHERE full_name='$_POST[full_name]'"));
    if ($cek > 0){
    echo "<script>window.alert('Nama yang anda masukan sudah ada')
    window.location='siswa.php'</script>";
    }else {
    mysqli_query($konek, "INSERT INTO users (full_name, date_of_birth, phone_number, addres) VALUES 
  	('$full_name','$birth_of_date','$phone_number','$addres')");
 
    echo "<script>window.alert('Data tersimpan')
    window.location='siswa.php'</script>";
    }
    
?>