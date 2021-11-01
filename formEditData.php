<?php
 include "koneksi.php";
 $id=$_GET['id'];
 
 $query=mysqli_query($kon, "SELECT * FROM mahasiswa WHERE id='$id'") or die(mysqli_error($koneksi));
 $data=mysqli_fetch_array($query);
?>
    <form id="form_mahasiswa_edit" method="post">
        <!-- Untuk passing nilai id ke query -->
        <input type="hidden" name="id" id="id" required="" value="<?php echo $data['id']; ?>" />

        <label>NIM </label>
        <input type="number" name="nim" value="<?php echo $data['nim'];?>"><br>

        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br>

        <label>Prodi</label>
        <select name="prodi">
            <option value="informatika" <?php if($data['prodi']=="informatika" ) echo "selected"; ?>>Teknik informatika</option>
            <option value="Elektro" <?php if($data['prodi']=="Elektro" ) echo "selected"; ?>>Teknik Elektro</option>
            <option value="Sipil" <?php if($data['prodi']=="Sipil" ) echo "selected"; ?>>Teknik Sipil</option>
            <option value="Geofisika" <?php if($data['prodi']=="Geofisika" ) echo "selected"; ?>>Teknik Geofisika</option>
            <option value="Matematika" <?php if($data['prodi']=="Matematika" ) echo "selected"; ?>>Matematika</option>
        </select>       
        
        <input type="submit" value="ubah" id="simpanFile">
        <button type="button" id="batalFile">Batal</button>
    </form>
