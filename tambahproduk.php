<?php
    include "koneksi.php";
    if ($_POST['submit'] == "simpan") {
    $id_produk    =$_POST['id_produk'];
    $nama_produk    =$_POST['nama_produk'];
    $harga=$_POST['harga'];
    $stok    =$_POST['stok'];
    
    $cekid_produk    =mysqli_num_rows (mysqli_query($koneksi, "SELECT id_produk FROM produk WHERE id_produk='$_POST[id_produk]'"));
    
    if($cekid_produk > 0) {
    ?>
        <script language="JavaScript">
            alert('Oops! Duplikat Id Produk ...');
            document.location='dashboardadmin.php';
        </script>
    <?php
    }
        
    else{
        $insert =mysqli_query($koneksi, "INSERT INTO produk (id_produk, nama_produk, harga, stok) VALUES ('$id_produk', '$nama_produk', '$harga', '$stok')");
        ?>
            <script language="JavaScript">
            alert('Good! Input Data Siswa Berhasil ...');
            document.location='tampilproduk.php';
            </script>
        <?php
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Form Tambah Data Produk</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4">

				<div class="card mt-5">
					<div class="card-title text-center">
						<h1>Form Tambah Produk</h1>
					</div>
					<div class="card-body">
						<form action="tampilproduk.php" method="post">
							<div class="form-group">
								<label for="id_produk">Id Produk</label>
								<input type="text" name="id_produk" class="form-control" id="id_produk" aria-describedby="id_produk" placeholder="id_produk">

							</div>
							<div class="form-group">
								<label for="nama_produk">Nama Produk</label>
								<input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="nama_produk">
							</div>
                            <div class="form-group">
								<label for="harga">Harga</label>
								<input type="text" name="harga" class="form-control" id="harga" placeholder="harga">
							</div>
                            <div class="form-group">
								<label for="stok">Stok</label>
								<input type="text" name="stok" class="form-control" id="stok" placeholder="stok">
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
                            <a href="dashboardadmin.php" class="btn btn-primary">
                        Cancel
                      </a>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
</body>