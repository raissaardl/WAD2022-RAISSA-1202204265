<?php
$koneksi = new mysqli("127.0.0.1". ":" . "3308", "root", "", "wad_modul4_raissa");

if (!$koneksi) {
  die("Koneksi Error: " . $koneksi->connector_error);
}