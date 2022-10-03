<?php
session_start();
include 'config.php';
include 'home_admin.php';

if(isset($_POST['update']))
{	
    //   $id= $_POST['id_buku'];
    
      $id_buku=$_POST['id_buku'];
      $penulis=$_POST['penulis'];
      $tahun=$_POST['tahun'];
      $judul=$_POST['judul'];
      $kota=$_POST['kota'];
      $penerbit=$_POST['penerbit'];
      $file=$_FILES['cover']['name'];
      $sinopsis=$_POST['sinopsis'];
      $stok=$_POST['stok'];

    // $file=$_FILES['cover']['name'];
    if($file != "") {
      $temp_name=$_FILES['cover']['tmp_name'];  
      $file_baru=$file;
      $upload=move_uploaded_file($temp_name,"cover/".$file_baru);
   
      // update user data
      $result = mysqli_query($db, "UPDATE buku SET id_buku='$id_buku',penulis='$penulis',tahun='$tahun', judul='$judul',kota='$kota',penerbit='$penerbit', cover='$file_baru',sinopsis='$sinopsis', stok='$stok' WHERE id_buku=$id_buku");
    
      // Redirect to homepage to display updated user in list
      if ($result) {
      header("Location: home_admin.php");
      } else {
      echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";
      }
    
    
    }else{
      $result = mysqli_query($db, "UPDATE buku SET id_buku='$id_buku',penulis='$penulis',tahun='$tahun', judul='$judul',kota='$kota',penerbit='$penerbit',sinopsis='$sinopsis', stok='$stok' WHERE id_buku=$id_buku");

      if ($result) {
        header("Location: data_buku.php");
      } else {
        echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";
      }
    }
}

?>

<?php
    $id = $_GET['id'];
    
    // echo $id;
    $result = mysqli_query($db,"SELECT * FROM buku WHERE id_buku=$id");
    $data = mysqli_fetch_assoc($result)
   

    ?>

<main class="mb-5">
  <div class="container-fluid">
  <div class="container mt-5">
<form action="" method="POST" enctype="multipart/form-data"> 

<div class="card  shadow">
      <div class="card-header ">
        Form Tambah Buku
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-2">
              <label class="form-label">ID Buku</label>
              <input type="number" class="form-control" name="id_buku" value="<?php echo $_GET['id'];?>" placeholder="Masukan ID Buku">
              </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">Penulis</label>
              <input type="text" class="form-control" value="<?php echo $data['penulis'];?>" name="penulis" >
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Tahun</label>
            <input type="number" class="form-control" value="<?php echo $data['tahun'];?>" name="tahun" >
          </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" value="<?php echo $data['judul'];?>" name="judul" >
          </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Kota</label>
            <input type="text" class="form-control"  value="<?php echo $data['kota'];?>" name="kota" >
          </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
            <label class="form-label">Penerbit</label>
            <input type="text" class="form-control" value="<?php echo $data['penerbit'];?>"  name="penerbit" >
          </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Cover</label>
            <img src="cover/<?php echo $data['cover'];?>" alt="" style="width:50px;">
            <input type="file" class="form-control" name="cover" >
          </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
            <label class="form-label">Stok</label>
            <input type="text" class="form-control" value="<?php echo $data['stok'];?>" name="stok" >
          </div>
          </div>
      </div>
      <div class="row">
        <div class="form-group">
            <label class="form-label">Sinopsis</label>
            <textarea class="form-control" name="sinopsis" value="<?php echo $data['sinopsis'];?>" rows="5"></textarea>
          </div>
      </div>
    </div>
    <div class="card-footer">
       <button type="submit" name="update" class="btn btn-primary float-right">Update</button>
        </div>
               
   </div>
  
</form>
</div>
  </div>
</main>

<?php include "footer.php";?>