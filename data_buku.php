<?php
session_start();
include ('config.php');
include ('home_admin.php');
?>
<!-- <div id="layoutSidenav_content"> -->
<main class="mb-5">
    <div class="container-fluid px-4">
    <h1 class="mt-4">Daftar Buku</h1>   
                    <div class="container mt-5">
                    <form action=" " method="GET">
                    <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name ="cari" placeholder="Cari Buku" >
                    </div>
                    <div class="col">
                    <button id="search" type="submit" value="Cari" class="btn btn-warning">Cari</button>
                    <a href="add.php" class="btn btn-success">Tambah Buku</a>
                    <!-- <button id="add" type="submit" value="add" class="btn btn-success">Tambah Buku</button> -->
                    </div>
                    </div>
                    </form>
                    <form action="" enctype="multipart/form-data">
                    <table class="table table-striped table-hover mt-5">
                    <thead class="text-center">
                        <tr class="text-center">
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
                        <tr class="text-center">
                            <td class="align-middle"><?= $data['id_buku']?></td>
                            <td class="align-middle"><?= $data['penulis']?></td>
                            <td class="align-middle"><?= $data['tahun']?></td>
                            <td class="align-middle"><?= $data['judul']?></td>
                            <td class="align-middle"><?= $data['kota']?></td>
                            <td class="align-middle"><?= $data['penerbit']?></td>
                            <td class="align-middle"><img src="cover/<?= $data['cover']?>" alt="" style="width:50px;" class="img-thumbnail"></td>
                            <td class="align-middle"><?= $data['sinopsis']?></td>
                            <td class="align-middle"><?= $data['stok']?></td>
                            <td class="align-middle" >
                        
                                <a href="edit.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                <a href="delete.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                            </td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                    </table>
                    </form>
    </div>
</main>
                    
            <?php include "footer.php"; ?>
            
<script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>