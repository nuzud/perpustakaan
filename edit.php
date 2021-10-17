<?php
include ("koneksi.php");

$id = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

  $query="update buku set judul='$judul', penulis='$penulis', 
  penerbit='$penerbit', tahun='$tahun' where id_buku='$id'";
  $hasil= mysqli_query($conn,$query);

header("location:read.php");
?>