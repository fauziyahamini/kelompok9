<?php
include ('config.php');
$id = $_SESSION['id'];
$sql = mysqli_query($db,"SELECT * FROM petugas WHERE nip = $id");
$name = mysqli_fetch_assoc($sql);
?>
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
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary shadow">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Perpustakaan K-9</a>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto pe-5">
                <li class="nav-item ms-auto">
                    <a class="btn btn-danger shadow text-white nav-link" id="navbarDropdown" href="logout.php">Log Out <span class="bi-box-arrow-in-left"></span></a>
                    
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light shadow-lg"  style="background-color: #bde2fc;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link my-4" href="dashboard.php">
                                <div class="sb-nav-link-icon"><span class="text-primary bi-speedometer2"></span></div>
                                Dashboard
                            </a>
                            <a class="nav-link mb-4 " href="data_buku.php" >
                                <div class="sb-nav-link-icon"><span class="text-primary bi-journal-bookmark"></span></div>
                                Data Buku
                            </a>
                            <a class="nav-link mb-4 " href="data_siswa.php" >
                                <div class="sb-nav-link-icon"><span class="text-primary bi-people-fill"></span></div>
                                Data Siswa
                            </a>
                            <a class="nav-link mb-4 " href="peminjaman.php" >
                                <div class="sb-nav-link-icon"><span class="text-primary bi-table"></span></div>
                                Peminjaman
                            </a>
                            <a class="nav-link mb-4 " href="pengembalian.php" >
                                <div class="sb-nav-link-icon"><span class="text-primary bi-table"></span></div>
                                Pengembalian
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer" style="background-color: #bde2fc;">
                        <div class="small">Logged in as:</div>
                        <?= ucwords( $name['nama']);?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

<script src="bootstrap/js/bootstrap.min.css" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
</body>
</html>