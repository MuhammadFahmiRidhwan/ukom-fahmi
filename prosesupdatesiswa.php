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
$idsiswa = $_POST['idsiswa'];
$idnilai = $_POST['idnilai'];
$idagama = $_POST['idagama'];

$updatesiswa = mysqli_query($koneksi, "UPDATE siswa SET nis = '$nis', namasiswa = '$namasiswa',kelas = '$kelas', jeniskelamin = '$jeniskelamin' 
WHERE idsiswa = '$idsiswa'");

$updatenilai = mysqli_query($koneksi, "UPDATE nilai SET pkk = '$pkk', pweb = '$pweb',pbo = '$pbo', bd = '$bd' 
WHERE idnilai = '$idnilai'");

$updateagama = mysqli_query($koneksi, "UPDATE agama SET agama = '$agama'
WHERE idagama = '$idagama'");


if ($updatesiswa && $updatenilai && $updateagama){

    echo "<script>alert('Berhasil Update Data');
    document.location='siswa.php';
    </script>";
}else {
    echo "<script>alert('Gagal Update Data');
    document.location='updatesiswa.php';
    </script>";
}

?>