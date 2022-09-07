<?php
include "koneksi.php";
    $delete=mysqli_query($koneksi,"DELETE FROM master_cuti WHERE id_pengajuancuti='$_GET[id_pengajuancuti]'");
    if($delete) {
        header("location:tableizincuti.php");
        }else{
            echo"Gagal Menghapus";
        }
?>