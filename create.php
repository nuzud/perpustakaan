<?php
include ("koneksi.php");

 $id = $_POST['id_buku'];
 $judul = $_POST['judul'];
 $penulis = $_POST['penulis'];
 $penerbit = $_POST['penerbit'];
 $tahun = $_POST['tahun'];
 
mysqli_query($conn,"insert into buku values
('$id','$judul','$penulis','$penerbit','$tahun')");
 
header("location:form_create.php");
?>