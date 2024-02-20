<?php
    include "koneksi.php";
    if (isset($_GET['id_produk'])) {
        $id_produk = $_GET['id_produk'];
    }
    else {
        die ("Error. ID Selected! ");    
    }
    $query    =mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
    $data    =mysqli_fetch_array($query);
    $notid_produk    =$data['id_produk'];
    
    if ($_POST['Edit'] == "Edit") {
    $nama_produk    =$_POST['nama_produk'];
    $harga=$_POST['harga'];
    $stok    =$_POST['stok'];
    
    $cekid_produk    =mysqli_num_rows (mysqli_query($koneksi, "SELECT id_produk FROM produk WHERE id_produk='$_POST[id_produk]' AND nama_produk!='$notnama_produk'"));
    
    if($cekid_produk > 0) {
    ?>
        <script language="JavaScript">
            alert('Oops! Duplikat Id Produk ...');
            document.location='tampilproduk.php?id_produk=<?=$id_produk?>';
        </script>
    <?php
    }
    else{
        $update =mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok' WHERE id_produk='$id_produk'");
        ?>
            <script language="JavaScript">
            alert('Good! Edit Data Produk <?=$notnama_produk?> Berhasil ...');
            document.location='./';
            </script>
        <?php
    }
}
?>