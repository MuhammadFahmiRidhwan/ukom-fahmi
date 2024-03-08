<?php
include "koneksi.php";

$nis = $_POST['nis'];
$namasiswa = $_POST['namasiswa'];
$kelas = $_POST['kelas'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$pkk = $_POST['pkk'];
$pweb = $_POST['pweb'];
$pbo = $_POST['pbo'];
$bd = $_POST['bd'];

$tambahnilai = mysqli_query($koneksi, "INSERT INTO nilai (nis,pkk,pweb,pbo,bd)
VALUES ('$nis','$pkk','$pweb','$pbo','$bd')");
$tambahagama = mysqli_query($koneksi, "INSERT INTO agama (nis, agama)
VALUES ('$nis','$agama')");
$tambahsiswa = mysqli_query($koneksi, "INSERT INTO siswa (nis,namasiswa,kelas,jeniskelamin)
                                       VALUES ('$nis','$namasiswa','$kelas','$jeniskelamin')");


if($tambahsiswa && $tambahnilai && $tambahagama){
    echo "<script>alert('Berhasil Tambah Data');
    document.location='siswa.php';
    </script>";
}else {
    echo "<script>alert('Gagal Tambah Data');
    document.location='siswa.php';
    </script>";
}
?>