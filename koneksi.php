<?php

$servername="localhost";
$username="root";
$password="";
$database="ukom";


$koneksi=mysqli_connect($servername,$username,$password,$database) 
or die(mysqli_error($koneksi));
?>