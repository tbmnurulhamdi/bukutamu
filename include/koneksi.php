<?php
require_once "conn.php";

// mendapatkan data lalau mengidenifikasi data array di file conn ($con['nama array])
$koneksi = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
// Check connection
if (mysqli_connect_errno()) {
   echo "Koneksi database gagal : " . mysqli_connect_error();
}
