<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1234';
$dbname = 'loginperpus'; //sesuai nama databasemu//
$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>