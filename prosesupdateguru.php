<?php

include "koneksi.php";

$nip = $_POST['nip'];
$namaguru = $_POST['namaguru'];
$matapelajaran = $_POST['matapelajaran'];
$idguru=$_POST['idguru'];
$idmapel=$_POST['idmapel'];


$updateguru = mysqli_query($koneksi, "UPDATE guru SET nip = '$nip', namaguru = '$namaguru'
WHERE idguru = '$idguru'");

$updatematapelajaran = mysqli_query($koneksi, "UPDATE matapelajaran SET nip = '$nip', matapelajaran = '$matapelajaran'
WHERE idmapel = '$idmapel'");



if ($updateguru && $updatematapelajaran){

    echo "<script>alert('Berhasil Update Data');
    document.location='guru.php';
    </script>";
}else {
    echo "<script>alert('Gagal Update Data');
    document.location='updateguru.php';
    </script>";
}

?>