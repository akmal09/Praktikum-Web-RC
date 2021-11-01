<?php 
include "../koneksi.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];


$query = mysqli_query($kon,"update mahasiswa set nim='$nim', nama='$nama', prodi='$prodi' where id='$id'");



?>