<link rel="stylesheet" href="style.css">
<table>
    <tr>
        <th>nama</th>
        <th>nim</th>
        <th>prodi</th>
        <th>pekerjaan</th>
        <th>angkatan</th>
        <th></th>
    </tr>
    <?php
        include "database.php";

        $hasil = mysqli_query($kon,"select * from dataalumni");

        while($data = mysqli_fetch_array($hasil)):
            $id =$data['id'];
            $nim = $data['nim'];
            $nama = $data['nama'];
            $prodi =$data['prodi'];
            $angkatan = $data["angkatan"];
            $kerja = $data["kerja"];
    ?>
        
    <tr>
        <td><?php echo $nama;?></td>
        <td><?php echo $nim;?></td>
        <td><?php echo $prodi;?></td>
        <td><?php echo $kerja;?></td>
        <td><?php echo $angkatan;?></td>
        <td>
            <button id="editdata" class="btn btn-primary" value="<?php echo $id?>">edit</button> 
            <button id="deletedata" class="btn btn-danger" value="<?php echo $id?>">delete</button>
        </td>
    </tr>
    <?php endwhile ?>
</table>