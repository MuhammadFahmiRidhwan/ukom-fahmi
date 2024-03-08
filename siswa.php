<?php

include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="stylesheet" type="text/javascript" href="js/bootstrap.min.js"></script>
    <style>
        .siswa{
            ali
        }
    </style>
</head>
<body>
<div class="bg-secondary p-5 text-white">
        <h1>Sistem Informasi RPL</h1>

    </div>
    <nav>
        <nav>
    <div class="nav-link bg-dark">
        <ul class="d-flex justify-content-center">
        <a class="text-white"  style="text-decoration:none ;" href="dashboard.html"><li class="nav px-3 ">Dashboard</li></a>
            <a class="text-white"  style="text-decoration:none ;" href="guru.php"><li class="nav px-3 ">GURU</li></a>
            <a class="text-white" style="text-decoration:none ;"  href="siswa.php"><li class="nav  px-3" style="text">SISWA</li></a>
        </ul>
    </div></div>
</nav>
<div class="container px-3 py-4">
    <div class="card-body bg-secondary text-white">
    <center><h1>Form Siswa</h1>
    <form action="prosestambahsiswa.php" method="post">
    <label for="nis">NIS :</label>
    <br>
    <br>
    <input type="text" id="nis" name="nis" required>
    <br>
    <br>
    <label for="namasiswa">Nama :</label>
    <br>
    <br>
    <input type="text" id="namasiswa" name="namasiswa" required>
    <br>
    <br>
    <label for="kelas">kelas :</label>
    <br>
    <br>
    <input type="text" id="kelas" name="kelas" required>
    <br>
    <br>
    <label for="jeniskelamin">Jenis Kelamin :</label>
    <br>
    <br>
    <select name="jeniskelamin" id="jeniskelamin"  >
        <option selected disabled>Pilih Jenis Kelamin </option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <br>
    <br>
    <label for="agama">Agama :</label>
    <br>
    <br>
    <input type="text" id="agama" name="agama">
    <br>
    <br>
    <label for="pkk">PKK :</label>
    <br>
    <br>
    <input type="text" id="pkk" name="pkk">
    <br>
    <br>
    <label for="pweb">PWeb :</label>
    <br>
    <br>
    <input type="text" id="pweb" name="pweb">
    <br>
    <br>
    <label for="pbo">PBO :</label>
    <br>
    <br>
    <input type="text" id="pbo" name="pbo">
    <br>
    <br>
    <label for="bd">BD :</label>
    <br>
    <br>
    <input type="text" id="bd" name="bd">
    <br>
    <br>
    <button type="submit" name="submit">SUBMIT</button>
    <br>
    <br>
    </form>
    <table class="table table-bordered">
        <tr class="bg-white text-dark">
        <th>NO</th>
        <th>Nis</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Nilai PKK</th>
        <th>Nilai PWeb</th>
        <th>Nilai PBO</th>
        <th>Nilai BD</th>
        <th>Action</th>
    </tr>
    <?php
    $no=1;
    $tampil=mysqli_query($koneksi, "SELECT * FROM siswa 
    INNER JOIN agama ON siswa.nis = agama.nis
    INNER JOIN nilai ON siswa.nis = nilai.nis");
    while($data=mysqli_fetch_array($tampil)){

    ?>
    <tr class="text-white">
    <td><?= $no++ ?></td>
    <td><?= $data['nis'] ?></td>
    <td><?= $data['namasiswa'] ?></td>
    <td><?= $data['kelas'] ?></td>
    <td><?= $data['jeniskelamin'] ?></td>
    <td><?= $data['agama'] ?></td>
    <td><?= $data['pkk'] ?></td>
    <td><?= $data['pweb'] ?></td>
    <td><?= $data['pbo'] ?></td>
    <td><?= $data['bd'] ?></td>
    <td><a href="updatesiswa.php?idsiswa=<?php echo $data['idsiswa']; ?>"><button class="btn btn-outline-dark"type="submit" name="update">UPDATE</button></a>
    <a href="proseshapussiswa.php?nis=<?php echo $data['nis']; ?>"><button type="submit" class="btn btn-outline-danger "name="hapus">HAPUS</button></a></td>
    </tr>
    <?php } ?>
</table>
</body></center>
</html></div></div>