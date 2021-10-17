<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>PERPUSTAKAAN</title>
<body background="kartun.png">
<center>

<?php
include ("koneksi.php");

$data = $_GET['id_buku'];
$edit = "SELECT * FROM buku WHERE id_buku='$data'";
$proses = mysqli_query($conn, $edit);
$row = mysqli_fetch_array($proses);
?>

<h1 align = "center">EDIT DATA</h1></br>

<div class="container">
  <form method="POST" action="edit.php">
  <div class="mb-3">
    <label class="form-label">Id Buku</label>
    <input type="text" class="form-control" name = "id_buku" value="<?php echo $row[0] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Judul Buku</label>
    <input type="text" class="form-control" name = "judul" value="<?php echo $row[1] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Penulis</label>
    <input type="text" class="form-control" name = "penulis" value="<?php echo $row[2] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Penerbit</label>
    <input type="text" class="form-control" name = "penerbit" value="<?php echo $row[3] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Tahun Terbit</label>
    <input type="text" class="form-control" name = "tahun" value="<?php echo $row[4] ?>">
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
  </div>
</html>