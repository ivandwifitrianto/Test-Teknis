username, harus huruf kecil dan terdiri dari 8 karakter. Selain itu invalid

<form action="somefile.php">
    <input type="text" name="username" placeholder="Username" pattern="[a-z]{1,8}">
</form>

password, harus terdapat huruf kecil, angka, dan huruf besar dan terdiri dari 8 karakter, selain itu invalid
<form action="somefile.php">
    <input type="password" name="password" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
</form>



email, hanya valid ketika mengandung char '@' diantara dua string, mengandung titik dan domain dan hanya boleh huruf kecil.

function validasi_email($string)

{

$cektitik   = strpos($string, ‘.’);

$cek        = strpos($string, ‘@’);

$panjang    = strlen($string);

return !($cektitik === false || $cek === false || $panjang === false || $cektitik – $cek < 3 || $length – $cektitik < 3);

}