<?php
  require './koneksi.php';

  $id = $_GET['id'];

  $mysql = "DELETE FROM showroom_raissa_table WHERE id_mobil = $id";

  if (mysqli_query($koneksi, $mysql)) {
    header("location: ../pages/List-Raissa.php?pesan=delete");
  } else {
    echo "Error";
  }