<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Opsi</th>
    </tr>
    <?php
    
        include "../koneksi.php";
        $hasil = mysqli_query($kon,"select * from mahasiswa order by nim asc");
        $no = 0;
        while($data = mysqli_fetch_array($hasil)):
            $nim = $data['nim'];
            $nama = $data['nama'];
            $prodi =$data['prodi'];
            $no++;
    ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $nim ?></td>
        <td><?php echo $nama ?></td>
        <td><?php echo $prodi ?></td>
        <td>
            <button style="background-color: mediumaquamarine;" id="editButton" value="<?php echo $data['id']; ?>" class="btn btn-success btn-sm edit_data"> <i class="fa fa-edit"></i> <b>Edit</b> </button>
            <button style="background-color: red;" id="deleteButton" value="<?php echo $data['id']; ?>" class="btn btn-danger btn-sm hapus_data"> <i class="fa fa-trash"></i>  <b>Delete</b> </button>
        </td>
    </tr>
        <?php endwhile?>
</table>
