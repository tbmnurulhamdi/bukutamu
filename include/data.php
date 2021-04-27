
<?php
session_start();
if ($_SESSION['level'] == "") {
	session_destroy();
	header("location:../index.php?pesan=terlarang");
}

$table = 'daftartamu';
$primaryKey = 'id_tamu';
$columns = array(
	array(
		'db' => 'id_tamu',
		'dt' => 'DT_RowId',
		'formatter' => function ($d, $row) {
			// Technically a DOM id cannot start with an integer, so we prefix
			// a string. This can also be useful if you have multiple tables
			// to ensure that the id is unique with a different prefix
			return 'row_' . $d;
		}
	),
	array('db' => 'tgl_datang', 'dt' => 'tanggal'),
	array('db' => 'nama_tamu', 'dt' => "nama"),
	array('db' => 'instansi', 'dt' => 'instansi'),
	array('db' => 'tujuan', 'dt' => 'tujuan'),
	array('db' => 'suhu', 'dt' => 'suhu'),
	array('db' => 'foto_tamu', 'dt' => 'foto_tamu'),





);
require('conn.php');

require('ssp.class.php');

echo json_encode(
	SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);
