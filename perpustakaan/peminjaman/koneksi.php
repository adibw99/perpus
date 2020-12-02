<?php
        DEFINE ('DBUSER', 'root');
        DEFINE ('DBPW', '1234');
        DEFINE ('DBHOST', 'localhost');
        DEFINE ('DBNAME', 'perpustakaan');

  $dbc = mysqli_connect(DBHOST, DBUSER, DBPW);
  $koneksi = new mysqli(DBHOST, DBUSER, DBPW, DBNAME);

  if(!$koneksi)
  {
          die("koneksi ke database gagal dilakukan : ". mysqli_error($koneksi));
          exit();
   }

   $dbs = mysqli_select_db($koneksi, DBNAME);
   if(!$dbs)
   {
          die("Nama database tidak dikenal : ". mysqli_error($koneksi));
          exit();
   }
?>