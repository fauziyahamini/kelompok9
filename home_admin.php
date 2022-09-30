<?php
include ('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.rtl.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Perpustakaan</a>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-3">
                <li class="nav-item dropdown">
                    <a class="btn btn-secondary" id="navbarDropdown" href="#" aria-expanded="false">Log Out <span class="bi-box-arrow-in-left"></span></a>
                    
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav"  style="background-color: #e3f2fd;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
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
<table class="table table-striped mt-5">
  <thead class="text-center">
    <tr>
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
    <tr>
        <td><?= $data['id_buku']?></td>
        <td><?= $data['penulis']?></td>
        <td><?= $data['tahun']?></td>
        <td><?= $data['judul']?></td>
        <td><?= $data['kota']?></td>
        <td><?= $data['penerbit']?></td>
        <td><img src="cover/<?= $data['cover']?>" alt="" style="width:50px;" class="img-thumbnail"></td>
        <td><?= $data['sinopsis']?></td>
        <td><?= $data['stok']?></td>
        <td >
     
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
                    </div>
                </main>
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
        </div>
        <!-- tabel start -->


<script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
</body>
</html>