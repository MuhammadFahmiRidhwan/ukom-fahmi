<?php

include "koneksi.php";

session_start();

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];


$regist=mysqli_query($koneksi, "INSERT INTO admin (username, password, level) VALUES ('$username','$password','$level')");

if($regist){
    echo "<script>alert('Berhasil Registrasi');
    document.location='formlogin.html';
    </script>";
}else{
    echo "<script>alert('Gagal Registrasi');
    document.location='formregist.html';
    </script>";
}
}
?>