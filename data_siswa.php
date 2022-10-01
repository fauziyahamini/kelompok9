<?php
include ('config.php');
include ('home_admin.php');
?>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	// echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Daftar Siswa</h1>   
                    <div class="container mt-5">
                    <form action=" " method="GET">
                    <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name ="cari" placeholder="Cari Siswa" >
                    </div>
                    <div class="col">
                    <button id="search" type="submit" value="Cari" class="btn btn-warning">Cari</button>
                    <a href="add_siswa.php" class="btn btn-success">Tambah Siswa</a>
                    <!-- <button id="add" type="submit" value="add" class="btn btn-success">Tambah Buku</button> -->
                    </div>
                    </div>
                    </form>
                    <form action="" enctype="multipart/form-data">
                    <table class="table table-striped table-hover mt-5">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $ambil = mysqli_query($db,"SELECT * from siswa where nama like '%".$cari."%' " );    
                        

                        }else{
                        $ambil = mysqli_query($db,"SELECT siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.alamat,kelas.nama_kelas from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas");
                        
                        
                        }

                        while ($data = mysqli_fetch_array($ambil)) {
                    ?>
                        <tr class="text-center">
                            <td><?= $data['nis']?></td>
                            <td><?= $data['nama']?></td>
                            <td>
                                <?php
                                 if($data['jenis_kelamin'] == 'L'){
                                    echo "Laki-Laki";
                                 }else{
                                    echo "Perempuan";
                                 }
                                ?>
                            </td>
                            <td><?= $data['alamat']?></td>
                            <td><?= $data['nama_kelas']?></td>
                            <td >
                        
                                <a href="edit_siswa.php?id=<?php echo $data['nis'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                <a href="delete_siswa.php?id=<?php echo $data['nis'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                            </td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                    </table>
                    </form>

                  
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
    </div>
</main>
</div>
</div>