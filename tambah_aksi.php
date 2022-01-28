<?php 
// koneksi database
include 'koneksi.php';
 

$merek = $_POST['merek'];
$size = $_POST['size'];
$harga = $_POST['harga'];
 if (!empty($merek) || !empty($size) || !empty($harga)) {
// menginput data ke database
mysqli_query($koneksi,"insert into merek_sepatu values('','$merek','$size','$harga')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>