<?php
include "koneksi.php";

$nip = $_POST['nip'];
$namaguru = $_POST['namaguru'];
$matapelajaran = $_POST['matapelajaran'];


$tambahmatapelajaran = mysqli_query($koneksi, "INSERT INTO matapelajaran (nip,matapelajaran)
VALUES ('$nip','$matapelajaran')");
$tambahguru = mysqli_query($koneksi, "INSERT INTO guru (nip,namaguru)
                                       VALUES ('$nip','$namaguru')");


if($tambahguru && $tambahmatapelajaran){
    echo "<script>alert('Berhasil Tambah Data');
    document.location='guru.php';
    </script>";
}else {
    echo "<script>alert('Gagal Tambah Data');
    document.location='guru.php';
    </script>";
}
?>