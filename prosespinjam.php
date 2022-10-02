<?php
ob_start();
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
 $tgl1 = date_create($tgl);
 $tgl1 = date_add($tgl1,date_interval_create_from_date_string('14 days'));
?>

<div class="container-fluid px-4 mb-5">
  <div class="container mt-5">
   <form action="" method="post"> 
  <h3 class="text-primary text-center">Form Peminjaman</h3>
  <div class="mb-3">
    <label class="form-label">Penanggung Jawab</label>
    <input type="hidden" name="idp" value="<?= $fetch['nip']; ?>">
    <input type="text" class="form-control" value="<?= ucwords($fetch['nama']);?>" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal Peminjaman</label>
    <input type="date" class="form-control" name="tanggal" value="<?= $tgl;?>" readonly>
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal Pengembalian</label>
    <input type="date" class="form-control" name="tanggal1" value="<?= date_format($tgl1,'Y-m-d');?>" readonly>
  </div>
  <div class="mb-3">
    <label class="form-label">Buku</label>
    <input type="hidden" name="buku" value="<?= $data_b['id_buku'];?>">
    <input type="hidden" name="kuantitas" value="1">
    <input type="text" class="form-control" value="<?= $data_b['judul']?>" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label">Siswa</label>
    <select class="form-control" name="siswa" required>
    <option >Nama Siswa</option>
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
    <?php
    if (isset($_POST['submit'])) {
        $petugas = $_POST['idp'];
        $tanggal = $_POST['tanggal'];
        $tanggal1 = $_POST['tanggal1']; 
        $buku= $_POST['buku'];
        $kuantitas=$_POST['kuantitas'];
        $siswa=$_POST['siswa'];
        $tambah = mysqli_query($db,"INSERT INTO peminjaman VALUES('','$siswa','$petugas','$tanggal','$tanggal1')");
        $select = mysqli_query($db,"SELECT * FROM peminjaman ORDER BY id_peminjaman DESC");
        $data = mysqli_fetch_assoc($select);
          $tambah2 = mysqli_query($db,"INSERT INTO detail_peminjaman VALUES ('','$buku','$data[id_peminjaman]','$kuantitas')");
          header('location:peminjaman.php');
        }  
    ?>
   </div> 
  </div>