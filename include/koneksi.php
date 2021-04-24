<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bukutamu";

$koneksi = new mysqli($server, $username, $password, $database);
if ($koneksi->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
