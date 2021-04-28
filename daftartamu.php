<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") { // jika tidak login terlebih dahulu maka akan dialihkan ke index
   header("location:index.php?pesan=login");
}
if (isset($_GET['pesan'])) {
   if ($_GET['pesan'] == "berhasil") {
      echo "<script> window.alert('data berhasil di hapus'); </script>";
   } elseif ($_GET['pesan'] == "gagal") {
      echo "<script>window.alert('gagal hapus');</script>";
   } elseif ($_GET['pesam'] == "gagal") {
      echo "<script>window.alert('invalid');</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap CSS -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">

   <!-- datatables CSS -->
   <link rel="stylesheet" href="assets/css/datatables.min.css">

   <!-- link unduh css dan js datatables https://datatables.net/releases/DataTables-1.10.24.zip -->

   <title>BUKU TAMU</title>
</head>

<body>
   <!-- awal navbar -->
   <nav class="navbar" style="background-color: #207504;">
      <div class="container-fluid">
         <a href="spesial.php" class="navbar-brand"><img src="" alt="" width="200"></a>
         <div class="d-flex">
            <div class="nav-item dropdown">
               <a role="button" class="btn btn-sm dropdown-toggle text-light " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                     <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                  </svg>
               </a>
               <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="spesial.php">Input</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href="">Daftar Tamu</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href="laporan.php">Laporan</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href="#">Unduh Aplikasi</a>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <!--  tombol log out -->
                  <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Anda yakin ingin keluar ?')">keluar >>></a></li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
   <!-- akhir navbar -->

   <!-- awal tempat isi konten -->
   <div class="content">
      <div class="container-fluid p-0">
         <div class="row">


            <!-- awal bagian kotak layout -->
            <div class="col-xl-9 col-xxl-8 d-flex">
               <div class="w-100">
                  <div class="row">

                     <!-- awal bagian daftar tamu -->
                     <div class="col-sm-11">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title mb-4">Daftar Tamu</h5>

                              <!-- perhatikan id tabel, ini akan di panggil oleh script js untuk datatables -->
                              <table id="tabel" class="table table-striped table-sm text-center">
                                 <thead>

                                    <tr class="text-center">
                                       <th>Tanggal Datang</th>
                                       <th>Nama Tamu</th>
                                       <th>Instansi/Perusahaan</th>
                                       <th>Tujuan Datang</th>
                                       <th>Suhu Tubuh</th>
                                       <th>Foto Tamu</th>
                                    </tr>
                                 </thead>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- akhir bagian daftar tamu -->

                     <!-- awal bagian form hapus -->
                     <div class="col-sm-10">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title mb-4">Hapus</h5>

                              <!-- teknik penhapusan disini menggunakan tanggal, misalkan hapus dari tanggal sampai ke tanggal -->
                              <form action="hapustamu.php" method="POST">
                                 <div class="row">
                                    <div class="col-sm-3">
                                       <input type="date" id="tgldari" class="form-control form-control-sm" name="tgldari">
                                    </div>
                                    <div class="col-sm-2">
                                       <p class="text-center">>>sampai>></p>
                                    </div>
                                    <div class="col-sm-3">
                                       <input type="date" id="tglke" class="form-control form-control-sm" name="tglke">
                                    </div>
                                    <div class="col-auto">
                                       <button type="submit" id="hapus" class="btn btn-danger btn-sm p-1" onclick="return confirm('Anda yakin mau menghapus item ini ?')" name="hapus">HAPUS</button>
                                       <!-- perhatikan elemen onclick, ini digunakan untuk mengkonfirmasi apakah iya atau tidak saat menekan tombol -->
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- akhir bagian form hapus -->
                  </div>
               </div>
            </div>
            <!-- akhir bagian kotak layout -->
         </div>
         <!-- akhir row/baris konten pertana -->

      </div>
   </div>
   <!-- akhir tempat isi konten -->

   <!-- script jquery -->
   <script src="assets/js/jquery-3.6.0.min.js"></script>

   <!-- script js datatables -->
   <script src="assets/js/datatables.min.js"></script>


   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="assets/js/bootstrap.bundle.min.js"></script>

   <!-- awal script operasikan datatables -->
   <script type="text/javascript">
      // webpage datatables https://datatables.net/examples/index
      $(document).ready(function() {

         // konfigurasi awal datatables: https://datatables.net/examples/basic_init/zero_configuration.html
         $('#tabel').DataTable({

            // karena ini menggunakan webserver maka kita menggunakan datatables server-side: https://datatables.net/examples/data_sources/server_side.html
            "processing": true,
            "serverSide": true,
            "ajax": "include/data.php", // mengambil data dari pemprosesan server-side script
            // mengidentifikasi data yang didapatkan dari server-side script
            "columns": [{
                  "data": "tanggal"
               },
               {
                  "data": "nama"
               },
               {
                  "data": "instansi"
               },
               {
                  "data": "tujuan"
               },
               {
                  "data": "suhu"
               },
               {
                  "data": "foto_tamu"
               }
            ],

            "scrollX": true, // untuk bisa bergulir secara horizontal https://datatables.net/examples/basic_init/scroll_x.html

            // untuk menentukan default sorting, ini berdasarkan kolom dihitung mulai dari 0 (kiri)
            // https://datatables.net/examples/basic_init/table_sorting.html
            "order": [
               [0, "desc"] // ada "desc" dan "asc"
            ],
         });



      });
   </script>
   <!-- akhir script operasikan datatables -->

</body>

</html>