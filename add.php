<?php
    include "database.php";

    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $angkatan = $_POST["angkatan"];
    $kerja = $_POST["pekerjaan"];

    $sql = "insert into dataalumni (nama,nim,angkatan,kerja,prodi) values('$nama','$nim','$angkatan','$kerja','$prodi')";

    $hasil = mysqli_query($kon,$sql);
?>