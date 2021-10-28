<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>PERPUSTAKAAN</title>
<body background="kartun.png">


<?php
include ("koneksi.php");

$data = $_GET['nim'];
$edit = "SELECT * FROM mahasiswa WHERE nim='$data'";
$proses = mysqli_query($conn, $edit);
$row = mysqli_fetch_array($proses);
?>

<h1 align = "center">EDIT DATA MAHASISWA</h1></br>

<div class="container">
  <form method="POST" action="edit.php">
  <div class="mb-3">
    <label class="form-label">NIM</label>
    <input type="text" class="form-control" name = "nim" value="<?php echo $row[0] ?>" Required>
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" name = "nama" value="<?php echo $row[1] ?>" Required>
  </div>
  <div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <select class="form-control" name = "jk" value="<?php echo $row[2] ?>" Required>
      <option>Laki-Laki</option>
      <option>Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Semester</label>
    <input type="text" class="form-control" name = "semester" value="<?php echo $row[3] ?>" Required>
  </div>
  <div class="mb-3">
    <label class="form-label">Fakultas</label>
    <select class="form-control" name = "fakultas" value="<?php echo $row[4] ?>" Required>
      <option>FTI</option>
      <option>FEB</option>
      <option>FISIP</option>
      <option>FH</option>
      <option>FP</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" class="form-control" name = "jurusan" value="<?php echo $row[5] ?>" Required>
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
  </div>
</html>