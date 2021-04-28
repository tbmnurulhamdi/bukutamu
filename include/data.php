
<?php
session_start();
if ($_SESSION['level'] == "") {
	session_destroy();
	header("location:../index.php?pesan=terlarang");
}
/*
* DataTables contoh skrip pemrosesan sisi server.
  *
  * Harap dicatat bahwa skrip ini sengaja dibuat sangat sederhana untuk menunjukkan caranya
  * Pemrosesan sisi server dapat diimplementasikan, dan mungkin tidak boleh digunakan sebagai file
  * dasar untuk sistem kompleks yang besar. Sangat cocok untuk kasus penggunaan sederhana seperti
  * untuk belajar.
  *
  * Lihat http://datatables.net/usage/server-side untuk detail lengkap tentang server-
  * Persyaratan pemrosesan sisi DataTables.
  *
  * @license MIT - http://datatables.net/license_mit
*/

/*
/ * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  * Variabel set mudah
*/

// tabel DB yang akan digunakan
$table = 'daftartamu';

//  primary key tabel
$primaryKey = 'id_tamu';

// array kolom database yang harus dibaca dan dikirim kembali ke DataTables.
// Parameter `db` mewakili nama kolom dalam database,
// sedangkan` dt` mewakili pengidentifikasi kolom DataTables. Dalam hal ini sederhana
$columns = array(
	array('db' => 'id_tamu', 'dt' => 'id'),
	array('db' => 'tgl_datang', 'dt' => 'tanggal'),
	array('db' => 'nama_tamu', 'dt' => "nama"),
	array('db' => 'instansi', 'dt' => 'instansi'),
	array('db' => 'tujuan', 'dt' => 'tujuan'),
	array('db' => 'suhu', 'dt' => 'suhu'),
	array('db' => 'foto_tamu', 'dt' => 'foto_tamu'),





);

// mengambil paramater Informasi koneksi server SQL
require('conn.php');
/*
/ * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  * Jika Anda hanya ingin menggunakan konfigurasi dasar untuk DataTables dengan PHP
  * sisi server, tidak perlu mengedit di bawah baris ini.
*/
require('ssp.class.php');

echo json_encode(
	SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);
