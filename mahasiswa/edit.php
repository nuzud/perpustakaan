<?php
include ("koneksi.php");

$nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jk = $_POST['jk'];
 $semester = $_POST['semester'];
 $fakultas = $_POST['fakultas'];
 $jurusan = $_POST['jurusan'];

  $query="update mahasiswa set nama='$nama', jk='$jk', 
  semester='$semester', fakultas='$fakultas', jurusan='$jurusan' where nim='$nim'";
  $hasil= mysqli_query($conn,$query);

header("location:read.php");
?>