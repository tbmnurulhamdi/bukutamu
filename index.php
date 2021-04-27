<?php
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "login") {
		echo "<script> window.alert('harap masuk melalui halaman login'); </script>";
	} elseif ($_GET['pesan'] == "gagal") {
		echo "<script>window.alert('salah');</script>";
	} elseif ($_GET['pesan'] == "terlarang") {
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
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.alert {
			background: #e44e4e;
			color: white;
			padding: 10px;
			text-align: center;
			border: 1px solid #b32929;
		}
	</style>
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
									<form action="ceklogin.php" method="POST">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control" type="text" name="username" placeholder="Enter your username" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control" type="password" name="password" placeholder="Enter your password" />
										</div>
										<div class="text-center mt-3">
											<button type="submit" name="login" class="btn btn-primary">LOG IN</button>
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

	<script src="js/app.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>


</body>

</html>