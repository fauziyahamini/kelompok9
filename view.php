<?php
include "config.php";
include "home_admin.php";
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM buku WHERE id_buku = $id");
$data = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="style.css">
    <div class="contrainer1 mt-5 mx-auto">
        <div class="row">
        <div class="card mb-5 shadow">
                        <div class="mb-3 mt-1 text-gray"><h3>Detail Buku</h3></div>
                        <div class="card-body">
                            <div class="col-sm-12">
                                <img src="cover/<?= $data['cover'];?>" alt="" style="width:15%;" class="mb-4 img-thumbnail mx-auto d-block">
                                <table class="table text-gray border-white mb-4">
                                    <tr>
                                        <td style="width: 20%;">ID Buku</td>
                                        <td style="width: 4%;">:</td>
                                        <td><?= $data['id_buku'];?></td>
                                    </tr>
                                     <tr>
                                        <td style="width: 20%;">Judul</td>
                                        <td style="width: 4%;">:</td>
                                        <td><?= $data['judul'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%;">Penulis</td>
                                        <td style="width: 4%;">:</td>
                                        <td><?= $data['penulis'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%;">Tahun</td>
                                        <td style="width: 4%;">:</td>
                                        <td><?= $data['tahun'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%;">Kota</td>
                                        <td style="width: 4%;">:</td>
                                        <td><?= $data['kota'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%;">Penerbit</td>
                                        <td style="width: 4%;">:</td>
                                        <td><?= $data['penerbit'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%;">Sinopsis</td>
                                        <td style="width: 4%;">:</td>
                                        <td><?= $data['sinopsis'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%;">Stok</td>
                                        <td style="width: 4%;">:</td>
                                        <td><?= $data['stok'];?></td>
                                    </tr>
                                </table>
                                <a href="prosespinjam.php?id=<?= $data['id_buku'];?>" class="btn btn-primary ms-auto">Pinjam</a>
                            </div>
                    </div>       
        </div>
    </div>
