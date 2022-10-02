<?php
include('config.php');
include_once('home_admin.php');
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
<main>
  <div class="container-fluid px-4">
  <div class="container mt-5">
   <form action="" method="POST" enctype="multipart/form-data"> 
  <h3 class="text-primary text-center">Form Tambah Buku</h3>
  <div class="mb-3">
    <label class="form-label">ID Buku</label>
    <input type="number" class="form-control" name="id_buku" placeholder="Input ID Buku">
  </div>
  <div class="mb-3">
    <label class="form-label">Penulis</label>
    <input type="text" class="form-control" name="penulis" >
  </div>
  <div class="mb-3">
    <label class="form-label">Tahun</label>
    <input type="date" class="form-control" name="tahun" >
  </div>
  <div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul" >
  </div>
  <div class="mb-3">
    <label class="form-label">Kota</label>
    <input type="text" class="form-control" name="kota" >
  </div>
  <div class="mb-3">
    <label class="form-label">Penerbit</label>
    <input type="text" class="form-control" name="penerbit" >
  </div>
  <div class="mb-3">
    <label class="form-label">Cover</label>
    <input type="file" class="form-control" name="cover" >
  </div>
  <div class="mb-3">
    <label class="form-label">Sinopsis</label>
    <input type="text" class="form-control" name="sinopsis" >
  </div>
  <div class="mb-3">
    <label class="form-label">Stok</label>
    <input type="number" class="form-control" name="stok" >
  </div>
  <button type="submit" class="btn btn-primary" name="submit">ADD</button>
</form>
   </div> 
   

    <?php
    if (isset($_POST['submit'])) {
        $id_buku=$_POST['id_buku'];
        $penulis=$_POST['penulis'];
        $tahun=$_POST['tahun'];
        $judul=$_POST['judul'];
        $kota=$_POST['kota'];
        $penerbit=$_POST['penerbit'];
        $file=$_FILES['cover']['name'];
        $temp_name=$_FILES['cover']['tmp_name'];
        $upload=move_uploaded_file($temp_name,"cover/".$file);
        $sinopsis=$_POST['sinopsis'];
        $stok=$_POST['stok'];
        
        $query=mysqli_query($db, "INSERT INTO buku(id_buku,penulis,tahun,judul,kota,penerbit,cover,sinopsis,stok) values ('$id_buku', '$penulis', '$tahun', '$judul','$kota', '$penerbit', '$file', '$sinopsis','$stok')");

        

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($query) {
            header("Location:data_buku.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    
    ?>
  </div>
</main>


</div>
</div>
    <script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
</body>
</html>