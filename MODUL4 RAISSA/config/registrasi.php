<?php
    require 'koneksi.php';

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password == $repassword){
        $mysql = "INSERT INTO user_raissa (nama, email, `password`, no_hp) VALUES ('$nama', '$email', '$password', '$no_hp')";
        if (mysqli_query($koneksi, $mysql)) {
            header("location: ../pages/Login-Raissa.php");
        } else {
            echo "Gagal";
        }
    } else {
        echo "Password Tidak Cocok";
    }