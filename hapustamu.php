<?php

require_once "include/koneksi.php";

if (isset($_POST['hapus'])) {
   $tgldari = $_POST['tgldari'];
   $tglke = $_POST['tglke'];


   $sql = "DELETE FROM daftartamu WHERE tgl_datang BETWEEN '$tgldari' AND '$tglke'";
   $hapus = mysqli_query($koneksi, $sql);
   if ($hapus) {
      header("location:daftartamu.php?pesan=berhasil");
      exit;
   } else {
      echo mysqli_error($koneksi);

      header("location:daftartamu.php?pesan=gagal");
      exit;
   }
} else {
   header("location:daftartamu.php?pesan=invalid");
}
