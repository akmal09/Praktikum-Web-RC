<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "prak_minggu_7_pemweb";

$kon = mysqli_connect($host,$user,$password,$db);

if (!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}

?>