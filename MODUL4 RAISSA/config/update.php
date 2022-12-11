<?php
  require './koneksi.php';

  $id = $_GET['id'];
  $cname = $_POST['nama'];
  $owner = $_POST['pemilik'];
  $carBrand = $_POST['merk'];
  $tanggalbeli = $_POST['tanggalbeli'];
  $desc = $_POST['desc'];
  $status = $_POST['status'];
  $carPhoto = $_FILES['gambar']['name'];

  $target = "../asset/images/";

  if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
    $sql = "UPDATE showroom_raissa_table SET nama_mobil = '$cname', pemilik_mobil = '$owner', merk_mobil = '$carBrand', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', foto_mobil = '$carPhoto', status_pembayaran = '$status' WHERE id_mobil = $id";
    if (mysqli_query($koneksi, $sql)) {
      header("location: ../pages/List-Raissa.php");
    } else {
      echo "Error";
    }
  } else {
    echo "Error";
  }
