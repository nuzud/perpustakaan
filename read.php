<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Perpustakaan</title>
<body background="5.png" width = "50%">
  <div class="container">
  <center>
    <h1>DATA BUKU</h1></br>
    <form method = "POST" action = "create.php">

    <nav>
    <align = "right" colspan = "3"><input type = "submit" name = "" value = "Tambah Data">
    </nav>

    <table class="table" >
	<br>
	  <tr>
	    <th>Id Buku</th>
		<th>Judul Buku</th>
		<th>Nama Penulis</th>
		<th>Nama Penerbit</th>
		<th>Tahun Terbit</th>
        <th></th>
	  </tr>

<?php include("koneksi.php");
if($conn){
$hasil = mysqli_query($conn,"SELECT * FROM buku");
while ($row = mysqli_fetch_array($hasil))
{
	echo "<tr><td align=center>$row[id_buku]</td>
	      <td align=center>$row[judul]</td>
	      <td align=center>$row[penulis]</td>
          <td align=center>$row[penerbit]</td>
          <td align=center>$row[tahun]</td>
		  <td align=center><a href=form_edit.php?id_buku=$row[id_buku]>Ubah</a>
		  || <a href=delete.php?id_buku=$row[id_buku]>Hapus</a>
		  </tr>";

	$row=mysqli_query($conn,"select * from buku where id_buku='$row[id_buku]'");
}
}
?>
</table>
  </div>
</body>
</html>