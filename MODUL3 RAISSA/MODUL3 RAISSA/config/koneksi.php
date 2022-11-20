<?php
$koneksi = new mysqli("localhost". ":" . "3308", "root", "", "modul3raissa");

if (!$koneksi) {
  die("Koneksi Error: " . $koneksi->connect_error);
}
