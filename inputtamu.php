<?php

$aimg = '<img src="';
$bimg = '" alt="foto" width="50" height="50">';
//disarankan tidak melaukan 2 variable diatas ini karena kemungkinan bisa terdapat bug di masa yang akan datang 
// perancang melakukan ini karena kepepet otak ngebul sehingga dijadikan alternatif 

// ammbil data koneksi dari file koneksi
require_once "include/koneksi.php";


// menangkap value yang dikirimkan dari file index menggunakan atribut name
if (isset($_POST['input'])) { // jika tombol input diklik maka


   $foto = $_POST['foto']; //values dari form name foto
   $tanggal = $_POST['tanggal']; //values dari form name tanggal
   $namatamu = mysqli_real_escape_string($koneksi, $_POST['namatamu']); //values dari form name namatamu
   $instansi = mysqli_real_escape_string($koneksi, $_POST['instansi']); //values dari form name instansi
   $tujuan = mysqli_real_escape_string($koneksi, $_POST['tujuan']); //values dari form name tujuan
   $suhu = mysqli_real_escape_string($koneksi, $_POST['suhu']); //values dari form name suhu
   // mysqli_real_escape_string digunakan untuk menghindari inputan yang terdapat atribut html


   // perggabungan dari 3 variable untuk memmbentuk/menampilkan foto//gambar
   // ingat, ini buka cara yang benar karena $aimg dan $bimg berisikan atribut htnl
   $pasfoto = ($aimg . $foto . $bimg);

   //membuat id otomatis sesuai tanggal dan nomo urut data pada saat ini
   $date = date_format(date_create(), "ymd");
   $itung = mysqli_query($koneksi, "SELECT count(id_tamu) AS jumlah FROM daftartamu");
   while ($data = mysqli_fetch_array($itung)) {
      $jumlah = $data['jumlah'] + 1;
   }

   //menerima nilai dari kiriman form input-tamu 
   $idtamu = $date . sprintf("%03d", $jumlah);


   $sql = "INSERT INTO daftartamu (id_tamu, foto_tamu, tgl_datang, nama_tamu, instansi, tujuan, suhu) VALUES ('$idtamu', '$pasfoto', '$tanggal', '$namatamu', '$instansi', '$tujuan', '$suhu')";
   $result = mysqli_query($koneksi, $sql);
   if ($result) { // jika berhasil input maka akan dimunculkan pesan berhasil di file spesial
      header('Location:spesial.php?pesan=berhasil'); // line 11-12

      exit;
   } else { //jika gagak makan akan muncuk pesan gagal di file spesial
      echo mysqli_error($koneksi);
      header('Location:spesial.php?pesan=gagal'); // line 13-14
      exit;
   }
} else { //jika tombol input tidak diklik
   // mengalihkan halaman kembali ke spesial.php
   header("location: spesial.php?pesan=invalid"); // line 15-16
}
