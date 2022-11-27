  <?php
  $koneksi = new mysqli("localhost". ":" . "3308", "root", "", "wad_modul4_raissa");

  if (!$koneksi) {
    die("Koneksi Error: " . $koneksi->connect_error);
  }
