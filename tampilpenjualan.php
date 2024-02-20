<html>
<head>
    <title>Table Penjualan</title>
</head>
<body>
    <h2>Tabel Penjualan</h2>
    <h4>DATA PENJUALAN</h4>
    <p><a href="tambahpenjualan.php">+ Tambah Data</a></p>
    <table border="1" cellpadding="2">
        <thead>
            <tr>            
                <th>Id_Penjualan</th>
                <th>Tanggal Penjualan</th>
                <th>Total Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $query    =mysqli_query($koneksi, "SELECT * FROM penjualan ORDER BY id_penjualan DESC");
                $no=0;
                while($data    =mysqli_fetch_array($query)){
                $no++
            ?>
            <tr>            
            
                <td><?php echo $data['id_penjualan']?></td>
                <td><?php echo $data['tgl_penjualan']?></td>
                <td><?php echo $data['total_harga']?></td>
                <td><a href="editpenjualan.php?id_penjualan=<?=$data['id_penjualan']?>">Edit</a> | <a href="hapuspenjualan.php?id_penjualan=<?=$data['id_penjualan']?>">Hapus</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>