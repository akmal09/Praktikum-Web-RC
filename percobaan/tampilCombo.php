<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
    </tr>
    <?php
    include "koneksi.php";
    // $prodi = $_POST['prodi'];
    // echo $prodi;
    if(isset($_POST['prodi'])){
        $prodi = $_POST['prodi'];
    }else{
        $prodi='';
    }
    
    $query = "select * from mahasiswa where prodi='".$prodi."' order by nim asc";
    // $query = "select * from mahasiswa order by nim asc";
    $hasil = mysqli_query($kon,$query);
    $no = 0;
    while($data = mysqli_fetch_array($hasil)):
        $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><a href="#">Delete</a></td>
    </tr>
    <?php endwhile ?>
</table>