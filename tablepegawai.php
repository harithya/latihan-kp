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

    <title>Data Pegawai</title>
    <script src="vendor/jquery/jquery.min.js"></script>
    

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
                <a class="nav-link" href="404.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="404.php">
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            
                        </div>
                    </form>

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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>
                    <button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#insertModal">
						<i class="fa fa-plus"></i> Tambah Data</button>
						
						<br/>
                        <br/>         

                    <!-- DataTales Example --> 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead >
                                        <tr>
                                            <th style="background:#4e73df;color:#fff;">No</th>
                                            <th style="background:#4e73df;color:#fff;">Nama Pegawai</th>
                                            <th style="background:#4e73df;color:#fff;">NIP</th>
                                            <th style="background:#4e73df;color:#fff;">No Reg</th>
                                            <th style="background:#4e73df;color:#fff;">Golongan</th>
                                            <th style="background:#4e73df;color:#fff;">Jabatan</th>
                                            <th style="background:#4e73df;color:#fff;">aksi</th>
                                        </tr>
                                        <?php
                                         $batas = 10;
                                         $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                                         $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
                         
                                         $sebelumnya = $halaman - 1;
                                         $selanjutnya = $halaman + 1;
                         
                                         $sql=mysqli_query($koneksi,"SELECT * FROM master_pegawai");
                                         $jumlah_data = mysqli_num_rows($sql);
                                         $total_halaman = ceil($jumlah_data / $batas);
                         
                                         $tampil=mysqli_query($koneksi,"SELECT * FROM master_pegawai order by id_pegawai ASC limit $halaman_awal, $batas");
                                         $nomor = $halaman_awal+1;
                                                       
                                         while($data=mysqli_fetch_array($tampil)){

                                                                                     
                                         echo"<tr>
                                         <td>$nomor</td>
                                         <td>$data[nama_pegawai]</td> 
                                         <td>$data[nip]</td>
                                         <td>$data[no_reg]</td>
                                         <td>$data[golongan]</td>
                                         <td>$data[jabatan]</td>
                                         <td>
                                            <a href='detailpegawai.php?id_pegawai=$data[id_pegawai]'><button class='btn btn-primary btn-xs'>Details</button></a>
                                            <a href='editpegawai.php?id_pegawai=$data[id_pegawai]'><button class='btn btn-warning btn-xs' data-toggle='modal' data-target='#editModal'>Edit</button></a>
                                            <a href='deletejenisproduk.php?id_pegawai=$data[id_pegawai]'><button class='btn btn-danger btn-xs'>Hapus</button></a>
                                         </td>
                                         </tr>";
                                             ?>
                                             <?php
                                             $nomor++;
                                             }
                                             ?>
                                    </thead>
                                </table>
                                <p align="center">
                                    <a class="btn btn-skin btn-lg" <?php if($halaman > 1){ echo "href='?halaman=$sebelumnya'";} ?>
                                        >Sebelumnya
                                    </a>

                                    <?php
                                        for ($i=1;$i<=$total_halaman;$i++) 
                                        {
                                     ?>

                                        <a class="btn btn-skin btn-lg" href="?halaman=<?php echo $i ?>">
                                            <?php echo $i; ?>
                                            </a> 

                                            <?php
                                                }
                                                ?>

                                                <a class="btn btn-skin btn-lg" <?php if($halaman < $total_halaman) { echo "href='?halaman=$selanjutnya'"; } ?> 
                                                >Selanjutnya
                                                </a>
                                 </p>
                            </div>
                        </div>
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
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
               
     <!-- Insert Modal-->
     <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="tablepegawai.php" method="post" id="form_tambah" role="form" enctype="multipart/form-data" name="form_tambah">
                        <div class="modal-header" style="background:#4e73df;color:#fff;">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:#fff">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <table border="0" cellpadding="4">
                                    <tr>
                                        <td size="90">Kode Pegawai</td>
                                        <td>
                                        <input value= "<?php
                                        $kodeauto = mysqli_query($koneksi, "SELECT max(id_pegawai) as maxID from master_pegawai");
                                        $datakode = mysqli_fetch_array($kodeauto);

                                        $kode = $datakode['maxID'];

                                        $kode++;
                                        $ket = "CST";

                                        $hasilkodeauto =sprintf("%03s",$kode);

                                        echo $hasilkodeauto;

                                        ?>" type="text" readonly="readonly" class="form-control" name="id_pegawai">
                                        
                                        </td>
                                    </tr>
                                   <tr>
                                        <td>Nama Pegawai</td>
                                        <td><input type="text" class="form-control" name="nama_pegawai"></td>
                                    </tr>
                                    <tr>
                                        <td>No Registrasi</td>
                                        <td><input type="number" class="form-control" name="no_reg" id="no_reg"></td>
                                    </tr>
                                    <tr>
                                        <td>NIP</td>
                                        <td><input type="number" class="form-control" name="nip" id="nip"></td>
                                    </tr>
                                    <tr>
                                        <td>Golongan</td>
                                        <td><select name="golongan" class="form-control" id="golongan">
                                        <option value="#">Pilih Golongan</option>
                                        <option value="V">V</option>
                                        <option value="VI">VI</option>
                                        <option value="VII">VII</option>
                                        <option value="VIII">VIII</option>
                                        <option value="IX">IX</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                        <option value="XIII">XIII</option>
                                        <option value="XIV">XIV</option>
                                        <option value="XV">XV</option>
                                        </select></td>
                                    </tr>
                                        
                                    <tr>
                                        <td>Jabatan</td>
                                        <td><select name="jabatan" class="form-control" id="jabatan">
                                        <option value="#">Pilih Jabatan</option>
                                        <option value="Pemimpin Cabang Bandung">Pemimpin Cabang Bandung</option>
                                        <option value="Wakil Pemimpin Cabang Bandung">Wakil Pemimpin Cabang Bandung</option>
                                        <option value="Auditor Muda Kancab Bandung SPI Regional V Bandung">Auditor Muda Kancab Bandung SPI Regional V Bandung</option>
                                        <option value="Asman Operasional">Asman Operasional</option>
                                        <option value="Asman Administrasi dan Keuangan">Asman Administrasi dan Keuangan</option>
                                        <option value="Asman Pengadaan">Asman Pengadaan</option>
                                        <option value="Asman Penjualan Retail dan e-commerce">Asman Penjualan Retail dan e-commerce</option>
                                        <option value="Asman Penjualan Distributor">Asman Penjualan Distributor</option>
                                        <option value="Asman Akuntansi">Asman Akuntansi</option>
                                        <option value="Kepala GBB Cisaranten Kidul">Kepala GBB Cisaranten Kidul</option>
                                        <option value="Kepala GBB Utama">Kepala GBB Utama</option>
                                        <option value="Kepala GBB Paseh">Kepala GBB Paseh</option>
                                        <option value="Kepala GBB Citeureup">Kepala GBB Citeureup</option>
                                        <option value="Manager DCMP">Manager DCMP</option>
                                        <option value="Kasir Minku Cabang Bandung">Kasir Minku Cabang Bandung</option>
                                        <option value="Staf Seksi Komersial">Staf Seksi Komersial</option>
                                        <option value="Staf Seksi Operasional">Staf Seksi Operasional</option>
                                        <option value="Staf Seksi Administrasi dan Keuangan">Staf Seksi Administrasi dan Keuangan</option>
                                        <option value="Staf Seksi Pengadaan">Staf Seksi Pengadaan</option>
                                        <option value="Staf Seksi Akuntansi">Staf Seksi Akuntansi</option>
                                        <option value="Jurtim GBB Cisaranten Kidul">Jurtim GBB Cisaranten Kidul</option>
                                        <option value="Jurtim GBB Paseh">Jurtim GBB Paseh</option>
                                        <option value="Jurtim GBB Utama">Jurtim GBB Utama</option>
                                        <option value="Staf GBB Cisaranten Kidul">Staf GBB Cisaranten Kidul</option>
                                        <option value="Staf GBB Paseh">Staf GBB Paseh</option>
                                        <option value="Staf GBB Utama">Staf GBB Utama</option>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Cuti</td>
                                        <td><input type="number" class="form-control" name="jumlah_cuti"></td>
                                    </tr>
                                  
                                </table>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <td><input class="btn btn-primary" name="simpan" type="submit" value="simpan"></td>
                        </div>
                    </form>
                        <?php

                                include "koneksi.php";

                                if(isset($_POST['simpan'])){
                                    mysqli_query($koneksi, "INSERT INTO master_pegawai set
                                    id_pegawai = '$_POST[id_pegawai]',
                                    nama_pegawai = '$_POST[nama_pegawai]',
                                    no_reg = '$_POST[no_reg]',
                                    nip = '$_POST[nip]',
                                    golongan  = '$_POST[golongan]',
                                    jabatan = '$_POST[jabatan]',
                                    jumlah_cuti = '$_POST[jumlah_cuti]'");

                                    echo "<script>alert('Berhasil Mendambah Data Pegawai'); window.location ='tablepegawai.php'</script>";
                                }
                                ?>
                </div>
            </div>
        </div>

         <!-- Edit Modal-->
     
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