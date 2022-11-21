  <?php
  require './koneksi.php';

  $id = $_GET['id'];

  $mysql = "DELETE FROM showroomraissa WHERE id_mobil = $id";

  if (mysql_query($koneksi, $mysql)) {
    header("location: ../pages/List-Raissa.php?pesan=delete");
  } else {
    echo "Error";
  }
