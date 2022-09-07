<?php
session_start();
include"koneksi.php";
if(empty($_SESSION['username']) AND empty($_SESSION['password'])) {
    header('location:login.php');
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Data Bahan</title>

    <!-- Custom fonts for this template -->
    <link rel="shortcut icon" href="bulog.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cabang Bandung</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Master</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Menu Master:</h6>
                            <a class="collapse-item" href="tablepegawai.php">Master Pegawai</a>
                            <a class="collapse-item" href="tableatasan.php">Master Atasan</a>
                            <a class="collapse-item" href="tableproduk.php">Master Produk</a>
                            <a class="collapse-item" href="tablebahan.php">Master Bahan</a>
                        </div>
                    </div>
                </li>
                

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Pengajuan</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Menu Pengajuan :</h6>
                            <a class="collapse-item" href="tableizincuti.php">Pengajuan Ijin Cuti</a>
                            <a class="collapse-item" href="404.php">Pengajuan Ijin Lainnya</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                        aria-expanded="true" aria-controls="collapseUtilities1">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Komersial</span>
                    </a>
                    <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Dokumen Komersial :</h6>
                            <a class="collapse-item" href="tablenirebag.php">NI Rebagging</a>
                            <a class="collapse-item" href="tablenisample.php">NI Sampel Produk</a>
                        </div>
                    </div>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="404.php">Laporan Penjualan Harian</a>
                        <a class="collapse-item" href="404.php">Laporan Penjualan Bulanan</a>
                        <a class="collapse-item" href="404.php">Laporan Per RPS</a>
                        <a class="collapse-item" href="404.php">Laporan Per Channel</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kantor Cabang Bandung</span>
                                <img class="img-profile rounded-circle"
                                    src="img/bulog.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <?php
                     if(isset($_GET['id_bahan'])){
                        $id_bahan=$_GET['id_bahan'];
                    }
                    else {
                        die ("Error. No ID Selected!");    
                    }
                    
                    $tampil  =mysqli_query($koneksi, "SELECT * FROM master_bahan WHERE id_bahan='$id_bahan'");
                    $data    =mysqli_fetch_array($tampil);
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <form action="editbahan2.php" method="post" role="form" enctype="multipart/form-data" >  
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Bahan</h1>
                    <br/>
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Data Bahan</h6>
                            </div>
                        
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table border="0" cellpadding="4">
                                    <tr>
                                           
                                            <td><input type="hidden" readonly="readonly" class="form-control" value="<?php echo $data['id_bahan']?>" name="id_bahan"></td>
                                        </tr>
                                        <tr>
                                            <td size="90">ID Bahan</td>
                                            <td><input type="text" readonly="readonly" class="form-control" value="<?php echo $data['id_bahan']?>" name="id_bahan"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Jenis Produk</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['jenis_bahan']?>" name="jenis_bahan"></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Produk</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['nama_bahan']?>" name="nama_bahan" id="nama_bahan"></td>
                                        </tr>
                                      
                                       
                                    </table>
                                </div>
                                </div>
                                        <div class="modal-footer">
                                            <td><a href="tablebahan.php"><input type="button" class="btn btn-primary" value="Kembali"></a></td>
                                            <td><input class="btn btn-primary" name="proses" type="submit" value="Update"></td>
                                         </div>
                        </form>
                        
                     </div>
                       
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Yuki Yulyadin & Rizal Fahroni </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                            <!-- Modal content-->
								<div class="modal-content" style=" border-radius:0px;">
                                    <div class="modal-header" style="background:#4e73df;color:#fff;">
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>    
                                        </button>
                                        <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Produk</h4>
                                    </div>
                                </div>
                                <form action="fungsi/tambah/tambah.php?barang=tambah" method="POST">
                                    <div class="modal-body">
                                        <table class="table table-striped bordered">
                                            
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>                  
                                </form>
                            </div>
						</div>


    <script>
    function sum() {
      var txtFirstNumberValue = document.getElementById('biaya_umum').value;
      var result = parseInt(txtFirstNumberValue) * 55.57/100;
      if (!isNaN(result)) {
         document.getElementById('biaya_pegawai').value = result;
      }
      var result2 = parseInt(txtFirstNumberValue) * 40.74/100;
      if (!isNaN(result2)) {
         document.getElementById('biaya_kantor').value = result2;
      }
      var result3 = parseInt(txtFirstNumberValue) * 3.69/100;
      if (!isNaN(result3)) {
         document.getElementById('biaya_pajak').value = result3;
      }
    }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
</html>
<?php
}
?>