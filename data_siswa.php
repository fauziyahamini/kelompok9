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
                        $batas=5;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				        $previous = $halaman - 1;
				        $next = $halaman + 1;
                        if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $ambil = mysqli_query($db,"SELECT siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.alamat,kelas.nama_kelas  from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas where nama like '%".$cari."%' limit $halaman_awal, $batas" );    
                        

                        }else{
                        // $ambil = mysqli_query($db,"SELECT siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.alamat,kelas.nama_kelas from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas");
                        
                        // $jumlah_data = mysqli_num_rows($ambil);
				        // $total_halaman = ceil($jumlah_data / $batas);

                        $ambil = mysqli_query($db,"SELECT siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.alamat,kelas.nama_kelas from siswa inner join kelas on siswa.id_kelas=kelas.id_kelas limit $halaman_awal, $batas");
                        $nomor = $halaman_awal+1;
                    
                        }

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

                    <div align="right">
  <ul class="pagination">
    <?php
      // Jika page = 1, maka LinkPrev disable
      if($page == 1){ 
    ?>        
      <!-- link Previous Page disable --> 
      <li class="disabled"><a href="#">Previous</a></li>
    <?php
      }
      else{ 
        $LinkPrev = ($page > 1)? $page - 1 : 1;  

        if($kolomCari=="" && $kolomKataKunci==""){
        ?>
          <li><a href="index.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
     <?php     
        }else{
      ?> 
        <li><a href="index.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>">Previous</a></li>
       <?php
         } 
      }
    ?>

    <?php
      //kondisi jika parameter pencarian kosong
      if($kolomCari=="" && $kolomKataKunci==""){
        $SqlQuery = mysqli_query($con, "SELECT * FROM Siswa");
      }else{
        //kondisi jika parameter kolom pencarian diisi
        $SqlQuery = mysqli_query($con, "SELECT * FROM Siswa WHERE $kolomCari LIKE '%$kolomKataKunci%'");
      }     
    
      //Hitung semua jumlah data yang berada pada tabel Sisawa
      $JumlahData = mysqli_num_rows($SqlQuery);
      
      // Hitung jumlah halaman yang tersedia
      $jumlahPage = ceil($JumlahData / $limit); 
      
      // Jumlah link number 
      $jumlahNumber = 1; 

      // Untuk awal link number
      $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
      
      // Untuk akhir link number
      $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
      
      for($i = $startNumber; $i <= $endNumber; $i++){
        $linkActive = ($page == $i)? ' class="active"' : '';

        if($kolomCari=="" && $kolomKataKunci==""){
    ?>
        <li<?php echo $linkActive; ?>><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

    <?php
      }else{
        ?>
        <li<?php echo $linkActive; ?>><a href="index.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
      }
    }
    ?>
    
    <!-- link Next Page -->
    <?php       
     if($page == $jumlahPage){ 
    ?>
      <li class="disabled"><a href="#">Next</a></li>
    <?php
    }
    else{
      $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
     if($kolomCari=="" && $kolomKataKunci==""){
        ?>
          <li><a href="index.php?page=<?php echo $linkNext; ?>">Next</a></li>
     <?php     
        }else{
      ?> 
         <li><a href="index.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>">Next</a></li>
    <?php
      }
    }
    ?>
  </ul>
</div>
    </div>
</main>
<?php include "footer.php"; ?>