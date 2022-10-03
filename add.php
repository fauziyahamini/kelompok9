<?php
include('config.php');
include_once('home_admin.php');
?>

<?php
    if (isset($_POST['submit_buku'])) {
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
  <div class="container-fluid px-5">
  <div class="container mt-5">
   <form action="" method="POST" enctype="multipart/form-data"> 

   <!--  -->
   <div class="card  shadow">
      <div class="card-header ">
        Form Tambah Buku
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-2">
              <label class="form-label">ID Buku</label>
              <input type="number" class="form-control" name="id_buku" placeholder="Masukan ID Buku">
              </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">Penulis</label>
              <input type="text" class="form-control" name="penulis" >
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Tahun</label>
            <input type="number" class="form-control" name="tahun" >
          </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" >
          </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Kota</label>
            <input type="text" class="form-control" name="kota" >
          </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
            <label class="form-label">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" >
          </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Cover</label>
            <input type="file" class="form-control" name="cover" >
          </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
            <label class="form-label">Stok</label>
            <input type="text" class="form-control" name="stok" >
          </div>
          </div>
      </div>
      <div class="row">
        <div class="form-group">
            <label class="form-label">Sinopsis</label>
            <textarea class="form-control" name="sinopsis" rows="5"></textarea>
          </div>
      </div>
    </div>
    <div class="card-footer">
       <button type="submit" name="submit_buku" class="btn btn-primary float-right">Simpan</button>
        </div>
               
   </div>
</form>
   </div> 
   

    
  </div>
</main>


</div>
</div>
    <script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
</body>
</html>