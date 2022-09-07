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

    <title>Form NI Sampel</title>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script>
    //Fungsi untuk clear value pada setiap inputan
    $(document).ready(function(){
    //variabel global
    var no=0;
    //fungsi mengkonfersi Nan ke 0
    function getNum(val){
        if (isNaN(val)){
            return 0;
            }
            return val;
    }

    //Fungsi untuk clear value pada setiap inputan
    function kosong(){
        $("#nama_produk").prop("");
        $("#kemasan_sampel").prop("");
        $("#koli_sampel").val("0");
        $("#kuantum_sampel").val("0");
    }

    //Membuat fungsi untuk menghitung kuantum
    function hitung_kuantum(){
        var kemasan_sampel = parseInt($("#kemasan_sampel").val());
        var koli_sampel = parseInt($("#koli_sampel").val());
        kuantum_sampel=kemasan_sampel*koli_sampel;

        $("#kuantum_sampel").val(getNum(kuantum_sampel));
    }

    //pada saat klik tombol tambah maka akan memanggil fungsi kosong
    $("#baru").click(function(){
        kosong();
    });

    //Pada saat klik tombol tambah maka data pada inputan akan ditambahkan pada tabel
    $("#tambah").click(function(){
        var nama_produk=$("#nama_produk").val();
        var kemasan_sampel=$("#kemasan_sampel").val();
        var koli_sampel=$("#koli_sampel").val();
        var kuantum_sampel=$("#kuantum_sampel").val();

        //Pada saat klik tambah maka semua inputan akan dicek apakah masih kosong atau tidak
        if(nama_produk=="" || kemasan_sampel=="" || koli_sampel=="" || kuantum_sampel==""){
            alert("Isi data dengan lengkap");

        }else{

            //Menambahkan data dengan fungsi append
            no++;

            $("#datasampel").append("<tr><td>"+no+"<td name="nama_produk1">"+nama_produk+"<td>"<input name="kemasan_sampel1">+kemasan_sampel+" kg"+"<td>"+<input name="koli_sampel1">koli_sampel+"<td>"+<input name="kuantum_sampel1">kuantum_sampel);
           
             }

    });

     
});
    
    
    
    
    </script>
  
   

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
                    <form action="tambahnisampel.php" method="post" id="form_tambah" role="form" enctype="multipart/form-data" name="form_tambah"> 
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Form NI Sampel Produk</h1>
                    
                    <!-- DataTales Example --> 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Silahkan isi sesuai dengan pengajuan</h6>
                        </div>
                        <div class="card-body">
                        <table border="0" cellpadding="5">
                                   
                                    <tr>
                                        <td size="100">ID NI Rebagging</td>
                                        <td>
                                        <input value= "<?php
                                        $kodeauto = mysqli_query($koneksi, "SELECT max(no_ni) as maxID from master_noni");
                                        $datakode = mysqli_fetch_array($kodeauto);

                                        $kode = $datakode['maxID'];

                                        $kode++;
                                        $ket = "RBG";

                                        $hasilkodeauto =sprintf("%03s",$kode);
                                        

                                        echo $hasilkodeauto;

                                        ?>" type="text" readonly="readonly" class="form-control" name="no_ni">
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Gudang</td>
                                        <td><select name="gudang_sampel" class="form-control" id="gudang_sampel">
                                        <option value="#">Pilih Gudang</option>
                                        <option value="Gudang Cisaranten Kidul">Gudang Cisaranten Kidul</option>
                                        <option value="Gudang Utama">Gudang Utama</option>
                                        <option value="Gudang Citeureup">Gudang Citeureup</option>
                                        <option value="Gudang Paseh">Gudang Paseh</option>
                                        </select></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pengajuan</td>
                                        <td><input type="date" class="form-control" name="tanggal_sampel" id="tanggal_sampel"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
                                    <td>Perihal</td>
                                        <td><input type="text" class="form-control" name="hal_sampel" id="hal_sampel"></td>
                                    </tr>
                                   
                                                     
                                    </table>
                            
                        </div>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Produk Sampel</h6>
                        </div>
                        <div class="card-body">
                        <table border="0" cellpadding="5">
                                     <tr>
                                        <td>Nama Produk</td>
                                        <?php
                                        $tampil2  =mysqli_query($koneksi, "SELECT * FROM master_produk");
                                        ?>

                                        <td>
                                        <select name="nama_produk" class="form-control" id="nama_produk">
                                        <option value="#">Pilih Produk</option>
                                        <?php
                                        while ($data2 =mysqli_fetch_array($tampil2)) { ?>
                                            
                                            <option value="<?php echo $data2['nama_produk']?>"><?php echo $data2['nama_produk']?></option>
                                            <?php }?>
                                        </select>
                                        </td>  
                                        <td></td>
                                        <td></td>
                                        <td>Kemasan</td>
                                        <td><select name="kemasan_sampel" class="form-control" id="kemasan_sampel">
                                        <option value="#">Pilih Kemasan</option>
                                        <option value="1">1kg</option>
                                        <option value="5">5kg</option>
                                        <option value="10">10kg</option>
                                        <option value="15">15kg</option>
                                        <option value="20">20kg</option>
                                        <option value="25">25kg</option>
                                         </select></td>
                                        <td></td>
                                        <td></td>
                                        <td>Koli</td>
                                        <td><input type="number" class="form-control" name="koli_sampel" onkeyup="sum();" id="koli_sampel"></td>
                                        <td></td>
                                        <td></td>
                                        <td>Jumlah Kuantum</td>
                                        <td><input type="number" class="form-control" readonly="readonly" name="kuantum_sampel" id="kuantum_sampel"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="button" class="btn btn-primary" value="+Tambah" id="tambah"></td>
                                    </tr>
                                                                                       
                                    </table>                            
                        </div>
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data NI Sampel</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0" id="tabel">
                                    <thead>
                                        <tr>
                                            <th style="background:#4e73df;color:#fff;">No</th>
                                            <th style="background:#4e73df;color:#fff;">Nama Produk</th>
                                            <th style="background:#4e73df;color:#fff;">Kemasan</th>
                                            <th style="background:#4e73df;color:#fff;">Koli</th>
                                            <th style="background:#4e73df;color:#fff;">Kuantum</th>
                                       </tr>
                                     </thead>
                                     <tbody id="datasampel">
                                     </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                       
                        
                        <div class="modal-footer">
                        
                            <td><input class="btn btn-secondary" name="reset" type="reset" value="Cancel"></td>
                            <td><a href="tablenirebag.php"><input type="button" class="btn btn-primary" value="Kembali"></a></td>
                            <td><input class="btn btn-primary" name="simpan2" type="submit" value="Simpan"></td>
                        </div>
                         </form>
                            <?php

                                include "koneksi.php";

                                if(isset($_POST['simpan2'])){
                                    mysqli_query($koneksi, "INSERT INTO master_nisampel set
                                    no_ni = '$_POST[no_ni]',
                                    tanggal_sampel = '$_POST[tanggal_sampel]',
                                    gudang_sampel = '$_POST[gudang_sampel]',
                                    nama_atasan = '$_POST[nama_atasan]',
                                    hal_sampel = '$_POST[hal_sampel]'");

                                    mysqli_query($koneksi, "INSERT INTO master_noni set no_ni = '$_POST[no_ni]'");

                                    mysqli_query($koneksi, "INSERT INTO master_detailsampel set
                                    no_ni = '$_POST[no_ni]',
                                    nama_produk = '$_POST[nama_produk]',
                                    kemasan_sampel = '$_POST[kemasan_sampel]',
                                    koli_sampel = '$_POST[koli_sampel]',
                                    kuantum_sampel = '$_POST[kuantum_sampel]'");

                                    for($i=0; $i<4; $i++){

                                        $lengkapsampel= "INSERT INTO master_detailsampel(nama_produk, kemasan_sampel, koli_sampel, kuantum_sampel) VALUES ('$_POST[nama_produk][$i]','$_POST[kemasan_sampel][$i]','$_POST[koli_sampel][$i]','$_POST[kuantum_sampel][$i]')";
                                    
                                    }
                                    mysqli_query($koneksi, $lengkapsampel);
                                    
                                    echo "<script>alert('Berhasil Mendambah Data NI Rebag'); window.location ='tablenisample.php'</script>";
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
    function sum() {
      var txtFirstNumberValue = document.getElementById('kemasan_sampel').value;
      var txtSecondNumberValue = document.getElementById('koli_sampel').value;
          

      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('kuantum_sampel').value =result;
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