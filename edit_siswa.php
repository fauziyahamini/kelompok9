<?php
include 'config.php';
include 'home_admin.php';

if(isset($_POST['update']))
{	
 
    
      $nis=$_POST['nis'];
      $nama=$_POST['nama'];
      $gender=$_POST['gender'];
      $alamat=$_POST['alamat'];
      $kelas=$_POST['kelas'];
     
   
      // update user data
      $result = mysqli_query($db, "UPDATE siswa SET nis='$nis',nama='$nama',jenis_kelamin='$gender', alamat='$alamat',id_kelas='$kelas' WHERE nis=$nis");
    
      // Redirect to homepage to display updated user in list
      if ($result) {
      header("Location: data_siswa.php");
      } else {
      echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";
      }
}

?>

<?php
    $id = $_GET['id'];
    
    // echo $id;
    $result = mysqli_query($db,"SELECT siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.alamat,kelas.nama_kelas from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas WHERE nis='".$id."'");
    $data = mysqli_fetch_assoc($result)
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
<form action="" method="POST" enctype="multipart/form-data"> 
  <div class="mb-3">
    <label class="form-label">NIS</label>
    <input type="number" class="form-control" name="nis" value="<?php echo $_GET['id'];?>" placeholder="">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control"  value="<?php echo $data['nama'];?>" name="nama" >
  </div>
  <div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <br>
    <input name="gender" type="radio" value="Laki-laki" <?php if($data['jenis_kelamin']=='Laki-laki') echo 'checked'?> 
> Laki-Laki
        <input name="gender" type="radio" value="Perempuan"<?php if($data['jenis_kelamin']=='Perempuan') echo 'checked'?> 
> Perempuan
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" class="form-control" value="<?php echo $data['alamat'];?>" name="alamat" >
  </div>
  <div class="mb-3">
    <label class="form-label">Kelas</label>
    <select class="form-control" name="kelas" >
    <!-- <option value="">--Pilih Jurusan--</option> -->
    <?php
     
        $sql = mysqli_query($db, "SELECT * from kelas");

        while ($data= mysqli_fetch_array($sql)) {
        
    ?>
        <option name="jurusan"value="<?php echo $data['id_kelas'] ?>" ><?php echo $data['nama_kelas'] ?></option>
         
          <?php
          }?>          
    </select>
  </div>
 
  <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
</form>
</div>

<script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
</body>
</html>