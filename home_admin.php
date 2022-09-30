<?php
include ('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.rtl.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col "  style="background-color: #e3f2fd;"> <img src="img/logo.png" alt="Logo" width="50" height="50" class=" align-text-top"> Perpustakaan</div>
        <div class="col-10 bg-primary">Aplikasi Perpustakaan Berbasis web</div>
        
    </div>
</div>
<div class="container mt-5">
<form action=" " method="GET">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" name ="cari" placeholder="Cari Buku" >
  </div>
  <div class="col">
  <button id="search" type="submit" value="Cari" class="btn btn-warning">Cari</button>
  <button id="add" type="submit" value="add" class="btn btn-success">Tambah Buku</button>
  </div>
</div>
</form>
<form action="">
<table class="table table-striped mt-5">
  <thead>
    <tr>
        <th scope="col">Id Buku</th>
        <th scope="col">Penulis</th>
        <th scope="col">Tahun</th>
        <th scope="col">Judul</th>
        <th scope="col">Kota</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Cover</th>
        <th scope="col">Sinopsis</th>
        <th scope="col">Stok</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      $ambil = mysqli_query($db,"SELECT * from buku where judul like '%".$cari."%' " );    
     

      }else{
      $ambil = mysqli_query($db,"SELECT * from buku");
      
      }

    while ($data = mysqli_fetch_array($ambil)) {
   ?>
    <tr>
        <td><?= $data['id_buku']?></td>
        <td><?= $data['penulis']?></td>
        <td><?= $data['tahun']?></td>
        <td><?= $data['judul']?></td>
        <td><?= $data['kota']?></td>
        <td><?= $data['penerbit']?></td>
        <td><img src="cover/<?= $data['cover']?>" alt="" style="width:50px;" class="img-thumbnail"></td>
        <td><?= $data['sinopsis']?></td>
        <td><?= $data['stok']?></td>
        <td >
     
            <a href="update.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-sm btn-primary">EDIT</a>
            <a href="delete.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
        </td>
    </tr>
    <?php
    }?>
  </tbody>
</table>
</form>

</div>

<script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
</body>
</html>