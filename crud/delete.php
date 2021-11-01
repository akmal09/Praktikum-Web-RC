<?php
include "../koneksi.php";


$id = $_POST['hapusId'];


$query = mysqli_query($kon,"delete from mahasiswa where id='$id'");
?>