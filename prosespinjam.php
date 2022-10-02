<?php
include "config.php";
include "home_admin.php";
 $id= $_GET['id'];
?>

<div class="container-fluid px-4">
  <div class="container mt-5">
   <form action="" method="POST" enctype="multipart/form-data"> 
  <h3 class="text-primary text-center">Form Tambah Siswa</h3>
  <div class="mb-3">
    <label class="form-label">NIS</label>
    <input type="number" class="form-control" name="nis" placeholder="Input NIS Siswa">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Siswa</label>
    <input type="text" class="form-control" name="nama" >
  </div>
  <div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <select class="form-control" name="gender" >
    <option value="">--Pilih Jenis Kelamin--</option>
    <option value="L">Laki-laki</option>   
    <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" >
  </div>
  <div class="mb-3">
    <label class="form-label">Kelas</label>
    <select class="form-control" name="kelas" >
    <option value="">--Pilih Kelas--</option>
    <?php
     
        $sql = mysqli_query($db, "SELECT * from kelas");

        while ($data= mysqli_fetch_array($sql)) {
        
    ?>
        <option value="<?php echo $data['id_kelas'] ?>" ><?php echo $data['nama_kelas'] ?></option>
         
          <?php
          }?>          
    </select>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Tambah Siswa</button>
</form>
   </div> 
   

    <?php
    if (isset($_POST['submit'])) {
        $nis=$_POST['nis'];
        $nama=$_POST['nama'];
        $gender=$_POST['gender'];
        $alamat=$_POST['alamat'];
        $kelas=$_POST['kelas'];
        
        $query=mysqli_query($db, "INSERT INTO siswa(nis,nama,jenis_kelamin,alamat,id_kelas) values ('$nis', '$nama', '$gender', '$alamat','$kelas')");

        

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($query) {
            header("Location:data_siswa.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    
    ?>
  </div>