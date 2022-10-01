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
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><span class="bi-speedometer2"></span></div>
                                Dashboard
                            </a>
                            <a class="nav-link " href="data_buku.php" >
                                <div class="sb-nav-link-icon"><span class="bi-journal-bookmark"></span></div>
                                Data Buku
                            </a>
                            <a class="nav-link " href="#" >
                                <div class="sb-nav-link-icon"><span class="bi-people-fill"></span></div>
                                Data Siswa
                            </a>
                            <a class="nav-link " href="#" >
                                <div class="sb-nav-link-icon"><span class="bi-table"></span></div>
                                Peminjaman
                            </a>
                            <a class="nav-link " href="#" >
                                <div class="sb-nav-link-icon"><span class="bi-table"></span></div>
                                Pengembalian
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
                <!-- <main>
                    <div class="container-fluid px-4">
                       
                    </div>
                    </div>
                </main> -->
                <!-- <footer class="py-4 bg-light mt-auto">
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
                </footer> -->
           
     


<script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
</body>
</html>