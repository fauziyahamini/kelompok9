<?php
session_start();

include "config.php";
    
        $name = htmlspecialchars($_POST['user']);
        $pass = htmlspecialchars($_POST['pass']);
        $query = mysqli_query($db,"SELECT * FROM petugas WHERE username = '".$name."' AND password = '".$pass."' ");
        $sql = mysqli_fetch_assoc($query);
        $cek = mysqli_num_rows($query);
        if($cek > 0){
            $id = $sql['nip'];
            $_SESSION['id'] = $id;
            if(isset($_POST['remember'])){
                setcookie('nip', $sql['nip']);
            }
            header('location:dashboard.php');
        }else {
            echo 
            "<script>
                alert('username atau password salah!');
                document.location='login.php';
            </script>";
        }

?>