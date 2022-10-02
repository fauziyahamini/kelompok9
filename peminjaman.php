<?php
session_start();
$id = $_SESSION['id'];
include "config.php";
include "home_admin.php";

?>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Data Peminjam Buku Perpustakaan</h1>   
                    <div class="container mt-5">
                    <form action=" " method="GET">
                    <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name ="cari" placeholder="Cari Siswa" >
                    </div>
                    <div class="col">
                    <button id="search" type="submit" value="Cari" class="btn btn-warning">Cari</button>
                    </div>
                    </div>
                    </form>
                    <form action="" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered border border-2 border-dark table-hover mt-5">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Penanggung Jawab</th>
                            <th scope="col">Tgl Pinjam</th>
                            <th scope="col">Tgl Kembali</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <?php $i = 1; ?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    </table>
                    </form>
    </div>
</main>
</div>
</div>