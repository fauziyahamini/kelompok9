<?php
session_start();
$id = $_SESSION['id'];
include "config.php";
include "home_admin.php";
 $idp= $_GET['id'];
 $query = mysqli_query($db,"SELECT * FROM petugas WHERE nip = $id");
 $fetch = mysqli_fetch_assoc($query);
 $book = mysqli_query($db,"SELECT * FROM buku WHERE id_buku = $idp");
 $data_b = mysqli_fetch_assoc($book);
 $tgl = date('Y-m-d');
 $tgl1 = date_create(date('Y-m-d'));
 $tgl1 = date_add($tgl1,date_interval_create_from_date_string('14 days'));
 $tgl1 = date('Y-m-d');
 echo $tgl1;
?>

<div class="container-fluid px-4 mb-5">
  <div class="container mt-5">
   <form action="" method="POST" enctype="multipart/form-data"> 
  <h3 class="text-primary text-center">Form Peminjaman</h3>
  <div class="mb-3">
    <label class="form-label">Penanggung Jawab</label>
    <input type="hidden" name="idp" value="<?= $fetch['nip']; ?>">
    <input type="text" class="form-control" value="<?= ucwords($fetch['nama']);?>" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal Peminjaman</label>
    <input type="date" class="form-control" name="tgl" value="<?= $tgl;?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal Pengembalian</label>
    <input type="date" class="form-control" name="tgl2" value="<?= $tgl1;?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Buku</label>
    <input type="hidden" name="buku" value="<?= $data_b['id_buku'];?>"> 
    <input type="text" class="form-control" value="<?= $data_b['judul']?>" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label">Siswa</label>
    <select class="form-control" name="siswa" >
    <option value="">--Pilih Siswa--</option>
    <?php
     
        $sql = mysqli_query($db, "SELECT * from siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas");

        while ($data= mysqli_fetch_array($sql)) {
        
    ?>
        <option value="<?php echo $data['nis'] ?>"> <?php echo $data['nama'] ?>&nbsp; Kelas <?= $data['nama_kelas'];?></option>
         
          <?php
          }?>          
    </select>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Selesai</button>
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