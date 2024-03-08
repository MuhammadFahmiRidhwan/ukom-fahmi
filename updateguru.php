<?php

include "koneksi.php";

$idguru = $_GET['idguru'];

$tampil = mysqli_query($koneksi, "SELECT * FROM guru 
    INNER JOIN matapelajaran ON guru.nip = matapelajaran.nip WHERE guru.idguru = '$idguru' ");
while ($data = mysqli_fetch_array($tampil)) {

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Update Guru</title>
    </head>

    <body>
        <div class="container px-3 py-4">
            <div class="card-body bg-secondary text-white">
                <center>
                    <h1>Form Guru</h1>
                    <form action="prosesupdateguru.php" method="post">
                        <input type="hidden" id="idguru" name="idguru" value="<?php echo $data['idguru'] ?>" required>
                        <input type="hidden" id="idmapel" name="idmapel" value="<?php echo $data['idmapel'] ?>" required>
                        <label for="nip">NIP :</label>
                        <input type="text" id="nip" name="nip" value="<?php echo $data['nip'] ?>" required>
                        <br>
                        <br>
                        <label for="namaguru">Nama Guru :</label>
                        <input type="text" id="namaguru" name="namaguru" value="<?php echo $data['namaguru'] ?>" required>
                        <br>
                        <br>
                        <label for="matapelajaran">Mata Pelajaran :</label>
                        <select name="matapelajaran" id="matapelajaran" value="<?php echo $data['matapelajaran'] ?>">
                            <option value="PKK">Kewirausahaan</option>
                            <option value="PWEB">Pemrograman Web</option>
                            <option value="PBO">Pemrograman Berbasis Objek</option>
                            <option value="BD">Basis Data</option>
                        </select>
                        <br>
                        <br>
                        <button type="submit" name="submit">SUBMIT</button>
                </center>
            <?php } ?>
</body>

</html>