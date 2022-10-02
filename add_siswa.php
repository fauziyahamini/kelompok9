<?php
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>ADD</title>
</head>
<body>

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
    <br>
    <input name="gender" type="radio" value="Laki-laki" required="required"
> Laki-Laki
        <input name="gender" type="radio" value="Perempuan" required="required"
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
  <button type="submit" class="btn btn-primary" name="submit_siswa">Tambah Siswa</button>
</form>
   </div> 
   

    
  </div>



<!-- </div>
</div> -->
    <script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
</body>
</html>