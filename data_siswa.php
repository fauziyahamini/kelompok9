<?php
session_start();
include ('config.php');
include ('home_admin.php');
?>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	// echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<main class="mb-5">
    <div class="container-fluid px-4">
    <h1 class="mt-4">Daftar Siswa</h1>   
                    <div class="container mt-5">
                    <form action=" " method="POST">
                    <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name ="ketik" placeholder="Cari Siswa" >
                    </div>
                    <div class="col">
                    <button id="search" type="submit" name="cari" class="btn btn-warning">Cari</button>
                    <a href="add_siswa.php" class="btn btn-success">Tambah Siswa</a>
                    <!-- <button id="add" type="submit" value="add" class="btn btn-success">Tambah Buku</button> -->
                    </div>
                    </div>
                    </form>

                    <?php
                    if(isset($_POST['cari'])){
                        $cari = $_POST['ketik'];
                        $ambil = mysqli_query($db,"SELECT siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.alamat,kelas.nama_kelas  from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas where nama like '%".$cari."%' limit $halaman_awal, $batas" );    
                    }
                        ?>

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
                        $batas=5;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				        $previous = $halaman - 1;
				        $next = $halaman + 1;
                        
                        

                        $ambil = mysqli_query($db,"SELECT siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.alamat,kelas.nama_kelas from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas");
                        
                        $jumlah_data = mysqli_num_rows($ambil);
				        $total_halaman = ceil($jumlah_data / $batas);
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $awal_halaman=($batas*$halaman)-$batas;

                        $ambil = mysqli_query($db,"SELECT siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.alamat,kelas.nama_kelas from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas limit $awal_halaman, $batas");
                        $nomor = $halaman_awal+1;
                    
                        

                        while ($data = mysqli_fetch_array($ambil)) {
                    ?>
                        <tr class="text-center">
                            <td><?= $data['nis']?></td>
                            <td><?= $data['nama']?></td>
                            <td>
                                <?php
                                    if($data['jenis_kelamin']=='L'){
                                        echo 'Laki-Laki';
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

                    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
    </li>
    <?php 
	for($x=1;$x<=$total_halaman;$x++){
	?> 
    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
    <?php
	}
	   ?>	
    <li class="page-item">
      <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?> >Next</a>
    </li>
  </ul>
</nav>
    </div>
</main>
<?php include "footer.php"; ?>