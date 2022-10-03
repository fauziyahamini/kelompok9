<?php
session_start();
$id = $_SESSION['id'];
unset($id);
session_destroy();

header('location:index.php');
?>