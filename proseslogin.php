<?php
include "koneksi.php";

session_start();

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql=mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    $check=mysqli_num_rows($sql);

    if($check > 0){
        $data=mysqli_fetch_assoc($sql);

        if($data['level'] == "admin"){

            $_SESSION ['username'] = $username;
            $_SESSION ['level'] = "admin";

            header("location:dashboard.html");

        }else if($data['level'] == "user"){

            $_SESSION ['username'] = $username;
            $_SESSION ['level'] = "user";

            header("location:dashboarduser.php");
    }else echo "nama tidak terdaftar";
}
}
?>