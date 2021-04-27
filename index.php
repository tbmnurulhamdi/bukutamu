<?php

// menangkap data yang dikirimkan oleh file lain ke sini
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "login") { // menangkap data dari seluh file yang menyarankan login dahulu, data tersebut muncu karena ada yang berusaha meloncati file
		echo "<script> window.alert('harap masuk melalui halaman login'); </script>";
	} elseif ($_GET['pesan'] == "gagal") { // menangkap data dari ceklogin || line 32
		echo "<script>window.alert('salah');</script>";
	} elseif ($_GET['pesan'] == "terlarang") { //intinya terlarang
		echo "<script>window.alert('jangan coba-coba');</script>";
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BUKU TAMU LOGIN</title>

	<!-- ini merupakan file bootstrap css -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">


	<!-- untuk file bootstrap silahkan kunjungi webpage bootstrap -->
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h2>Welcome</h2>
							<p>
								Masuk untuk memulai Buku Tamu
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">

									<!-- mengirimkan value form ke ceklogin dengan method post -->
									<form action="ceklogin.php" method="POST">
										<div class="mb-3">
											<label class="form-label">username</label>

											<!-- atribut name digunakan untuk mengirim value input ke file ceklogin.php -->
											<input class="form-control" type="text" name="username" placeholder="Enter your username" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control" type="password" name="password" placeholder="Enter your password" />
										</div>
										<div class="text-center mt-3">
											<!-- saat diklik data akan mulai dikirimkan -->
											<button type="submit" name="login" class="btn btn-primary">LOG IN</button>

											<!-- beralih ke ceklogin.php -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- file js bootstrap -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- file script jquery. link unduh https://code.jquery.com/jquery-3.6.0.min.js-->
	<script src="assets/js/jquery-3.6.0.min.js"></script>


</body>

</html>