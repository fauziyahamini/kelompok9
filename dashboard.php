<?php
session_start();
$id = $_SESSION['id'];
include ('config.php');
include ('home_admin.php');
?>
<div class="container mt-5">
    <h2 class="text-center text-uppercase text-primary mb-5">Katalog Buku</h2>
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <?php 
      $query = mysqli_query($db, "SELECT * FROM buku");
    ?>
  <div class="row mb-5">
    <?php while($data = mysqli_fetch_assoc($query)){?>
    <div class="col-2 mb-5">
        <div class="card">
          <img src="img/cover1.jfif" class="card-img-top" width="30px">
          <div class="card-body text-center p-0">
            <h5 class="card-title"><?= $data['judul'];?></h5>
            <p><a href="view.php?id=<?=$data['id_buku'];?>" class="text-decoration-none text-gray">Detail</a></p>
          </div>
        </div>
    </div>
    <?php }?>
  </div>
  
