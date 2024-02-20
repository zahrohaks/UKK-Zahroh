<!DOCTYPE html>
<html>
<head>
 <title>Edit Tabel Penjualan</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="judul"> 
 <h1>Form Edit Tabel Penjualan</h1>
 </div>
 
 <br/>
 
 <a href="tampilpenjualan.php">Lihat Semua Data</a>
 
 <br/>
 <h3>Edit data</h3>
 
 <?php 
 include "koneksi.php";
 $id = $_GET['id'];
 $query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
 $nomor = 1;
 while($data = mysql_fetch_array($query_mysql)){
 ?>
 <form action="update.php" method="post"> 
 <table>
 <tr>
 <td>Nama</td>
 <td>
 <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
 <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
 </td> 
 </tr> 
 <tr>
 <td>Alamat</td>
 <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td> 
 </tr> 
 <tr>
 <td>Pekerjaan</td>
 <td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td> 
 </tr> 
 <tr>
 <td></td>
 <td><input type="submit" value="Simpan"></td> 
 </tr> 
 </table>
 </form>
 <?php } ?>
</body>
</html>