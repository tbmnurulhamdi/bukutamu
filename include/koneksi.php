<?php
require_once "conn.php";


$koneksi = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
// Check connection
if (mysqli_connect_errno()) {
   echo "Koneksi database gagal : " . mysqli_connect_error();
}
