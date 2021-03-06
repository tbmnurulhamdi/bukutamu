<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") { // jika tidak login terlebih dahulu maka akan dialihkan ke index
   header("location:index.php?pesan=login");
}


if (isset($_GET['pesan'])) {
   if ($_GET['pesan'] == "berhasil") {
      echo "<script> window.alert('data sudah masuk'); </script>";
   } elseif ($_GET['pesan'] == "gagal") {
      echo "<script>window.alert('gagal masuk');</script>";
   } elseif ($_GET['pesam'] == "invalid") {
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



   <title>BUKU TAMU</title>
</head>

<body>
   <!-- awal navbar -->
   <nav class="navbar" style="background-color: #207504;">
      <div class="container-fluid">
         <!-- memanggil file image -->
         <a href="spesial.php" class="navbar-brand"><img src="" alt="" width="200"></a>
         <div class="d-flex">

            <!-- awal nav dropdown -->
            <div class="nav-item dropdown">
               <a role="button" class="btn dropdown-toggle text-light " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                     <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                  </svg>
               </a>
               <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="">Input</a>
                  </li>
                  <li>
                     <a class="dropdown-item" href="daftartamu.php">Daftar Tamu</a>
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
                  <li>
                     <a class="dropdown-item" href="logout.php" onclick="return confirm('Anda yakin ingin keluar ?')">keluar >>></a>
                  </li>
               </ul>
            </div>
            <!-- akhir nav dropdown -->
         </div>
      </div>
   </nav>
   <!-- akhir navbar -->

   <!-- awal tempat isi konten -->
   <div class="content">
      <div class="container-fluid p-0">
         <div class="row">

            <!-- awal bagian kotak layout -->
            <div class="col-xl-10 col-xxl-8 d-flex">
               <div class="w-100">
                  <div class="row">

                     <!-- perhatikan setiap bagian yang ada elemen id karena id akan kita panggil di script js  ayng berada dibawah -->
                     <!-- awal kotak bagian camera -->
                     <div class="col-sm-4">
                        <div class="card">
                           <div class="card-body">
                              <div class="text-center">

                                 <h5 class="card-title mb-4">Foto</h5>

                                 <!-- perhatikan nama class d-none. namae class dari bootstrap ini digunakan untuk menyembunyikan atribut html. -->
                                 <!-- kita akan bermain name class d-none di js untuk bertukar kemunculan antara vatribut video dan img -->

                                 <!-- bagian video -->
                                 <video id="preview" class="rounded"></video>

                                 <!-- bagian canvas sebelum dijadikan gambar akan diproses dari canvas dahulu -->
                                 <canvas id="output" style="display: none;"></canvas>

                                 <!-- bagian gambar -->
                                 <img id="result" class="rounded d-none">

                                 <!-- tombol untuk mengambil gambar -->
                                 <button id="capture" class="btn btn-outline-success btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                       <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                       <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                                    </svg>
                                 </button>

                                 <!-- tombol hapus -->
                                 <button id="hapusfoto" class="btn btn-outline-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                       <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg></button>

                                 <!-- 2 tombol diata kiata gunakan untuk pertukaran kemunculan atribut html -->
                              </div>

                           </div>
                        </div>
                     </div>
                     <!-- alhir kotak bagian kamera -->

                     <!-- awal bagian form input -->
                     <div class="col-sm-8">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title mb-4">Input Tamu</h5>

                              <!-- mengirimkan value dari sini ke file inputtamu dengan cara POST -->
                              <form action="inputtamu.php" method="POST">
                                 <div class="mb-3">

                                    <input type="hidden" class="form-control form-control-sm" name="foto" id="inputfoto"> <!-- elemen id ini akan kita panggil juga di script js -->

                                    <!-- date(Y-m-d) untuk menentukan tanggal hari ini -->
                                    <input type="date" class="form-control form-control-sm d-none" name="tanggal" value="<?php echo date("Y-m-d"); ?>"> <!-- date(Y-m-d) untuk menentukan tanggal hari ini -->
                                 </div>
                                 <div class="mb-3">

                                    <input type="text" class="form-control form-control-sm" name="namatamu" placeholder="Nama" required autocomplete="off">
                                 </div>
                                 <div class="mb-3">
                                    <input type="text" class="form-control form-control-sm" name="instansi" placeholder=" Instansi/Perusahaan" autocomplete="off">
                                 </div>
                                 <div class="mb-3">
                                    <input type="text" class="form-control form-control-sm" name="tujuan" placeholder="Tujuan" required autocomplete="off">
                                 </div>
                                 <div class="mb-3">
                                    <input type="text" class="form-control form-control-sm" name="suhu" placeholder="suhu">
                                 </div>
                                 <button type="submit" name="input" class="btn btn-primary btn-sm">Submit</button>
                              </form>
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



   <!-- awal bagian script kamera dan gambar -->
   <script>
      // mendesifinisikan elemen id yang berperan di proses kamera dan gambar
      const [preview, output, capture, result, imgurl] = [
         document.getElementById('preview'),
         document.getElementById('output'),
         document.getElementById('capture'),
         document.getElementById('result'),
         document.getElementById('imgurl')

      ]
      // proses pemanggilan kamera device https://developer.mozilla.org/en-US/docs/Web/API/Navigator/getUserMedia
      navigator.mediaDevices.getUserMedia({
            audio: false,
            video: {
               width: 300, // ukuran lebar video/gambar yang akan diambil
               height: 300, // ukuran tinggi video/gambar yang akan diambil

               // fungsi dibawah ini untuk menggunakan kamera belakang, hapus saja jika ingin kamera depan https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia
               // facingMode: {
               //    exact: "environment"
               // }

            }
         })

         // jika dizinkan maka video dari kamera akan muncul
         .then(stream => {
            preview.srcObject = stream;
            preview.play();
         })

         //  jika di block maka tidak akan muncul
         .catch(error => {
            console.error(error);
         });


      // di bawah ini proses pengambilan gambar
      capture.addEventListener('click', () => {
         var img = document.createElement('img');
         const context = output.getContext('2d'); // ambil gambar secara 2 dimensi

         output.width = 300; // ukuran lebar gambar
         output.height = 300; // ukuran tinggi gambar

         // konversi gambar dari elemen canvas ke img dan dicetak ke url bas64
         context.drawImage(preview, 0, 0, output.width, output.height);
         result.src = output.toDataURL();

         // mengirim/mengambil value url dari elemen img ke input text dengan name foto untuk diproses
         var input_foto = document.getElementById("result").src;
         document.getElementById("inputfoto").value = input_foto;
      });
   </script>
   <!-- akhir bagian script kamera dan gambar -->

   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <!-- script jquery -->



   <!-- awal script pertukaran dari kamera/video ke gambar/img -->
   <!-- dibawah ini merupakan atribut yang hanya berfungsi jika terhubung jquery -->
   <script>
      $(document).ready(function() {

         $("#capture").click(function() { //tombol capture di klik maka akan bertukar posisi dengan img
            $("#preview").addClass("d-none"); //d-none akan ditambahkan ke atribut video/kamera
            $("#result").removeClass("d-none"); //d-none akan dihapuskan dari atribut img/gambar
         })
         $("#hapusfoto").click(function() { //tombol hapus diklik maka akan sebaliknya
            $("#result").addClass("d-none");
            $("#preview").removeClass("d-none");
         })

      });
   </script>
   <!-- akhir script pergantian dari kamera ke gambar -->



   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>