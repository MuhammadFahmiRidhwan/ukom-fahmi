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
</head>

<body>
    <div class="bg-secondary p-5 text-white">
        <h1>Sistem Informasi RPL</h1>

    </div>
    <nav>
        <nav>
            <div class="nav-link bg-dark">
                <ul class="d-flex justify-content-center">
                    <a class="text-white" style="text-decoration:none ;" href="dashboard.html">
                        <li class="nav px-3 ">Dashboard</li>
                    </a>
                    <a class="text-white" style="text-decoration:none ;" href="guru.php">
                        <li class="nav px-3 ">GURU</li>
                    </a>
                    <a class="text-white" style="text-decoration:none ;" href="siswa.php">
                        <li class="nav  px-3" style="text">SISWA</li>
                    </a>
                </ul>
            </div>
            </div>
        </nav>
        <div class="container px-3 py-4">
            <div class="card-body bg-secondary text-white">
                <center>
                    <h1>Form Guru</h1>
                    <form action="prosestambahguru.php" method="post">
                        <label for="nip">NIP :</label>
                        <br>
                        <br>
                        <input type="text" id="nip" name="nip" required>
                        <br>
                        <br>
                        <label for="namaguru">Nama Guru :</label>
                        <br>
                        <br>
                        <input type="text" id="namaguru" name="namaguru" required>
                        <br>
                        <br>
                        <label for="matapelajaran">Mata Pelajaran :</label>
                        <br>
                        <br>
                        <select name="matapelajaran" id="matapelajaran">
                            <option selected disabled>Pilih Mata Pelajaran </option>
                            <option value="PKK">Kewirausahaan</option>
                            <option value="PWEB">Pemrograman Web</option>
                            <option value="PBO">Pemrograman Berbasis Objek</option>
                            <option value="BD">Basis Data</option>
                        </select>
                        <br>
                        <br>
                        <button type="submit" name="submit">SUBMIT</button>
                        <br>
                        <br>
                    </form>
                    <table class="table table-bordered">
                        <tr class="bg-white text-dark">
                            <th>NO</th>
                            <th>Nip</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM guru 
    INNER JOIN matapelajaran ON guru.nip = matapelajaran.nip");
                        while ($data = mysqli_fetch_array($tampil)) {

                            ?>
                            <tr class="text-white">
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?= $data['nip'] ?>
                                </td>
                                <td>
                                    <?= $data['namaguru'] ?>
                                </td>
                                <td>
                                    <?= $data['matapelajaran'] ?>
                                </td>

                                <td><a href="updateguru.php?idguru=<?php echo $data['idguru']; ?>"><button
                                            class="btn btn-outline-dark" type="submit" name="update">UPDATE</button></a>
                                    <a href="proseshapusguru.php?nip=<?php echo $data['nip']; ?>"><button type="submit"
                                            class="btn btn-outline-danger " name="hapus">HAPUS</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
</body>
</center>

</html>
</div>
</div>