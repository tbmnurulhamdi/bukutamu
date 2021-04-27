<?php
require_once "include/koneksi.php";
$username = $_POST['username'];
$pass     = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM hakakses WHERE username = '$username' AND password='$pass'");
$row = mysqli_fetch_array($login);
if ($row['level'] == "spesial") {
   session_start();
   $_SESSION['username'] = $row['username'];
   $_SESSION['level'] = $row['level'];
   header('location:spesial.php'); //jika login berhasil, maka ganti/letakkan halaman utamamu disini
} elseif (($row['level'] == "biasa")) {
   session_start();
   $_SESSION['username'] = $row['username'];
   $_SESSION['level'] = $row['level'];
   header('location:biasa.php');
} else {
   // echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
   header('location:index.php?pesan=gagal');
}
