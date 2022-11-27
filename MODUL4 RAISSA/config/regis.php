<?php
$registerQuery = "INSERT INTO users (nama, email, password, no_hp) VALUES ('$nama', '$email', '$password', '$nohp')";

$executeQuery = mysqli_query($koneksi, $registerQuery);

if ($executeQuery) {
  header("location: ../pages/Login-Raissa.php");
} else {
  die(mysqli_error($koneksi));
}