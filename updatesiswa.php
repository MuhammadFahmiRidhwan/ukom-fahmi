<?php

include "koneksi.php";

$idsiswa = $_GET['idsiswa'];

$tampil=mysqli_query($koneksi, "SELECT siswa.idsiswa, siswa.nis, siswa.namasiswa, siswa.kelas, siswa.jeniskelamin, agama.idagama,agama.agama, nilai.idnilai, nilai.pkk, nilai.pweb, nilai.pbo, nilai.bd  FROM siswa 
    INNER JOIN agama ON siswa.nis = agama.nis
    INNER JOIN nilai ON siswa.nis = nilai.nis
    WHERE siswa.idsiswa = '$idsiswa'");
 while($data=mysqli_fetch_array($tampil)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form update Siswa</title>
</head>
<body>
<h1>Form Siswa</h1>
    <form action="prosesupdatesiswa.php" method="post">
    <input type="hidden" id="idsiswa" name="idsiswa" value="<?= $data['idsiswa']?>" required>
    <input type="hidden" id="idnilai" name="idnilai" value="<?= $data['idnilai']?>" required>
    <input type="hidden" id="idagama" name="idagama" value="<?= $data['idagama']?>" required>
    <label for="nis">NIS :</label>
    <input type="text" id="nis" name="nis" value="<?= $data['nis']?>" required>
    <br>
    <br>
    <label for="namasiswa">Nama :</label>
    <input type="text" id="namasiswa" name="namasiswa" value="<?= $data['namasiswa']?>"  required>
    <br>
    <br>
    <label for="kelas">kelas :</label>
    <input type="text" id="kelas" name="kelas" value="<?= $data['kelas']?>" required>
    <br>
    <br>
    <label for="jeniskelamin">Jenis Kelamin :</label>
    <select name="jeniskelamin" id="jeniskelamin" value="<?= $data['jeniskelamin']?>" >
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <br>
    <br>
    <label for="agama">Agama :</label>
    <input type="text" id="agama" name="agama" value="<?= $data['agama']?>"  required>
    <br>
    <br>
    <label for="pkk">PKK :</label>
    <input type="text" id="pkk" name="pkk" value="<?= $data['pkk']?>"  required>
    <br>
    <br>
    <label for="pweb">PWeb :</label>
    <input type="text" id="pweb" name="pweb" value="<?= $data['pweb']?>"  required>
    <br>
    <br>
    <label for="pbo">PBO :</label>
    <input type="text" id="pbo" name="pbo" value="<?= $data['pbo']?>"  required>
    <br>
    <br>
    <label for="bd">BD :</label>
    <input type="text" id="bd" name="bd" value="<?= $data['bd']?>"  required>
    <br>
    <br>
    <button type="submit" name="submit">SUBMIT</button>
    <br>
    <br>
    </form>
    <?php }?>
</body>
</html>