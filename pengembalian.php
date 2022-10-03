<?php
session_start();
include "config.php";
include "home_admin.php";
$my = mysqli_query($db,"SELECT * FROM peminjaman JOIN detail_peminjaman ON peminjaman.id_peminjaman = detail_peminjaman.id_peminjaman
                                                 JOIN siswa ON peminjaman.id_siswa = siswa.nis");
$my1 = mysqli_query($db,"SELECT * FROM detail_peminjaman JOIN buku ON detail_peminjaman.id_buku = buku.id_buku");
?>

<main class="mb-5">
    <div class="container-fluid px-4">
    <h1 class="mt-4">Data Peminjam Buku Perpustakaan</h1>   
                    <div class="container mt-5">
                    <form action=" " method="post">
                    <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name ="cari" placeholder="Cari Siswa" >
                    </div>
                    <div class="col">
                    <button id="search" type="submit" name="cari" class="btn btn-warning">Cari</button>
                    </div>
                    </div>
                    </form>
                    <?php
                        if(isset($_POST['cari'])){
                            $cari = $_POST['cari'];
                            $ambil = mysqli_query($db,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas  WHERE nama like '%".$cari."%' " ); 
                        }   
                    ?>
                    <form action="" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered border border-2 border-dark table-hover mt-5">
                    <thead class="text-center">
                        <tr class="bg-primary">
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                                $i = 1;
                                while($data = mysqli_fetch_assoc($my)){
                                    $data1 = mysqli_fetch_assoc($my1);
                            ?>
                        <tr class="text-center">
                            <td class="align-middle"><?= $i;?></td>
                            <td class="align-middle"><?= ucwords($data['nama']);?></td>
                            <td class="align-middle"><?= ucwords($data1['judul']);?></td>
                            <td class="align-middle">
                                <a href="proses_kembali.php?id=<?= $data['id_peminjaman'];?>" class="btn btn-sm btn-success">Kembalikan</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php } ?>
                    </tbody>
                    </table>
                    </form>
    </div>
</main>
<?php include "footer.php"; ?>


