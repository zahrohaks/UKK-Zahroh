<html>
<head>
    <title>Table Detail Penjualan</title>
</head>
<body>
    <h2>Tabel Detail Penjualan</h2>
    <h4>DATA DETAIL PENJUALAN</h4>
    <p><a href="tambahdetailpenjualan.php">+ Tambah Data</a></p>
    <table border="1" cellpadding="2">
        <thead>
            <tr>            
                <th>Id Detail</th>
                <th>Id Penjualan</th>
                <th>Id Produk</th>
                <th>Jumlah Produk</th>
                <th>Sub Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $query    =mysqli_query($koneksi, "SELECT * FROM detail_penjualan ORDER BY id_detail DESC");
                $no=0;
                while($data    =mysqli_fetch_array($query)){
                $no++
            ?>
            <tr>            
            
                <td><?php echo $data['id_detail']?></td>
                <td><?php echo $data['id_penjualan']?></td>
                <td><?php echo $data['id_produk']?></td>
                <td><?php echo $data['jumlah_produk']?></td>
                <td><?php echo $data['sub_total']?></td>
                <td><a href="form-edit.php?id_detail=<?=$data['id_detail']?>">Edit</a> | <a href="hapus.php?id_detail=<?=$data['id_detail']?>">Hapus</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>