<?php

// ammbil data koneksi dari file koneksi
require_once "include/koneksi.php";

// menangkap value yang dikirimkan dari file index menggunakan atribut name
$username = $_POST['username'];
$pass     = $_POST['password'];


// melakukan query ke database yang telah ditentukan
$login = mysqli_query($koneksi, "SELECT * FROM hakakses WHERE username = '$username' AND password='$pass'");

// mengambil data dari hasil query diatas secara array untuk identifikasi kebenaran data agar session bisa berjalan
$row = mysqli_fetch_array($login);


// proses identifikasi data session dengan cara mencocokan data
if ($row['level'] == "spesial") {
   session_start(); // memulai session
   $_SESSION['username'] = $row['username'];
   $_SESSION['level'] = $row['level']; // proses pencocokan data level dengan data di table
   header('location:spesial.php');  //jika cocok maka akan dialihkan ke alaman yang dituju
} elseif (($row['level'] == "biasa")) {
   session_start();
   $_SESSION['username'] = $row['username'];
   $_SESSION['level'] = $row['level'];
   header('location:biasa.php');
} else {
   // jika gagal/salah maka akan dialihkan kehalaman index dengan mengirimkan data menggunakan method GET
   //?pesan-gagal merupakan data GET yang dikirimkan ke index
   header('location:index.php?pesan=gagal'); //line 7
}
