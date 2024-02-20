<html>
<head>
    <title>Table Produk</title>
</head>
<body>
    <h2>Tabel Produk</h2>
    <h4>DATA PRODUK</h4>
    <p><a href="tambahproduk.php">+ Tambah Data</a></p>
    <table border="1" cellpadding="2">
        <thead>
            <tr>            
                <th>Id Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $query    =mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC");
                $no=0;
                while($data    =mysqli_fetch_array($query)){
                $no++
            ?>
            <tr>            
            
                <td><?php echo $data['id_produk']?></td>
                <td><?php echo $data['nama_produk']?></td>
                <td><?php echo $data['harga']?></td>
                <td><?php echo $data['stok']?></td>
                <td><a href="editproduk.php?id_produk=<?=$data['id_produk']?>">Edit</a> | <a href="hapusproduk.php?id_produk=<?=$data['id_produk']?>">Hapus</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>