<?php
    include "koneksi.php";
    if ($_POST['Submit'] == "Submit") {
    $nis    =$_POST['nis'];
    $nama    =$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $telp    =$_POST['telp'];
    $alamat    =$_POST['alamat'];
    
    $ceknis    =mysqli_num_rows (mysqli_query($conn, "SELECT nis FROM tb_siswa WHERE nis='$_POST[nis]'"));
    
    if($ceknis > 0) {
    ?>
        <script language="JavaScript">
            alert('Oops! Duplikat NIS ...');
            document.location='form-input.php';
        </script>
    <?php
    }
        
    else{
        $insert =mysqli_query($conn, "INSERT INTO tb_siswa (nis, nama, jurusan, telp, alamat) VALUES ('$nis', '$nama', '$jurusan', '$telp', '$alamat')");
        ?>
            <script language="JavaScript">
            alert('Good! Input Data Siswa Berhasil ...');
            document.location='./';
            </script>
        <?php
        }
    }
?>