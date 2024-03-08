<?php

include "koneksi.php";


$nis = $_GET['nis'];


$hapussiswa = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis = '$nis'"); 
$hapusnilai = mysqli_query($koneksi, "DELETE FROM nilai WHERE nis = '$nis'"); 
$hapusagama = mysqli_query($koneksi, "DELETE FROM agama WHERE nis = '$nis'"); 



if ($hapussiswa && $hapusnilai && $hapusagama){

    echo "<script>alert('Berhasil Hapus Data');
    document.location='siswa.php';
    </script>";
}else {
    echo "<script>('Gagal Hapus Data');
    document.location='proseshapussiswa.php';
    </script>";
}

?>


