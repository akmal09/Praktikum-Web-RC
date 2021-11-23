<?php 
include "database.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$kerja = $_POST['pekerjaan'];

$query = mysqli_query($kon,"update dataalumni set nama='$nama', nim='$nim', angkatan='$angkatan', kerja='$kerja', prodi='$prodi' where id='$id'");


?>
