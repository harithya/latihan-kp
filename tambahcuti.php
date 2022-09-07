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

    <title>Data Pelanggan</title>
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
                <div class="sidebar-brand-text mx-3">Komersial Bandung</div>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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
                    <form action="tambahcuti.php" method="post" id="form_tambah" role="form" enctype="multipart/form-data" name="form_tambah"> 
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pengajuan Cuti</h1>
                    
                    <!-- DataTales Example --> 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Silahkan isi sesuai dengan pengajuan</h6>
                        </div>
                        <div class="card-body">
                        <table border="0" cellpadding="5">
                                    <tr>
                                        <td size="100">ID Pengajuan</td>
                                        <td>
                                        <input value= "<?php
                                        $kodeauto = mysqli_query($koneksi, "SELECT max(id_pengajuancuti) as maxID from master_cuti");
                                        $datakode = mysqli_fetch_array($kodeauto);

                                        $kode = $datakode['maxID'];

                                        $kode++;
                                        $ket = "CT";

                                        $hasilkodeauto =sprintf("%05s",$kode);

                                        echo $hasilkodeauto;

                                        ?>" type="text" readonly="readonly" class="form-control" name="id_pengajuancuti">
                                        
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Nama Pegawai</td>
                                        <?php
                                        $tampil2  =mysqli_query($koneksi, "SELECT * FROM master_pegawai");
                                        ?>

                                        <td>
                                        <select name="nama_pegawai" class="form-control" id="nama_pegawai">
                                        <option value="#">Pilih Nama Pegawai</option>
                                        <?php
                                        while ($data2 =mysqli_fetch_array($tampil2)) { ?>
                                            
                                            <option value="<?php echo $data2['id_pegawai']?>"><?php echo $data2['nama_pegawai']?></option>
                                            <?php }?>
                                        </select>
                                        </td>  
                                        
                                    <tr>
                                        <td>Nama Atasan</td>
                                        <?php
                                        $tampil2  =mysqli_query($koneksi, "SELECT * FROM master_atasan");
                                        ?>

                                        <td>
                                        <select name="nama_atasan" class="form-control" id="nama_atasan">
                                        <option value="#">Pilih Nama Atasan</option>
                                        <?php
                                        while ($data2 =mysqli_fetch_array($tampil2)) { ?>
                                            
                                            <option value="<?php echo $data2['id_atasan']?>"><?php echo $data2['nama_atasan']?></option>
                                            <?php }?>
                                        </select>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Jumlah Hari</td>
                                        <td><input type="number" class="form-control" name="jumlah_hari" id="jumlah_hari"></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td>Dari Tanggal</td>
                                        <td><input type="date" class="form-control" name="dari_tanggal" id="dari_tanggal"></td>
                                    </tr>
                                    <tr>
                                        <td>Sampai Tanggal</td>
                                        <td><input type="date" class="form-control" name="sampai_tanggal" id="sampai_tanggal"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pengajuan</td>
                                        <td><input type="date" class="form-control" name="tanggal_pengajuancuti" id="tanggal_pengajuancuti"></td>
                                    </tr>
                                    <tr>
                                        <td>Alasan Cuti</td>
                                        <td><input type="text" class="form-control" name="alasan_cuti" id="alasan_cuti"></td>
                                    </tr>
                                                                           
                                    </table>
                            
                        </div>
                       
                       
                        
                        <div class="modal-footer">
                        
                            <td><input class="btn btn-secondary" name="reset" type="reset" value="Cancel"></td>
                            <td><a href="tableizincuti.php"><input type="button" class="btn btn-primary" value="Kembali"></a></td>
                            <td><input class="btn btn-primary" name="simpan2" type="submit" value="Simpan"></td>
                        </div>
                    </form>
                        <?php

                            include "koneksi.php";

                            if(isset($_POST['simpan2'])){
                                mysqli_query($koneksi, "INSERT INTO master_cuti set
                                id_pengajuancuti = '$_POST[id_pengajuancuti]',
                                nama_pegawai = '$_POST[nama_pegawai]',
                                nama_atasan = '$_POST[nama_atasan]',
                                jumlah_hari = '$_POST[jumlah_hari]',
                                dari_tanggal = '$_POST[dari_tanggal]',
                                sampai_tanggal = '$_POST[sampai_tanggal]',
                                tanggal_pengajuancuti = '$_POST[tanggal_pengajuancuti]',
                                alasan_cuti = '$_POST[alasan_cuti]'");

                                echo "<script>alert('Berhasil Mendambah Data Pengajuan Cuti'); window.location ='tableizincuti.php'</script>";
                            }
                            ?>
                    </div>
                  

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Yuki Yulyadin 2021 </span>
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
                    <form action="tablescoststructure.php" method="post" id="form_tambah" role="form" enctype="multipart/form-data" name="form_tambah">
                        <div class="modal-header" style="background:#4e73df;color:#fff;">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Cost Structure</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:#fff">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                       
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <td><input class="btn btn-primary" name="simpan" type="submit" value="simpan"></td>
                        </div>
                    </form>
                       
                </div>
            </div>
        </div>

         <!-- Edit Modal-->
     
    <script>
    function tammpil() {
        
      var data1 = document.getElementById("jenisproduk").value;
              
      document.getElementById("biaya_umum").value = data1;
      var result11 = parseInt(data1) * 55.57/100;
      if (!isNaN(result11)) {
         document.getElementById('biaya_pegawai').value = result11;
      } 
    
      var result12 = parseInt(data1) * 40.74/100;
      if (!isNaN(result12)) {
         document.getElementById('biaya_kantor').value = result12;
      }
      var result13 = parseInt(data1) * 3.69/100;
      if (!isNaN(result13)) {
         document.getElementById('biaya_pajak').value = result13;
      }
     
    }
    </script>

<script>
    function ppajak() {
        
      var data100 = document.getElementById("jenisbarang").value;
      var data101 = document.getElementById("harga_pembelian").value;
      var data102 = document.getElementById("jenispajak").value;
        
      document.getElementById("jenisbarang").value = data100;
      var result100 = (parseInt(data101) * parseInt(data102) * 100/111) * parseInt(data100);
      if (!isNaN(result100)) {
         document.getElementById('dppmasukan').value = result100;
      } 
      var result101 = ((parseInt(data101) - result100) * parseInt(data102))* parseInt(data100);
      if (!isNaN(result101)) {
         document.getElementById('ppnmasukan').value = result101;
      } 
    
     
     
    }
    </script>


<script>
    function sum() {
      var txtFirstNumberValue = document.getElementById('harga_pembelian').value;
      var txtSecondNumberValue = document.getElementById('kuantum').value;
      var txtTiluNumberValue = document.getElementById('nominal_pembelian').value;
      var txtHijiNumberValue = document.getElementById('opslag').value;
      var txtOpatNumberValue = document.getElementById('nominal_opslag').value;
      var txtLimaNumberValue = document.getElementById('biaya_pengadaan').value;
      var txtEnamNumberValue = document.getElementById('biaya_umum').value;
      var txtTujuhNumberValue = document.getElementById('biaya_uitslag').value;
      var txtDalapanNumberValue = document.getElementById('biaya_angkutan').value;
      var txtSalapanNumberValue = document.getElementById('biaya_operasional').value;
      var txtSapuluhNumberValue = document.getElementById('jumlah_bulan').value;
      var txtSabelasNumberValue = document.getElementById('margin_bulog').value;
      var txtDuabelasNumberValue = document.getElementById('ppnmasukan').value;
      var txtTigabelasNumberValue = document.getElementById('jenisbarang').value;
      var txtOpatbelasNumberValue = document.getElementById('sewa_gudang').value;
      var txtLimabelasNumberValue = document.getElementById('asuransi_komoditas').value;
      var txtGenepbelasNumberValue = document.getElementById('handling_gudang').value;
      var txtTujuhbelasNumberValue = document.getElementById('move_nas').value;
      var txtDalapanbelasNumberValue = document.getElementById('move_reg').value;
      var data90 = document.getElementById("jenispajak").value;
      var txtTilubelasNumberValue = document.getElementById('jenisbarang').value;
      

      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('nominal_pembelian').value =result;
      }
      var result90 = (parseInt(txtFirstNumberValue) * parseInt(data90) * 100/111) * parseInt(txtTilubelasNumberValue);
      if (!isNaN(result90)) {
         document.getElementById('dppmasukan').value = result90;
      } 
      var result91 = ((parseInt(txtFirstNumberValue) - result90) * parseInt(data90))* parseInt(txtTilubelasNumberValue);
      if (!isNaN(result91)) {
         document.getElementById('ppnmasukan').value = result91;
      } 
      var result1 = parseInt(txtHijiNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result1)) {
         document.getElementById('nominal_opslag').value =result1;
      }
      var result2 = result + result1;
      if (!isNaN(result2)) {
         document.getElementById('biaya_pengadaan').value =result2;
      }
      var result3 = parseInt(txtSecondNumberValue) * 1/10000;
      if (!isNaN(result3)) {
         document.getElementById('komoditi_rusak').value = result3;
      }
      var result4 = parseInt(txtSecondNumberValue) - result3 ;
      if (!isNaN(result4)) {
         document.getElementById('persediaan').value = result4;
      }
      var result5 = result2 / result4;
      if (!isNaN(result5)) {
         document.getElementById('hpp').value =result5;
      }
      var result6 = parseInt(txtEnamNumberValue)  * result4;
      if (!isNaN(result6)) {
         document.getElementById('nombiaya_umum').value =result6;
      }
      var result7 = result6 * 55.57/100;
      if (!isNaN(result7)) {
         document.getElementById('nombiaya_pegawai').value =result7;
      }
      var result8 = result6 * 40.74/100;
      if (!isNaN(result8)) {
         document.getElementById('nombiaya_kantor').value =result8;
      }
      var result9 = result6 * 3.69/100;
      if (!isNaN(result9)) {
         document.getElementById('nombiaya_pajak').value =result9;
      }
      var result10 = result4 * parseInt(txtTujuhNumberValue);
      if (!isNaN(result10)) {
         document.getElementById('nombiaya_uitslag').value =result10;
      }
      var result11 = result4 * parseInt(txtDalapanNumberValue);
      if (!isNaN(result11)) {
         document.getElementById('nombiaya_angkutan').value =result11;
      }
      var result12 = result4 * parseInt(txtSalapanNumberValue);
      if (!isNaN(result12)) {
         document.getElementById('nombiaya_operasional').value =result12;
      }
      var result13 = result10 + result11 + result12  ;
      if (!isNaN(result13)) {
         document.getElementById('biaya_penjualan').value =result13;
      }
      var result30 = parseInt(txtOpatbelasNumberValue)  * parseInt(txtSecondNumberValue);
      if (!isNaN(result30)) {
         document.getElementById('totsewa_gudang').value =result30;
      }
      var result31 = parseInt(txtLimabelasNumberValue)  * parseInt(txtSecondNumberValue);
      if (!isNaN(result31)) {
         document.getElementById('totasuransi_komoditas').value =result31;
      }
      var result32 = parseInt(txtGenepbelasNumberValue)  * parseInt(txtSecondNumberValue);
      if (!isNaN(result32)) {
         document.getElementById('tothandling_gudang').value =result32;
      }
      var result33 = parseInt(txtTujuhbelasNumberValue)  * parseInt(txtSecondNumberValue);
      if (!isNaN(result33)) {
         document.getElementById('totmove_nas').value =result33;
      }
      var result34 = parseInt(txtDalapanbelasNumberValue)  * parseInt(txtSecondNumberValue);
      if (!isNaN(result34)) {
         document.getElementById('totmove_reg').value =result34;
      }
      var result35 = result30 + result31 + result32 + result33 + result34;
      if (!isNaN(result35)) {
         document.getElementById('totbiaya_eksploitasi').value =result35;
      }
      var result36 = result35 / result4;
      if (!isNaN(result36)) {
         document.getElementById('biaya_eksploitasiperkg').value =result36;
      }
      var result14 = (result2 + result6 + result13 + result35) * 1/1000  ;
      if (!isNaN(result14)) {
         document.getElementById('nombiaya_provadm').value =result14;
      }
      var result15 = result14 / result4 ;
      if (!isNaN(result15)) {
         document.getElementById('biaya_provadm').value =result15;
      }
      var result16 = parseInt(txtSapuluhNumberValue) * ((75/1000)/12);
      if (!isNaN(result16)) {
         document.getElementById('tarif_bunga').value = result16;
      }
      var result17 = result16 * (result2 + result6 + result13 + result35);
      if (!isNaN(result17)) {
         document.getElementById('nombiaya_bunga').value =result17;
      }
      var result18 = result17 / result4;
      if (!isNaN(result18)) {
         document.getElementById('biaya_bunga').value =result18;
      }
      var result19 = result17 + result14;
      if (!isNaN(result19)) {
         document.getElementById('totbiaya_bank').value =result19;
      }
      var result20 = result19 / result4;
      if (!isNaN(result20)) {
         document.getElementById('biaya_bank').value =result20;
      }
      var result21 = result19 + result13 + result6;
      if (!isNaN(result21)) {
         document.getElementById('biaya_mbp').value =result21;
      }
      var result22 = result21 + result2;
      if (!isNaN(result22)) {
         document.getElementById('total_biaya').value =result22;
      }
      var result23 = result22 / result4;
      if (!isNaN(result23)) {
         document.getElementById('hp_penjualan').value =result23;
      }
      var result25 = parseInt(txtFirstNumberValue) + parseInt(txtHijiNumberValue);
      if (!isNaN(result25)) {
         document.getElementById('biaya_pengadaanperkg').value =result25;
      }
      var result26 = result23 + parseInt(txtSabelasNumberValue);
      if (!isNaN(result26)) {
         document.getElementById('dppkeluaran').value =result26;
      }
      var result27 = (result26 * 11/100) * parseInt(txtTigabelasNumberValue);
      if (!isNaN(result27)) {
         document.getElementById('ppnkeluaran').value =result27;
      }
      var result28 = (result27 - parseInt(txtDuabelasNumberValue)) * parseInt(txtTigabelasNumberValue);
      if (!isNaN(result28)) {
         document.getElementById('ppn').value =result28;
      }
      var result29 = result26 + result28;
      if (!isNaN(result29)) {
         document.getElementById('harga_jual').value =result29;
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