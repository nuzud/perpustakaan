<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>PERPUSTAKAAN</title>
<body background="kartun.png">

  <h1><center>TAMBAH DATA MAHASISWA</center></h1></br>
  
  
  <div class="container">
  <form method = "POST" action = "create.php">
  <div class="mb-3">
    <label class="form-label">NIM</label>
    <input type="text" class="form-control" name = "nim">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" name = "nama">
  </div>
  <div class="mb-3">
    <label>Jenis Kelamin</label>
    <select name = "jk" class="form-control">
      <option>Laki-Laki</option>
      <option>Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Semester</label>
    <input type="text" class="form-control" name = "semester">
  </div>
  <div class="mb-3">
    <label>Fakultas</label>
    <select name = "fakultas" class="form-control">
      <option>FTI</option>
      <option>FEB</option>
      <option>FISIP</option>
      <option>FH</option>
      <option>FP</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" class="form-control" name = "jurusan">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <center><a href = "read.php">Lihat Data Buku</a></center>
</form>
  </div>
</body>
</html>