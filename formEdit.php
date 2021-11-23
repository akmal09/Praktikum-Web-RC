<?php
    include "database.php";
    $id = $_GET['id'];
    $query=mysqli_query($kon, "SELECT * FROM dataalumni WHERE id='$id'") or die(mysqli_error($koneksi));
    $data=mysqli_fetch_array($query);
?>

    <form id="form_mahasiswa_edit" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>" />
            
            <label class="tulisan">NIM </label>
            <input type="number" name="nim" value="<?php echo $data['nim'];?>"><br>
    
            <label class="tulisan">Nama</label>
            <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br>

            <label class="tulisan">Angkatan</label>
            <input type="text" name="angkatan" value="<?php echo $data['angkatan'];?>"><br>

            <label class="tulisan">pekerjaan</label>
            <input type="text" name="pekerjaan" value="<?php echo $data['kerja'];?>"><br>
    
            <label class="tulisan">Prodi</label>
            <select name="prodi">
                <option value="informatika" <?php if($data['prodi']=="informatika" ) echo "selected"; ?>>Teknik informatika</option>
                <option value="Elektro" <?php if($data['prodi']=="Elektro" ) echo "selected"; ?>>Teknik Elektro</option>
                <option value="Sipil" <?php if($data['prodi']=="Sipil" ) echo "selected"; ?>>Teknik Sipil</option>
                <option value="Geofisika" <?php if($data['prodi']=="Geofisika" ) echo "selected"; ?>>Teknik Geofisika</option>
                <option value="Matematika" <?php if($data['prodi']=="Matematika" ) echo "selected"; ?>>Matematika</option>
            </select>     
            
            <input type="submit" value="ubah" class="btn btn-success" id="simpanFile">
            <button type="button" id="batalFile" class="btn btn-warning">Batal</button>
    </form>