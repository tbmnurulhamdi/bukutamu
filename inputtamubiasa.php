<?php

$aimg = '<img src="';
$bimg = '" alt="foto" width="50" height="50">';
require_once "include/koneksi.php";

if (isset($_POST['input'])) {

   $foto = $_POST['foto'];
   $tanggal = $_POST['tanggal'];
   $namatamu = mysqli_real_escape_string($koneksi, $_POST['namatamu']);
   $instansi = mysqli_real_escape_string($koneksi, $_POST['instansi']);
   $tujuan = mysqli_real_escape_string($koneksi, $_POST['tujuan']);
   $suhu = $_POST['suhu'];


   $pasfoto = ($aimg . $foto . $bimg);
   $date = date_format(date_create(), "ymd");
   $itung = mysqli_query($koneksi, "SELECT count(id_tamu) AS jumlah FROM daftartamu");
   while ($data = mysqli_fetch_array($itung)) {
      $jumlah = $data['jumlah'] + 1;
   }

   //menerima nilai dari kiriman form input-barang 
   $idtamu = $date . sprintf("%03d", $jumlah);


   $sql = "INSERT INTO daftartamu (id_tamu, foto_tamu, tgl_datang, nama_tamu, instansi, tujuan, suhu) VALUES ('$idtamu', '$pasfoto', '$tanggal', '$namatamu', '$instansi', '$tujuan', '$suhu')";
   $result = mysqli_query($koneksi, $sql);
   if ($result) {
      header('Location:biasa.php?pesan=berhasil');

      exit;
   } else {
      echo mysqli_error($koneksi);
      header('Location:biasa.php?pesan=gagal');
      exit;
   }
} else {
   // mengalihkan halaman kembali ke biasa.php
   header("location: biasa.php?pesan=invalid");
}
