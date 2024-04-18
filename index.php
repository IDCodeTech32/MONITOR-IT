<?php
// Panggil koneksi database
include "koneksi.php";
// Panggil file functions.php
include "functions.php";

// Gunakan fungsi calculatePercentage() untuk menghitung persentase data per kategori
$hardware_percentage = calculatePercentage('Hardware & Networking');
$software_percentage = calculatePercentage('Software Development');
$administrasi_percentage = calculatePercentage('Administrasi It');
$it_percentage = calculatePercentage('It Vendor Project');
// Hitung persentase untuk kategori lainnya sesuai kebutuhan

// Tampilkan persentase di card example pada halaman index.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MONITOR IT | Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  <link rel="icon" href="img/PERSERO.jpg" type="image/jpg">
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center mb-4" href="index.php">
        <div class="sidebar-brand-icon" style="padding-top: 30px;">
          <img src='img/persero batam.png' width='70px'>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" style="margin-top: 6px !important;" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active" style="margin-top: 5px;">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Add -->
      <li class="nav-item">
        <a class="nav-link" href="add.php">
          <i class="fas fa-fw fa-plus"></i>
          <span>Add</span></a>
      </li>

      <!-- Nav Item - PIC -->
      <li class="nav-item">
        <a class="nav-link" href="pic.php">
          <i class="fas fa-fw fa-id-card"></i>
          <span>PIC</span></a>
      </li>

      <!-- Nav Item - tabel target -->
      <li class="nav-item" style="margin-top: 5px;">
        <a class="nav-link" href="table.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Tabel Target</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content" style="background-color: #D3D3D3">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <h1 class="h3 mb-0 text-black-800 text-center text-warning"><strong>MONITOR PEKERJAAN IT</strong></h1>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- topbar navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Adrian Sinaga</span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
              </a>
              <!-- Dropdown - Informasi Pengguna -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" id="hardwareNetworking" style="font-size: 11px;">
                        Hardware & Networking
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <span id="hardwareNetworkingPercentage">
                          <?php echo calculatePercentage("Hardware & Networking"); ?>%
                        </span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-server fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" id="softwareDevelopment" style="font-size: 12px;">
                        Software Development
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <span id="softwareDevelopmentPercentage">
                          <?php echo calculatePercentage("Software Development"); ?>%
                        </span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-400"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1" id="administrasiIT" style="font-size: 12px;">
                        Administrasi IT
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <span id="softwareDevelopmentPercentage">
                          <?php echo calculatePercentage("Administrasi It"); ?>%
                        </span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" id="itVendorProject" style="font-size: 12px;">
                        IT Vendor Project
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <span id="softwareDevelopmentPercentage">
                          <?php echo calculatePercentage("It Vendor Project"); ?>%
                        </span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Row -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th style="text-align:center; width: 3%;">No</th>
                          <th style="text-align:center; width: 39%;">Target</th>
                          <th style="text-align: center; width: 6%">Waktu</th>
                          <th style="text-align: center; width: 6%;">PIC</th>
                        </tr>
                      </thead>
                      <tbody id="dataTable">
                        <!-- Isi tabel di sini -->

                        <!-- Isi tabel bisa ditambahkan secara dinamis sesuai kebutuhan -->
                      </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th style="text-align:center; width: 3%;">No</th>
                          <th style="text-align:center; width: 39%;">Target</th>
                          <th style="text-align: center; width: 6%">Waktu</th>
                          <th style="text-align: center; width: 6%;">PIC</th>
                        </tr>
                      </thead>
                      <tbody id="dataTable">
                        <!-- Isi tabel di sini -->

                        <!-- Isi tabel bisa ditambahkan secara dinamis sesuai kebutuhan -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <!-- /.container-fluid -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
      <?php
      include 'layouts/footer.php';
      ?>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Pilih "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">
              Batal
            </button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="tabel.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


</body>

</html>