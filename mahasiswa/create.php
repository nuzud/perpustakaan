<?php
include ("koneksi.php");

 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jk = $_POST['jk'];
 $semester = $_POST['semester'];
 $fakultas = $_POST['fakultas'];
 $jurusan = $_POST['jurusan'];
 
mysqli_query($conn,"insert into mahasiswa values
('$nim','$nama','$jk','$semester','$fakultas','$jurusan')");
 
header("location:form_create.php");
?>