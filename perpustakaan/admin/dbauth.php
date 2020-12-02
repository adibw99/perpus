<?php
include "dbkoneksi.php";
$username = $_POST['username'];
$pass     = md5($_POST['password']);
$login = mysqli_query($connect, "SELECT * FROM penjaga WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $pass)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:/./perpustakaan/peminjaman'); 
  }else{
   echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
    echo "<script>location='index.php';</script>";
  }
?>