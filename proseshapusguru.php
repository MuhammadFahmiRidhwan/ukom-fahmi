<?php

include "koneksi.php";


$nip = $_GET['nip'];


$hapusguru = mysqli_query($koneksi, "DELETE FROM guru WHERE nip = '$nip'"); 
$hapusmatapelajaran = mysqli_query($koneksi, "DELETE FROM matapelajaran WHERE nip = '$nip'"); 




if ($hapusguru && $hapusmatapelajaran){

    echo "<script>alert('Berhasil Hapus Data');
    document.location='guru.php';
    </script>";
}else {
    echo "<script>('Gagal Hapus Data');
    document.location='proseshapusguru.php';
    </script>";
}

?>


