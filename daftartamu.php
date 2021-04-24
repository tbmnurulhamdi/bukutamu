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
         <a href="index.php" class="navbar-brand"><img src="assets/image/logo-kemenag-footer.png" alt="" width="200"></a>
         <div class="d-flex">
            <div class="nav-item dropdown">
               <a role="button" class="btn dropdown-toggle text-light " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                     <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                  </svg>
               </a>
               <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Daftar Tamu</a></li>
                  <li><a class="dropdown-item" href="#">Laporan</a></li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <!--  tombol log out -->
                  <li><a class="dropdown-item" href="#">keluar >>></a></li>
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
            <div class="col-xl-10 col-xxl-8 d-flex">
               <div class="w-100">
                  <div class="row">
                     <!-- awal bagian form input -->
                     <div class="col-sm-8">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title mb-4">Daftar Tamu</h5>
                              <table id="tabel" class="table table-hover my-0">
                                 <thead>
                                    <tr>
                                       <th>Action</th>
                                       <th>Username</th>
                                       <th class="d-none d-md-table-cell">Email</th>
                                       <th class="d-none d-md-table-cell">Nama</th>

                                       <th class="d-none d-md-table-cell">Level</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>santoso</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>bambang</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>jurian</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>iudin</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="#" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i></a>
                                          <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="edit"></i></a>
                                          <a href="#" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i></a>
                                       </td>
                                       <td>salah</td>
                                       <td class="d-none d-md-table-cell">isikan email</td>
                                       <td class="d-none d-md-table-cell">isikan nama</td>

                                       <td class="d-none d-md-table-cell">isi level</td>
                                    </tr>
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>Action</th>
                                       <th>Username</th>
                                       <th class="d-none d-md-table-cell">Email</th>
                                       <th class="d-none d-md-table-cell">Nama</th>

                                       <th class="d-none d-md-table-cell">Level</th>
                                    </tr>
                                 </tfoot>
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
</body>

</html>