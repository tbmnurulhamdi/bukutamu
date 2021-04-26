<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bukutamu";

$koneksi = mysqli_connect($server, $username, $password, $database);
// Check connection
if (mysqli_connect_errno()) {
   echo "Koneksi database gagal : " . mysqli_connect_error();
}
