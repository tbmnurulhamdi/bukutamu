<?php
require_once "include/koneksi.php";


if (isset($_POST['cetak'])) {
   $tgldari = $_POST['tgldari'];
   $tglke = $_POST['tglke'];

?>

   <!-- DISINI TIDAK MENGGUNAKAN SERVER_SIDE MELAINKAN MENGGUNAKAN PHP NATIVE SELECT DATABASE UNTUK MENGAMBIL DATANYA BERDASARKAN 2 PARAMETER TANGGAL YANG DIINPUT DI FILE FORM LAPORAN -->
   <!DOCTYPE html>
   <html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap CSS -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="assets/css/datatables.min.css">


      <!-- membuat style font tersendiri -->
      <style>
         .jsfont {
            font-family: "Times New Roman", Times, serif;

         }

         .ukfont14 {
            font-size: 14pt;
         }

         .ukfont12 {
            font-size: 12pt;
         }
      </style>

      <title>BUKU TAMU</title>
   </head>

   <body>

      <!-- awal tempat isi konten -->
      <div class="content">
         <div class="container-fluid p-0">
            <div class="row">
               <!-- tulisan bagian atas -->
               <div class="text-center jsfont">
                  <p class="fs-5 fw-bold ukfont14">LAPORAN DAFTAR TAMU</p>
                  <P class="ukfont12">dari tanggal <?php echo $tgldari; ?> sampai tanggal <?php echo $tglke; ?> </P>
               </div>

               <!-- awal bagian kotak layout -->
               <div class="col-xl-9 col-xxl-8 d-flex">
                  <div class="w-100">
                     <div class="row">

                        <!-- awal bagian form input -->
                        <div class="col-sm-11">
                           <div class="card">
                              <div class="card-body">

                                 <table id="tabel" border="2" class="table table-bordered border-peimary">
                                    <thead class=" jsfont ukfont12">

                                       <tr>
                                          <th>No.</th>
                                          <th class="text-center">Tanggal Datang</th>
                                          <th class="text-center">Nama Tamu</th>
                                          <th class="text-center">Instansi</th>
                                          <th class="text-center">Tujuan Datang</th>
                                          <th class="text-center">Suhu Tubuh</th>
                                       </tr>
                                    </thead>
                                    <tbody class="jsfont">
                                       <!-- KARENA LANGUSUNG DOPROSES DIHALAMAN INI MAKA HARUS DI MASUKAN DIDALAM ATRIBUT <tbody> -->
                                       <?php
                                       $no = 1;


                                       $sql = "SELECT `id_tamu`, `foto_tamu`, `tgl_datang`, `nama_tamu`, `instansi`, `tujuan`, `suhu` FROM `daftartamu` WHERE tgl_datang BETWEEN '$tgldari' AND '$tglke'";
                                       $cetak = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));


                                       //PENGAMBILAN DATA DARI DATABASE DENGAN ARRAY
                                       while ($data = mysqli_fetch_array($cetak)) {
                                       ?>
                                          <tr>
                                             <td><?php echo $no; ?></td>
                                             <td><?php echo $data['tgl_datang']; ?></td>
                                             <td><?php echo $data['nama_tamu']; ?></td>
                                             <td><?php echo $data['instansi']; ?></td>
                                             <td><?php echo $data['tujuan']; ?></td>
                                             <td><?php echo $data['suhu']; ?></td>

                                          </tr>
                                    <?php
                                          $no++;
                                          // SAAT DATA BERHSIL DISAJIKAN, MAKA PHP AKAN MENAMPILKAN SCRIPT JS  window.print() UNTUK BISA LANGSUNG OPRASI CETAK WEBPAGE MENJADI DOKUMEN
                                          echo '<script type="text/javascript">window.print();</script>';
                                       }
                                    } else {
                                       // SAAT TIDAK ADA VALUE DARI ELEMEN NAME DI FILE LAPORAN MAKA AKAN MENAMPILKAN TEXT BERIKUT
                                       echo '<h1 class="jsfont" >Not Found</h1>';
                                       echo '<p class="jsfont">The requested URL /bukutamu/cetak.php was not found on this server.</p>';
                                    }
                                    ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <!-- akhir bagian form input -->

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

      <script src="assets/js/datatables.min.js"></script>


      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="assets/js/bootstrap.bundle.min.js"></script>

      <script type="text/javascript">
         $(document).ready(function() {
            $('#tabel').DataTable({
               "order": [
                  [1, "desc"]
               ],
               "paging": false, // MENGHLANGKAN PAGING
               "searching": false, // MENGHILANGKAN SEARCH
               "info": false // MENGHILANGKAN INFO BERAPA DATA YANG DILOOPING
            });



         });
      </script>

   </body>

   </html>