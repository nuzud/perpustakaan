<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>PERPUSTAKAAN</title>
<body background="kkartun.png">

  <h1><center>TAMBAH DATA BUKU</center></h1></br>
  
  
  <div class="container">
  <form method = "POST" action = "create.php">
  <div class="mb-3">
    <label class="form-label">Id Buku</label>
    <input type="text" class="form-control" name = "id_buku">
  </div>
  <div class="mb-3">
    <label class="form-label">Judul Buku</label>
    <input type="text" class="form-control" name = "judul">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Penulis</label>
    <input type="text" class="form-control" name = "penulis">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Penerbit</label>
    <input type="text" class="form-control" name = "penerbit">
  </div>
  <div class="mb-3">
    <label class="form-label">Tahun Terbit</label>
    <input type="text" class="form-control" name = "tahun">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <center><a href = "read.php">Lihat Data Buku</a></center>
</form>
  </div>
</body>
</html>