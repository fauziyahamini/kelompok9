<?php
session_start();
include('config.php');
include_once('home_admin.php');
?>

<?php
    if (isset($_POST['submit_siswa'])) {
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

  <main class="mb-5">
  <div class="container-fluid mx-auto mt-5">
    <div class="container">
      
    <form action="" method="POST" enctype="multipart/form-data"> 
      <div class="card mx-auto shadow-lg" style="width:50rem;">
      <div class="card-header">
        Form Tambah Siswa
      </div>
      <div class="card-body">
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
    <br>
    <input name="gender" type="radio" value="L" required="required"
> Laki-Laki
        <input name="gender" type="radio" value="P" required="required"
> Perempuan
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
      </div>

      <div class="card-footer">
      <button type="submit" class="btn btn-primary" name="submit_siswa">Tambah Siswa</button>
      </div>

      </div>
 
</form>
    </div>
        </div>
  </main>



  <?php include "footer.php"; ?>
