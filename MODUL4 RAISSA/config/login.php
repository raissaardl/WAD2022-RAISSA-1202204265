<?php
$row = mysqli_fetch_assoc($executeCari);
$data = mysqli_fetch_array($executeCari);

if ($executeCari == true) {
  if ($check == 'checked') {
    setcookie('email', $email);
    setcookie('pass', $sandi);
  }

  session_start();
  $_SESSION['id'] = $data['id'];
  $_SESSION['nama'] = $data['nama'];
  header("location: ../pages/Home-Raissa.php");
} else {
  header("location: ../pages/Login-Raissa.php?pesan=failed");
}