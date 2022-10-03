<?php
include "config.php";
$id = $_GET['id'];
$sql = mysqli_query($db,"SELECT * FROM peminjaman WHERE id_peminjaman = $id");
$data = mysqli_fetch_assoc($sql);
$date = date('Y-m-d');
if($date > $data['tanggal_pengembalian'] ){

    while($data = mysqli_fetch_assoc($sql)){
        $batas = date_create($data['tanggal_pengembalian']);
        $tambah = date_create(date('Y-m-d'));
        $telat = date_diff($tambah,$batas);
        $hari = $telat->format("%a");
        $total = $hari * 2000;
    }
    $insert = mysqli_query($db,'INSERT INTO pengembalian VALUES("","$id","$date","$total")');
    $cek = mysqli_query($db,"SELECT * FROM pengembalian ORDER BY id_pengembalian DESC");
    $query = mysqli_fetch_assoc($cek);
    $insert2 = mysqli_query($db,'INSERT INTO detail pengembalian VALUES("","$query[id_pengembalian]","1","0")');
    header('location:peminjaman?notif=selesai');
}else{
    $insert = mysqli_query($db,'INSERT INTO pengembalian VALUES("","$id","$date","0")');
    $cek = mysqli_query($db,"SELECT * FROM pengembalian ORDER BY id_pengembalian DESC");
    $query = mysqli_fetch_assoc($cek);
    $insert2 = mysqli_query($db,'INSERT INTO detail pengembalian VALUES("","$query[id_pengembalian]","1","0")');
    header('location:peminjaman?notif=selesai');
}
?>